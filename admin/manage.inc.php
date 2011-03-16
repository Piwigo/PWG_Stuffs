<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

global $pwg_loaded_plugins;

// Delete module
if (isset($_GET['del']))
{
  pwg_query('DELETE FROM ' . STUFFS_TABLE . ' WHERE id = ' . $_GET['del'] . ' LIMIT 1;');
  redirect($my_base_url);
}

// Save order
if (isset($_POST['submitOrder']))
{
  asort($_POST['position'], SORT_NUMERIC);
  $pos = 1;
  foreach($_POST['position'] as $id => $old_pos)
  {
    $id_line = !empty($_POST['id_line'][$id]) ? '"'.$_POST['id_line'][$id].'"' : 'NULL';
    $width = (!empty($_POST['width'][$id]) and is_numeric($_POST['width'][$id])) ? '"'.$_POST['width'][$id].'"' : 'NULL';

    pwg_query('
UPDATE ' . STUFFS_TABLE . '
SET pos=' . $pos++ . ' , id_line='.$id_line.', width='.$width.'
WHERE id=' . $id . ' LIMIT 1');
  }

    pwg_query('
UPDATE ' . STUFFS_TABLE . '
SET datas = "'.addslashes(serialize(!isset($_POST['hidemb']))).'"
WHERE id=0;');

  array_push($page['infos'], l10n('stuffs_order_saved'));
}

// Display
$q = 'SELECT id, name, descr, path, id_line, width, datas
FROM ' . STUFFS_TABLE . '
ORDER BY pos ASC;';
$result = pwg_query($q);
$num = 0;
$pos = 1;
$id_line_options = array(
    '' => '-',
    'A' => 'A',
    'B' => 'B',
    'C' => 'C',
    'D' => 'D',
    'E' => 'E',
    'F' => 'F',
    'G' => 'G',
    'H' => 'H',
    'I' => 'I',
    'J' => 'J');

while ($module = mysql_fetch_assoc($result))
{
  $module['name'] = !empty($module['path']) ? $module['name'] : l10n('stuffs_main_block');

  $missing_message = '';
  if ($module['path'] == PHPWG_PLUGINS_PATH.'piclens/stuffs_module/' and !file_exists(PICLENS_PATH.'stuffs_module/main.inc.php'))
  {
    $missing_message = l10n('stuffs_piclens_need_upgrade');
  }
  if (!empty($module['path']))
  {
    preg_match('#^'.preg_quote(PHPWG_PLUGINS_PATH).'([^/]*?)/#', $module['path'], $match);
    if (!isset($pwg_loaded_plugins[$match[1]]))
    {
      $missing_message = l10n('stuffs_parent_plugin_is_missing');
    }
  }

  $template->append('modules', array(
    'ID' => $module['id'],
    'NAME' => trigger_event('render_stuffs_name', $module['name']),
    'DESC' => $module['descr'],
    'PATH' => $module['path'],
    'TYPE_NAME' => (isset($modules[$module['path']]['name']) ? $modules[$module['path']]['name'] : ''),
    'POS' => 10 * $pos++,
    'ID_LINE_OPTIONS' => $id_line_options,
    'ID_LINE_SELECTED' => $module['id_line'],
    'WIDTH' => $module['width'],
    'ID' => $module['id'],
    'U_EDIT' => $my_base_url.'-edit_module&amp;edit='.$module['id'],
    'U_DELETE' => $my_base_url.'&amp;del=' . $module['id'],
    'MISSING' => $missing_message,
    )
  );

  if (empty($module['path']))
  {
    $show = unserialize($module['datas']);
    $template->assign('HIDEMB', !$show); 
  }
}

$template->set_filename('plugin_admin_content', dirname(__FILE__) . '/template/manage.tpl');
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');

?>