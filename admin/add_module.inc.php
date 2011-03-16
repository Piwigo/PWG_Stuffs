<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

if ($page['tab'] == 'add_module')
{
  if (!isset($_GET['path']) or !isset($modules[$_GET['path']]))
  {
    die('Wrong module path.');
  }
  else
  {
    $module_path = $_GET['path'];
  }
}

// Save module
if (isset($_POST['submit']) and !is_adviser())
{
  @include($module_path.'config.inc.php');
  if (empty($page['errors']))
  {
    if (empty($_POST['module_name']))
    {
      array_push($page['errors'], l10n('stuffs_no_name'));
    }
    else
    {
      $module_name = $_POST['module_name'];
      $desc = !empty($_POST['module_desc']) ? '"' . $_POST['module_desc'] . '"' : 'NULL';
      $groups = !empty($_POST['groups']) ? '"' . implode(',', $_POST['groups']) . '"' : 'NULL';
      $users = 'NULL';
      if ($conf['Stuffs']['user_perm'])
      {
        $users = !empty($_POST['users']) ? '"' . implode(',', $_POST['users']) . '"' : '""';
      }
      $level = !empty($_POST['level']) ? $_POST['level'] : 0;
      $show_title = isset($_POST['show_title']) ? '"true"' : '"false"';
      $on_home = isset($_POST['on_home'])  ? '"true"' : '"false"';
      $on_root = isset($_POST['on_root'])  ? '"true"' : '"false"';
      $on_cats = isset($_POST['on_cats'])  ? '"true"' : '"false"';
      $on_picture = isset($_POST['on_picture'])  ? '"true"' : '"false"';

      $sav_datas = (!empty($datas) ? '"' . addslashes(serialize($datas)) . '"' : 'NULL');

      if (isset($_GET['edit']))
      {      
        pwg_query('
UPDATE ' . STUFFS_TABLE . '
SET name ="' . $module_name . '",
    descr=' . $desc . ',
    datas=' . $sav_datas . ',
    users=' . $users . ',
    groups=' . $groups . ',
    level=' . $level . ',
    show_title=' . $show_title .',
    on_home=' . $on_home .',
    on_root=' . $on_root .',
    on_cats=' . $on_cats . ',
    on_picture='. $on_picture . '
WHERE id = ' . $_GET['edit'] . ';');
        if (isset($_GET['redirect']))
        {
          redirect(urldecode($_GET['redirect']));
        }
      }
      else
      {
        $query = 'SELECT IF(MAX(id)+1 IS NULL, 1, MAX(id)+1) AS next_element_id  FROM ' . STUFFS_TABLE . ' ;';
        list($next_element_id) = mysql_fetch_array(pwg_query($query));

        $query = 'SELECT MAX(pos)+1 AS next_pos  FROM ' . STUFFS_TABLE . ' ;';
        list($pos) = mysql_fetch_array(pwg_query($query));

        $query = '
INSERT INTO ' . STUFFS_TABLE . ' ( id, pos, name, descr, path, datas, users, groups, level, show_title, on_home, on_root, on_cats, on_picture, id_line, width )
VALUES (' . $next_element_id . ' ,
  ' . $pos . ',
  "' . $module_name . '",
  ' . $desc . ',
  "' . $module_path . '",
  ' . $sav_datas . ',
  ' . $users . ',
  ' . $groups . ',
  ' . $level . ',
  ' . $show_title . ',
  ' . $on_home . ',
  ' . $on_root . ',
  ' . $on_cats . ',
  ' . $on_picture . ',
  NULL,
  NULL);';
        pwg_query($query);
      }
      redirect(PHPWG_ROOT_PATH.'admin.php?page=plugin&section=' . STUFFS_DIR . '%2Fadmin%2Fadmin.php');
    }
  }
}

// Default module data
if ($page['tab'] == 'add_module')
{
  $module['users'] = array('guest', 'generic', 'normal', 'admin', 'webmaster');
  $module['groups'] = array();

  $template->assign(array(
    'STUFFS_TITLE' => l10n('stuffs_add_mod'),
    'MODULE_NAME' => $modules[$module_path]['name'],
    'show_title_CHECKED' => true,
    )
  );

  $template->assign('selected_options', array(
    'on_home' => true,
    'on_root' => true,
    'on_cats' => false,
    'on_picture' => false,
    )
  );
}

// Users perm
if ($conf['Stuffs']['user_perm'])
{
  $users_id = array('guest', 'generic', 'normal', 'admin', 'webmaster');
  $users = array();
  foreach ($users_id as $id)
  {
    $users[$id] = l10n('user_status_'.$id);
  }
  $template->assign(array(
    'users' => $users,
    'selected_users' => isset($module['users']) ? $module['users'] : $users_id,
    )
  );
}

// Groups perm
if ($conf['Stuffs']['group_perm'])
{
	$query = 'SELECT id, name FROM '.GROUPS_TABLE.' ORDER BY name ASC;';
  $result = pwg_query($query);
  $groups = array();
  while ($row = pwg_db_fetch_assoc($result))
  {
    $groups[$row['id']] = $row['name'];
  }
  $template->assign(array(
    'groups' => $groups,
    'selected_groups' => isset($module['groups']) ? $module['groups'] : array(),
    )
  );
}

// Level perm
if ($conf['Stuffs']['level_perm'])
{
  foreach ($conf['available_permission_levels'] as $level)
  {
    $level_options[$level] = l10n(sprintf('Level %d', $level));
  }
  $template->assign(array(
    'level_perm' => $level_options,
    'level_selected' => isset($module['level']) ? $module['level'] : 0,
    )
  );
}

// Display options
$template->assign('display_options', array(
  'on_home' => true,
  'on_root' => true,
  'on_cats' => true,
  'on_picture' => true,
  )
);

// Module configuration
@include_once($module_path.'config.inc.php');

$template->set_filenames(array('plugin_admin_content' => dirname(__FILE__) . '/template/add_module.tpl'));
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');

?>