<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
global $user, $conf;

// +-----------------------------------------------------------------------+
// |                         comments management                           |
// +-----------------------------------------------------------------------+
// comments deletion
if (isset($_GET['delete']) and is_numeric($_GET['delete']) and is_admin())
{
    check_status(ACCESS_ADMINISTRATOR);
    check_pwg_token();
    $query = '
DELETE FROM ' . COMMENTS_TABLE . '
  WHERE id=' . $_GET['delete'] . '
;';
    pwg_query($query);
}

// comments validation
if (isset($_GET['validate']) and is_numeric($_GET['validate']) and is_admin())
{
    check_status(ACCESS_ADMINISTRATOR);
    check_pwg_token();
    $query = '
UPDATE ' . COMMENTS_TABLE . '
  SET validated = \'true\'
  , validation_date = NOW()
  WHERE id=' . $_GET['validate'] . '
;';
    pwg_query($query);
}

// +-----------------------------------------------------------------------+
// |                        last comments display                          |
// +-----------------------------------------------------------------------+
$comments = array();
$element_ids = array();
$category_ids = array();
$max_width = 0;
if (!is_admin())
{
  $clauses[] = 'validated="true"';
}
$clauses[] = get_sql_condition_FandF (
    array ('forbidden_categories' => 'category_id',
        'visible_categories' => 'category_id',
        'visible_images' => 'ic.image_id'), '', true);

$query = 'SELECT com.id AS comment_id
   , com.image_id
   , ic.category_id
   , com.author
   , com.date
   , com.content
   , com.id AS comment_id
   , com.validated
   FROM ' . IMAGE_CATEGORY_TABLE . ' AS ic
   INNER JOIN ' . COMMENTS_TABLE . ' AS com
   ON ic.image_id = com.image_id
   WHERE ' . implode(' AND ', $clauses) . '
    GROUP BY comment_id
    ORDER BY date DESC
    LIMIT 0, ' . $datas[0] . ';';

$result = pwg_query($query);
while ($row = mysql_fetch_assoc($result))
{
  array_push($comments, $row);
  array_push($element_ids, $row['image_id']);
  array_push($category_ids, $row['category_id']);
}

if (count($comments) > 0)
{
  $block['TITLE_URL'] = 'comments.php';
  $block['comments'] = array();

  // retrieving element informations
  $elements = array();
  $query = '
SELECT id, name, file, path, tn_ext
  FROM '.IMAGES_TABLE.'
  WHERE id IN ('.implode(',', $element_ids).')
;';
  $result = pwg_query($query);
  while ($row = mysql_fetch_assoc($result))
  {
    $elements[$row['id']] = $row;
  }

  // retrieving category informations
  $query = '
SELECT id, name, permalink, uppercats
  FROM '.CATEGORIES_TABLE.'
  WHERE id IN ('.implode(',', $category_ids).')
;';
  $categories = hash_from_query($query, 'id');

  foreach ($comments as $comment)
  {
    if (!empty($elements[$comment['image_id']]['name']))
    {
      $name=$elements[$comment['image_id']]['name'];
    }
    else
    {
      $name=get_name_from_file($elements[$comment['image_id']]['file']);
    }

    // source of the thumbnail picture
    $thumbnail_src = get_thumbnail_url( $elements[$comment['image_id']] );

    // link to the full size picture
    $url = make_picture_url(
            array(
              'category' => $categories[ $comment['category_id'] ],
              'image_id' => $comment['image_id'],
              'image_file' => $elements[$comment['image_id']]['file'],
            )
          );

    $author = $comment['author'];
    if (empty($comment['author']))
    {
      $author = l10n('guest');
    }

    $tpl_comment =
      array(
        'U_PICTURE' => $url,
        'TN_SRC' => $thumbnail_src,
        'ALT' => $name,
        'AUTHOR' => trigger_event('render_comment_author', $author),
        'DATE' => format_date($comment['date'],'mysql_datetime',true),
        'CONTENT' => trigger_event('render_comment_content',$comment['content']),
        'WIDTH' => $datas[3],
        'HEIGHT' => $datas[4],
        );

    switch ($datas[2])
    {
      case 1 :
        $tpl_comment['CLASS'] = 'one_comment';
        break;
      case 2 :
        $tpl_comment['CLASS'] = 'two_comment';
        break;
      case 3 :
        $tpl_comment['CLASS'] = 'three_comment';
        break;
    }

    if ( is_admin() )
    {
      $url = get_root_url().'index.php'.get_query_string_diff(array('delete','validate'));
      $tpl_comment['U_DELETE'] = add_url_params($url, array(
            'delete' => $comment['comment_id'],
            'pwg_token' => get_pwg_token()));

            if ($comment['validated'] != 'true')
      {
        $tpl_comment['U_VALIDATE'] = add_url_params($url, array(
            'validate' => $comment['comment_id'],
            'pwg_token' => get_pwg_token()));
      }
    }

    // Show comment editor link
    if (defined('CE_PATH') and ((!is_a_guest() and ($user[$conf['user_fields']['username']] == $author)) or is_admin()))
    {
      load_language('plugin.lang', CE_PATH);
      $tpl_comment['U_EDIT'] = add_url_params(get_root_url() . 'index.php', array(
            CE_ACTION => CE_ACTION_EDIT,
            CE_ID => $comment['comment_id'],
            'pwg_token' => get_pwg_token()));
    }
    array_push($block['comments'], $tpl_comment);
  }
  $block['TEMPLATE'] = 'stuffs_lastcoms.tpl';
}

?>