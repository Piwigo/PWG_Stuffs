<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
include_once(PHPWG_ROOT_PATH.'include/functions_comment.inc.php');

global $user, $conf;

// +-----------------------------------------------------------------------+
// |                         comments management                           |
// +-----------------------------------------------------------------------+

$comment_id = null;
$action = null;

$actions = array('delete_comment', 'validate_comment', 'edit_comment');
foreach ($actions as $loop_action)
{
  if (isset($_GET[$loop_action]))
  {
    $action = $loop_action;
    check_input_parameter($action, $_GET, false, PATTERN_ID);
    $comment_id = $_GET[$action];
    break;
  }
}

if (isset($action))
{
  check_pwg_token();

  $comment_author_id = get_comment_author_id($comment_id);
  $action = str_replace('_comment', '', $action);

  if (can_manage_comment($action, $comment_author_id))
  {
    $perform_redirect = false;

    if ('delete' == $action)
    {
      delete_user_comment($comment_id);
      $perform_redirect = true;
    }

    if ('validate' == $action)
    {
      validate_user_comment($comment_id);
      $perform_redirect = true;
    }

    if ('edit' == $action)
    {
      if (!empty($_POST['content']))
      {
        update_user_comment(
          array(
            'comment_id' => $_GET['edit_comment'],
            'image_id' => $_POST['image_id'],
            'content' => $_POST['content']
            ),
          $_POST['key']
          );

        $perform_redirect = true;
      }
      else
      {
        $edit_comment = $_GET['edit_comment'];
      }
    }

    if ($perform_redirect)
    {
      $redirect_url =
        PHPWG_ROOT_PATH
        .'index.php'
        .get_query_string_diff(array('delete_comment','validate_comment','edit_comment','pwg_token'));

      redirect(rtrim($redirect_url, '='));
    }
  }
}

// +-----------------------------------------------------------------------+
// |                        last comments display                          |
// +-----------------------------------------------------------------------+
if ( !is_admin() )
{
  $page['where_clauses'][] = 'validated=\'true\'';
}

$page['where_clauses'][] = get_sql_condition_FandF
  (
    array
      (
        'forbidden_categories' => 'category_id',
        'visible_categories' => 'category_id',
        'visible_images' => 'ic.image_id'
      ),
    '', true
  );

$comments = array();
$element_ids = array();
$category_ids = array();

$query = '
SELECT com.id AS comment_id,
       com.image_id,
       com.author,
       com.author_id,
       com.date,
       com.content,
       com.validated
  FROM '.IMAGE_CATEGORY_TABLE.' AS ic
    INNER JOIN '.COMMENTS_TABLE.' AS com
    ON ic.image_id = com.image_id
    LEFT JOIN '.USERS_TABLE.' As u
    ON u.'.$conf['user_fields']['id'].' = com.author_id
  WHERE '.implode('
    AND ', $page['where_clauses']).'
  GROUP BY comment_id,
       com.image_id,
       com.author,
       com.author_id,
       com.date,
       com.content,
       com.validated
  ORDER BY date DESC
  LIMIT 0, ' . $datas[0] . ';';

$query.= '
;';
$result = pwg_query($query);
while ($row = pwg_db_fetch_assoc($result))
{
  array_push($comments, $row);
  array_push($element_ids, $row['image_id']);
}

if (count($comments) > 0)
{
  $block['TEMPLATE'] = 'stuffs_lastcoms.tpl';
  $block['TITLE_URL'] = 'comments.php';
  $block['comments'] = array();
  $block['MAX_WIDTH'] = $datas[3];
  $block['MAX_HEIGHT'] = $datas[4];
  switch ($datas[2])
  {
    case 1 :
      $block['NB_COMMENTS_LINE'] = '99%';
      break;
    case 2 :
      $block['NB_COMMENTS_LINE'] = '49%';
      break;
    case 3 :
      $block['NB_COMMENTS_LINE'] = '32.4%';
      break;
  }

  // retrieving element informations
  $elements = array();
  $query = '
SELECT *
  FROM '.IMAGES_TABLE.'
  WHERE id IN ('.implode(',', $element_ids).')
;';
  $result = pwg_query($query);
  while ($row = pwg_db_fetch_assoc($result))
  {
    $elements[$row['id']] = $row;
  }

  // retrieving category informations
  $query = '
SELECT c.id, name, permalink, uppercats, com.id as comment_id
  FROM '.CATEGORIES_TABLE.' AS c
  LEFT JOIN '.IMAGE_CATEGORY_TABLE.' AS ic
  ON c.id=ic.category_id
  LEFT JOIN '.COMMENTS_TABLE.' AS com
  ON ic.image_id=com.image_id
  '.get_sql_condition_FandF
    (
      array
      (
	'forbidden_categories' => 'c.id',
	'visible_categories' => 'c.id'
       ),
      'WHERE'
     ).'
;';
  $categories = hash_from_query($query, 'comment_id');

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
    $src_image = new SrcImage($elements[$comment['image_id']]);

    // link to the full size picture
    $url = make_picture_url(
      array(
        'category' => $categories[ $comment['comment_id'] ],
        'image_id' => $comment['image_id'],
        'image_file' => $elements[$comment['image_id']]['file'],
        )
      );

    $tpl_comment = array(
      'ID' => $comment['comment_id'],
      'U_PICTURE' => $url,
      'src_image' => $src_image,
      'ALT' => $name,
      'AUTHOR' => trigger_event('render_comment_author', $comment['author']),
      'DATE'=>format_date($comment['date'], true),
      'CONTENT'=>trigger_event('render_comment_content',$comment['content']),
      'WIDTH' => $datas[3],
      'HEIGHT' => $datas[4],
      );

    if (can_manage_comment('delete', $comment['author_id']))
    {
      $url =
        get_root_url()
        .'index.php'
        .get_query_string_diff(array('edit_comment', 'delete_comment','validate_comment', 'pwg_token'));

      $tpl_comment['U_DELETE'] = add_url_params(
        $url,
        array(
          'delete_comment' => $comment['comment_id'],
          'pwg_token' => get_pwg_token(),
          )
        );
    }

    if (can_manage_comment('edit', $comment['author_id']))
    {
      $url =
        get_root_url()
        .'index.php'
	.get_query_string_diff(array('edit_comment', 'delete_comment','validate_comment', 'pwg_token'));

      $tpl_comment['U_EDIT'] = add_url_params(
        $url,
        array(
          'edit_comment' => $comment['comment_id'],
          'pwg_token' => get_pwg_token(),
          )
        );

      if (isset($edit_comment) and ($comment['comment_id'] == $edit_comment))
      {
        $tpl_comment['IN_EDIT'] = true;
        $key = get_ephemeral_key(2, $comment['image_id']);
        $tpl_comment['KEY'] = $key;
        $tpl_comment['IMAGE_ID'] = $comment['image_id'];
        $tpl_comment['CONTENT'] = $comment['content'];
        $tpl_comment['PWG_TOKEN'] = get_pwg_token();
      }
    }

    if (can_manage_comment('validate', $comment['author_id']))
    {
      if ('true' != $comment['validated'])
      {
        $tpl_comment['U_VALIDATE'] = add_url_params(
          $url,
          array(
            'validate_comment'=> $comment['comment_id'],
            'pwg_token' => get_pwg_token(),
            )
          );
      }
    }
    array_push($block['comments'], $tpl_comment);
  }
  $block['derivative_params'] = ImageStdParams::get_by_type(IMG_THUMB);
}

?>