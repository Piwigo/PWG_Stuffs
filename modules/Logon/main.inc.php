<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

if (!is_a_guest()) return;

global $conf;

// template initialization
$block = array_merge($block, 
  array(
    'U_LOST_PASSWORD' => get_root_url().'password.php',
    'F_LOGIN_ACTION' => get_root_url().'identification.php',
    'authorize_remembering' => $conf['authorize_remembering'],
    ));

if ($conf['allow_user_registration'])
{
  $block['U_REGISTER'] = get_root_url().'register.php';
}

// Retirer le bloc identification rapide du menubar
if ($datas[0] == '1')
{
  add_event_handler('blockmanager_apply', 'stuffs_hide_identification');
  function stuffs_hide_identification($menu_ref_arr)
  {
    $menu = & $menu_ref_arr[0];
    $menu->hide_block('mbIdentification');
  }
}

$block['TEMPLATE'] = 'stuffs_logon.tpl';

?>