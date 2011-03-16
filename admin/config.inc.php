<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

// Save config
if (isset($_POST['submit']))
{
  if (!$conf['Stuffs']['user_perm'] and isset($_POST['user_perm']))
  {
    pwg_query('UPDATE '.STUFFS_TABLE.' SET users = "guest,generic,normal,admin,webmaster";');
  }
  if ($conf['Stuffs']['user_perm'] and !isset($_POST['user_perm']))
  {
    pwg_query('UPDATE '.STUFFS_TABLE.' SET users = NULL;');
  }
  if ($conf['Stuffs']['level_perm'] and !isset($_POST['level_perm']))
  {
    $default_user = get_default_user_info(true);
    pwg_query('UPDATE '.STUFFS_TABLE.' SET level = '.$default_user['level'].';');
  }
  if ($conf['Stuffs']['group_perm'] and !isset($_POST['group_perm']))
  {
    pwg_query('UPDATE '.STUFFS_TABLE.' SET groups = NULL;');
  }
  if ($conf['Stuffs']['level_perm'] and !isset($_POST['level_perm']))
  {
    pwg_query('UPDATE '.STUFFS_TABLE.' SET level = 0;');
  }

  $params = array('group_perm', 'user_perm', 'level_perm');

  foreach ($params as $param)
  {
    $conf['Stuffs'][$param] = isset($_POST[$param]);
  }

  conf_update_param('PWG_Stuffs', pwg_db_real_escape_string(serialize($conf['Stuffs'])));

  array_push($page['infos'], l10n('Information data registered in database'));
}

// Parametrage du template
$template->assign('stuffs_conf', $conf['Stuffs']);

$template->set_filenames(array('plugin_admin_content' => dirname(__FILE__) . '/template/config.tpl'));
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');

?>