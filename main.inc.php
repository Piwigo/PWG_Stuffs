<?php
/*
Plugin Name: PWG Stuffs
Version: auto
Description: Insert modules on your gallery
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=190
Author: P@t
Author URI: http://www.gauchon.com
*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

global $prefixeTable, $conf;

$conf['Stuffs'] = @unserialize($conf['PWG_Stuffs']);

define('STUFFS_DIR' , basename(dirname(__FILE__)));
define('STUFFS_PATH' , PHPWG_PLUGINS_PATH . STUFFS_DIR . '/');
define('STUFFS_TABLE' , $prefixeTable . 'stuffs');

// Need upgrade?
if ($conf['Stuffs'] === false)
  include('admin/upgrade.inc.php');

function stuffs_admin_menu($menu)
{
  global $conf;

  array_push($menu, array(
    'NAME' => 'PWG Stuffs',
    'URL' => get_root_url().'admin.php?page=plugin-'.STUFFS_DIR
    )
  );
  return $menu;
}

function load_stuffs()
{
  global $template, $conf;

  include(STUFFS_PATH . 'class.inc.php');
  include(STUFFS_PATH . 'functions.inc.php');

  $template->set_template_dir(STUFFS_PATH.'theme/template/');
  $template->set_filename('stuffs', 'stuffs_blocks.tpl');
  $template->assign('SHOW_THUMBNAIL_CAPTION', $conf['show_thumbnail_caption']);

  $stuffs = new stuffs();

  if (!empty($stuffs->blocks['begin']))
  {
    $template->assign('blocks', $stuffs->blocks['begin']);
    $template->concat($stuffs->prefixe.'BEFORE',  $template->parse('stuffs', true));
  }
  if (!empty($stuffs->blocks['end']))
  {
    $template->assign('blocks', $stuffs->blocks['end']);
    $template->concat($stuffs->prefixe.'AFTER',  $template->parse('stuffs', true));
  }
}

function stuffs_section_init()
{
  global $tokens, $page;

  switch (script_basename())
  {
    case 'picture':
      $page['stuffs_section'] = 'on_picture';
      break;

    case 'index':
      if (count($tokens) == 1 and empty($tokens[0]))
      {
        $page['stuffs_section'] = 'on_home';
        break;
      }
      elseif (isset($page['section']) and $page['section'] == 'categories')
      {
        $page['stuffs_section'] = isset($page['category']) ? 'on_cats' : 'on_root';
        break;
      }

      default: return;
  }

  add_event_handler('loc_begin_index', 'load_stuffs');
  add_event_handler('loc_begin_picture', 'load_stuffs');
}

add_event_handler('get_admin_plugin_menu_links', 'stuffs_admin_menu');
add_event_handler('loc_end_section_init', 'stuffs_section_init', 60);

?>
