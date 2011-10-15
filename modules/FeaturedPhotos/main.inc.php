<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

global $page, $user, $conf, $template;

$page_save = $page;
$tpl_save = $template->get_template_vars('THUMBNAILS');

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
    INNER JOIN '.FAVORITES_TABLE.' AS f       ON f.image_id = i.id
    INNER JOIN '.IMAGE_CATEGORY_TABLE.' AS ic ON i.id = ic.image_id
    INNER JOIN '.CATEGORIES_TABLE.' AS c      ON ic.category_id = c.id
      WHERE f.user_id = '.$conf['webmaster_id'].'
       '.$forbidden.';';

$page['items'] = array_from_query($query, 'id');
$page['start'] = 0;
$page['nb_image_page'] = $datas['nb_images'];
$page['section'] = 'category';

include(PHPWG_ROOT_PATH.'include/category_default.inc.php');

if (!empty($tpl_thumbnails_var))
{
  $block['thumbnails'] = $tpl_thumbnails_var;
  $block['TEMPLATE'] = 'stuffs_thumbnails.tpl';
}

$page = $page_save;
$template->assign('THUMBNAILS', $tpl_save);

?>