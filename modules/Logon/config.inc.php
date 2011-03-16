<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

unset($template->_tpldata['user_perm.'], $template->_tpldata['group_perm.']);
$_POST['users'] = array('guest');

if (!isset($datas)) $datas = array('0');

// Enregistrement de la configuration
if (isset($_POST['submit'])) {
  if (!isset($_POST['remove_menubar_block'])) $_POST['remove_menubar_block']  = '0';
    $datas = array($_POST['remove_menubar_block']);
}

// Parametrage du template
if ($datas[0] == '1') $template->assign(array('REMOVE_MENUBAR_BLOCK' => 'checked="checked"'));


$template->set_filenames(array('module_options' => dirname(__FILE__) . '/config.tpl'));
$template->assign_var_from_handle('MODULE_OPTIONS', 'module_options');

?>