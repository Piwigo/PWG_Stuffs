<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

global $template, $conf, $user;

load_language('plugin.lang', STUFFS_PATH);
include_once(PHPWG_ROOT_PATH.'admin/include/tabsheet.class.php');
include_once(STUFFS_PATH . 'functions.inc.php');
$my_base_url = get_admin_plugin_menu_link(__FILE__);

// +-----------------------------------------------------------------------+
// |                            Tabsheet
// +-----------------------------------------------------------------------+
$page['tab'] = isset($_GET['tab']) ? $_GET['tab'] : 'manage';

$tabsheet = new tabsheet();
$tabsheet->add('manage', l10n('stuffs_mods_management'), $my_base_url.'&amp;tab=manage');
if ($page['tab'] == 'add_module')
{
  $tabsheet->add('add_module', l10n('stuffs_add_mod'), $my_base_url.'&amp;tab=add_module&amp;path='.$_GET['path']);
}
else
{
  $tabsheet->add('new', l10n('stuffs_add_mod'), $my_base_url.'&amp;tab=new');
}
if ($page['tab'] == 'edit_module')
{
  $tabsheet->add('edit_module', l10n('stuffs_edit_mod'), $my_base_url.'&amp;tab=edit_module&amp;edit='.$_GET['edit']);
}
$tabsheet->add('config', l10n('Configuration'), $my_base_url.'&amp;tab=config');
$tabsheet->select($page['tab']);
$tabsheet->assign();

//Récupération des modules disponibles
add_event_handler('get_stuffs_modules', 'get_default_stuffs_modules');
$disp_modules = trigger_event('get_stuffs_modules', array());
uasort($disp_modules, 'name_compare');

$modules = array();
foreach($disp_modules as $module)
{
  $module['path'] = PHPWG_ROOT_PATH.trim($module['path'], './').'/';
  $modules[$module['path']] = $module;
}

// Include file
include(STUFFS_PATH.'admin/'.$page['tab'].'.inc.php');

?>