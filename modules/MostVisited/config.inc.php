<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
if (!isset($datas))
{
  $datas = array(
    'nb_images'     => 5,
    'cat_display'   => 'all',
    'cat_selection' => array(),
  );
}

// Enregistrement de la configuration
if (isset($_POST['submit']) and !is_adviser())
{
  $datas = array(
    'nb_images' => intval($_POST['nb_images']),
    'cat_display' => $_POST['cat_display'],
    'cat_selection' => @$_POST['cat_selection'],
    );
  unset($_POST['on_picture']);
}

// Parametrage du template
$query = 'SELECT id,name,uppercats,global_rank FROM '.CATEGORIES_TABLE.';';
display_select_cat_wrapper($query,array(),'category_selection');

$template->assign(array(
  'NB_IMAGES' => $datas['nb_images'],
  'cat_display' => $datas['cat_display'],
  'category_selected' => $datas['cat_selection'],
  )
);

$display_options = & $template->get_template_vars('display_options');
$display_options['on_picture'] = false;

$template->set_filenames(array('module_options' => dirname(__FILE__) . '/config.tpl'));
$template->assign_var_from_handle('MODULE_OPTIONS', 'module_options');

?>