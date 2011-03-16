<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

//Ajout d'un module
if (isset($_POST['addModule']))
{
  if (!isset($_POST['module']))
  {
    array_push($page['errors'], l10n('stuffs_error_no_mod_selected'));
  }
  else
  {
    redirect(PHPWG_ROOT_PATH.'admin.php?page=plugin&section=' . STUFFS_DIR . '%2Fadmin%2Fadmin.php&tab=add_module&path=' . urlencode($_POST['module']));
  }
}

// Affichages des modules à ajouter
foreach($modules as $module)
{
  $template->append('add_module', array(
    'MODULE_PATH' => $module['path'],
    'NAME' => $module['name'],
    'DESC' => $module['description'],
    )
  );
}

$template->set_filename('plugin_admin_content', dirname(__FILE__) . '/template/new.tpl');
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');
?>