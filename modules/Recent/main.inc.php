<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

global $page, $user, $conf, $template;

$page_save = $page;
$tpl_save = $template->get_template_vars('THUMBNAILS');

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
    'AND'
  );

$query ='
SELECT DISTINCT(i.id)
  FROM '.IMAGES_TABLE.' AS i
    INNER JOIN '.IMAGE_CATEGORY_TABLE.' AS ic ON i.id = ic.image_id
    INNER JOIN '.CATEGORIES_TABLE.' AS c ON ic.category_id = c.id
  WHERE i.date_available >= SUBDATE(
      CURRENT_DATE,INTERVAL '.$user['recent_period'].' DAY)';

if (isset($page['category']))
{
  $query .= '
        AND ( c.uppercats LIKE \''.$page['category']['uppercats'].',%\' OR c.id = '.$page['category']['id'].' )
  ';
}

$query .= '
    '.$forbidden.'
    ORDER BY  date_available DESC, i.id DESC
    LIMIT 0, '.$datas['nb_images'].'
  ;';
 
$page['items'] = array_from_query($query, 'id');
$page['start'] = 0;
$page['nb_image_page'] = $datas['nb_images'];
$page['section'] = 'category';

$tpl_thumbnails_var = array();
$pwg_stuffs_tpl_thumbnails_var = & $tpl_thumbnails_var;
include(PHPWG_ROOT_PATH.'include/category_default.inc.php');

if (!empty($pwg_stuffs_tpl_thumbnails_var))
{
  $block['thumbnails'] = $pwg_stuffs_tpl_thumbnails_var;
  $block['derivative_params'] = ImageStdParams::get_by_type(IMG_THUMB);
  $block['TEMPLATE'] = 'stuffs_thumbnails.tpl';
}

$page = $page_save;
$template->assign('THUMBNAILS', $tpl_save);

?>
