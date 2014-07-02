<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

class stuffs
{
  var $user_groups = array();
  var $modules = array();
  var $blocks = array();
  var $pos = 'begin';
  var $prefixe = 'PLUGIN_INDEX_CONTENT_';

  function stuffs()
  {
    global $page, $template;

    if ($page['stuffs_section'] == 'on_picture')
    {
      $this->prefixe = 'PLUGIN_PICTURE_';
      $template->func_combine_css(array(
        'path' => 'plugins/PWG_Stuffs/theme/stuffs_picture.css',
        )
      );
      pwgs_picture_special_sections();
    }
    else
    {
      $template->func_combine_css(array(
        'path' => 'plugins/PWG_Stuffs/theme/stuffs_index.css',
        )
      );
    }

    $this->get_user_groups();
    $this->get_modules();
    $this->process_modules();
  }

  /* Retrieve user groups  */
  function get_user_groups()
  {
    global $user;

    $query = 'SELECT group_id FROM ' . USER_GROUP_TABLE . ' WHERE user_id = ' . $user['id'] . ';';
    $result = pwg_query($query);
    while ($row = pwg_db_fetch_assoc($result))
    {
      array_push($this->user_groups, $row['group_id']);
    }
  }

  /* Retrieve modules from table */
  function get_modules()
  {
    global $page, $user;

    if (!isset($page['stuffs_section'])) return;

    $query = '
SELECT DISTINCT id, name, path, datas, groups, show_title, id_line, width
FROM ' . STUFFS_TABLE . '
LEFT JOIN ' . USER_GROUP_TABLE . '
  ON user_id = '.$user['id'].'
WHERE (users IS NULL OR users LIKE "%' . $user['status'] . '%")
  AND (groups IS NULL OR groups REGEXP CONCAT("(^|,)",group_id,"(,|$)"))
  AND level <= '.$user['level'].'
  AND '.$page['stuffs_section'].' = "true"
ORDER BY pos ASC
;';

    $result = pwg_query($query);

    while ($row = pwg_db_fetch_assoc($result))
    {
      array_push($this->modules, $row);
    }
  }

  /* Process modules */
  function process_modules()
  {
    global $pwg_loaded_plugins, $conf;

    foreach ($this->modules as $module)
    {
      if ($module['name'] == 'MainBlock')
      {
        $this->pos = 'end';
        $show = unserialize($module['datas']);
        if (!$show and empty($conf['AP']['homepage']))
        {
          add_event_handler('loc_end_index', 'hide_main_block');
        }
        continue;
      }

      preg_match('#^'.preg_quote(PHPWG_PLUGINS_PATH).'([^/]*?)/#', $module['path'], $match);
      if (!isset($pwg_loaded_plugins[$match[1]]))
      {
        continue;
      }

      $datas = (!empty($module['datas']) ? unserialize($module['datas']) : false);
      $block = array();

      include($module['path'].'main.inc.php');

      if (!empty($block['TEMPLATE']))
      {
        $block['ID'] = $module['id'];
        if ($module['show_title'] == 'true')
        {
          $block['TITLE'] = trigger_change('render_stuffs_name', $module['name']);
        }
        if (is_admin())
        {
          $block['U_EDIT'] = get_root_url().'admin.php?page=plugin-'.STUFFS_DIR.'-edit_module&amp;edit='.$module['id'].'&amp;redirect='.urlencode(urlencode($_SERVER['REQUEST_URI']));
        }
        $this->set_tpl_block($block, $module);
      }
    }
  }
  /* Set template blocks  */
  function set_tpl_block($block, $module)
  {
    if (!empty($module['id_line']))
    {
      $block['id_line'] = $module['id_line'];
      $block['given_width'] = !empty($module['width']) ? $module['width'] : '';

      if (!empty($this->blocks[$this->pos]))
      {
        $last = end($this->blocks[$this->pos]);
        $key = key($this->blocks[$this->pos]);
        $penul = prev($this->blocks[$this->pos]);

        if (isset($last['id_line']) and $last['id_line'] == $module['id_line'])
        {
          if (isset($penul['id_line']) and $penul['id_line'] == $module['id_line'])
          {
            $i = 3;
            !$block['given_width'] or $i--;
            !$last['given_width'] or $i--;
            !$penul['given_width'] or $i--;

            !$i or $default_width = intval((100 - $block['given_width'] - $last['given_width'] - $penul['given_width']) / $i);

            $penul['WIDTH'] = $penul['given_width'] ? $penul['given_width'] : $default_width;
            $block['WIDTH'] = $block['given_width'] ? $block['given_width'] : $default_width;

            $block['CLASS'] = 'right_block';
            $block['new_line'] = false;
            $block['end_line'] = false;
            $last['end_line'] = true;
            $this->blocks[$this->pos][$key-1] = $penul;
            $this->blocks[$this->pos][$key] = $block;
            $this->blocks[$this->pos][] = $last;
            return;
          }
          else
          {
            if (empty($block['given_width']) and empty($last['given_width']))
            {
              $last['WIDTH'] = 50;
            }
            elseif ($block['given_width']>0)
            {
              $last['WIDTH'] = 100 - $block['given_width'];
            }
            else
            {
              $last['WIDTH'] = $last['given_width'];
            }
            $block['CLASS'] = 'middle_block';
            $last['CLASS'] = 'left_block';
            $block['new_line'] = false;
            $block['end_line'] = true;
            $last['end_line'] = false;
            $this->blocks[$this->pos][$key] = $last;
            $this->blocks[$this->pos][] = $block;
            return;
          }
        }
      }
    }

    $block['new_line'] = true;
    $block['end_line'] = true;
    $block['CLASS'] = 'middle_block';
    $this->blocks[$this->pos][] = $block;
  }
}

?>
