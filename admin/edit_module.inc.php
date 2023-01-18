<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

// Retrieve module data
$q = ('SELECT * FROM ' . STUFFS_TABLE . ' WHERE id = ' . $_GET['edit'] . ';');
$module = pwg_db_fetch_assoc(pwg_query($q));

$module['users'] = explode(',', ''.$module['users']);
$module['groups'] = explode(',', ''.$module['groups']);

$datas = (!empty($module['datas']) ? unserialize($module['datas']) : false);

$template->assign(array(
  'STUFFS_TITLE' => l10n('stuffs_edit_mod') . ' <i>' . trigger_change('render_stuffs_name', $module['name']) . '</i>',
  'MODULE_NAME' => $module['name'],
  'DESC_VALUE' => (isset($module['descr']) ? $module['descr'] : ''),
  'show_title_CHECKED' => ($module['show_title'] == 'true'),
  )
);

$template->assign('selected_options', array(
  'on_home' => ($module['on_home'] == 'true'),
  'on_root' => ($module['on_root'] == 'true'),
  'on_cats' => ($module['on_cats'] == 'true'),
  'on_picture' => ($module['on_picture'] == 'true'),
  )
);

$module_path = $module['path'];

include('add_module.inc.php');

?>