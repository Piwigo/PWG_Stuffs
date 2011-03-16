<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
if (empty($datas)) $datas = array('cloud');

// Enregistrement de la configuration
if (isset($_POST['submit']) and !is_adviser())
{
  $datas = array($_POST['tag_display']);
}

$template->assign($datas[0].'_CHECKED', 'checked="checked"');

$template->set_filenames(array('module_options' => dirname(__FILE__) . '/config.tpl'));
$template->assign_var_from_handle('MODULE_OPTIONS', 'module_options');

?>