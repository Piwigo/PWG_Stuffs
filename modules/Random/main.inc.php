<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

global $page, $user, $conf, $template;

if (script_basename() == 'picture'
  or ($datas['cat_display'] == 'wo_thumb' and !empty($page['items']))
  or ($datas['cat_display'] == 'w_thumb' and empty($page['items']) and isset($page['category']))
  or ($datas['cat_display'] == 'selected_cats' and isset($page['category']) and !in_array($page['category']['id'], $datas['cat_selection'])))
{
  return false;
}

$forbidden = get_sql_condition_FandF
  (
    array
      (
        'forbidden_categories' => 'ic.category_id',
        'visible_categories' => 'ic.category_id',
        'visible_images' => 'i.id'
      ),
    'WHERE'
  );

$query ='
SELECT DISTINCT(i.id)
  FROM '.IMAGES_TABLE.' AS i
    INNER JOIN '.IMAGE_CATEGORY_TABLE.' AS ic ON i.id = ic.image_id
    INNER JOIN '.CATEGORIES_TABLE.' AS c ON ic.category_id = c.id
    '.$forbidden;

if (isset($page['category']))
{
  $query .= '
        AND ( c.uppercats LIKE \''.$page['category']['uppercats'].',%\' OR c.id = '.$page['category']['id'].' )
  ';
}

$query .= '
    ORDER BY RAND(NOW())
    LIMIT 0, '.$datas['nb_images'].'
  ;';

$pictures = array();
$selection = array_from_query($query, 'id');
 
if (count($selection) > 0)
{
  $rank_of = array_flip($selection);

  $query = '
SELECT *
  FROM '.IMAGES_TABLE.'
  WHERE id IN ('.implode(',', $selection).')
;';
  $result = pwg_query($query);
  while ($row = mysql_fetch_assoc($result))
  {
    $row['rank'] = $rank_of[ $row['id'] ];

    array_push($pictures, $row);
  }

  usort($pictures, 'rank_compare');
  unset($rank_of);
}

if (count($pictures) > 0)
{
  if ($user['show_nb_comments'])
  {
    $query = '
SELECT image_id, COUNT(*) AS nb_comments
  FROM '.COMMENTS_TABLE.'
  WHERE validated = \'true\'
    AND image_id IN ('.implode(',', $selection).')
  GROUP BY image_id
;';
    $nb_comments_of = simple_hash_from_query($query, 'image_id', 'nb_comments');
  }

  // template thumbnail initialization
  trigger_action('loc_begin_index_thumbnails', $pictures);
  $block['thumbnails'] = array();

  foreach ($pictures as $row)
  {
    // link on picture.php page
    $url = duplicate_picture_url(
          array(
            'image_id' => $row['id'],
            'image_file' => $row['file']
          ),
          array('start')
        );
    $url = add_url_params($url, array('pwgs_ra' => implode(',',$selection)));

    $tpl_var =
      array(
        'ID'        => $row['id'],
        'TN_SRC'    => get_thumbnail_url($row),
        'TN_ALT'    => $row['file'],
        'TN_TITLE'  => get_thumbnail_title($row),
        'ICON_TS'   => get_icon($row['date_available']),
        'URL'       => $url,

     /* Fields for template-extension usage */
        'FILE_PATH' => $row['path'],
        'FILE_POSTED' => $row['date_available'],
        'FILE_CREATED' => $row['date_creation'],
        'FILE_DESC' => $row['comment'],
        'FILE_AUTHOR' => $row['author'],
        'FILE_HIT' => $row['hit'],
        'FILE_SIZE' => $row['filesize'],
        'FILE_WIDTH' => $row['width'],
        'FILE_HEIGHT' => $row['height'],
        'FILE_METADATE' => $row['date_metadata_update'],
        'FILE_HAS_HD' => ($row['has_high'] and $user['enabled_high']=='true') ?
                  true:false, /* lack of include/functions_picture.inc.php */
      );

    if ($user['show_nb_hits'])
    {
      $tpl_var['NB_HITS'] = $row['hit'];
    }

    if ($conf['show_thumbnail_caption'])
    {// name of the picture
      if (isset($row['name']) and $row['name'] != '')
      {
        $name = $row['name'];
      }
      else
      {
        $name = str_replace('_', ' ', get_filename_wo_extension($row['file']));
      }

      $tpl_var['NAME'] = $name;
    }

    if ( isset($nb_comments_of) )
    {
      $tpl_var['NB_COMMENTS'] = (int)@$nb_comments_of[$row['id']];
    }

    $block['thumbnails'][] = $tpl_var;
  }

  $block['thumbnails'] = trigger_event('loc_end_index_thumbnails', $block['thumbnails'], $pictures);

  $block['TEMPLATE'] = 'stuffs_thumbnails.tpl';
}

?>