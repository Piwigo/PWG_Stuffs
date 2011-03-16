<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
if (!isset($datas)) $datas = array(5, 'on', 'default', '', '');

// Enregistrement de la configuration
if (isset($_POST['submit']) and !is_adviser())
{
  if (empty($_POST['nb_comments']))
  {
    array_push($page['errors'], l10n('lastcoms_no_nb_comments'));
  }
  else
  {
    if (!isset($_POST['show_admin_buttons']))
    {
      $_POST['show_admin_buttons'] = 'off';
    }
    $datas = array(
      $_POST['nb_comments'],
      $_POST['show_admin_buttons'],
      $_POST['nb_cadres'],
      $_POST['width'],
      $_POST['height']
      );
  }
}

// Parametrage du template
$template->assign('nb_cadres', array(
  'OPTIONS' => array('default' => 'default', 1 => 1, 2 => 2, 3 => 3),
  'SELECTED' => $datas[2]));

$template->assign(array(
  'NB_COMMENTS' => $datas[0],
  'WIDTH'       => $datas[3],
  'HEIGHT'      => $datas[4]
));
if ($datas[1] == 'on')
{
  $template->assign(array('SHOW_ADMIN_BUTTONS' => 'checked="checked"'));
}

$template->set_filenames(array('module_options' => dirname(__FILE__) . '/config.tpl'));
$template->assign_var_from_handle('MODULE_OPTIONS', 'module_options');

?>