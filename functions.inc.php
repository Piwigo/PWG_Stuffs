<?php

add_event_handler('render_stuffs_name', 'get_user_language_desc');

if (!function_exists('get_user_language_desc'))
{
  function get_user_language_desc($desc)
  {
    global $user;
    
    $user_lang = substr($user['language'], 0, 2);

    if (!substr_count(strtolower($desc), '[lang=' . $user_lang . ']'))
    {
      $user_lang = 'default';
    }
    
    if (substr_count(strtolower($desc), '[lang=' . $user_lang . ']'))
    {
      // la balise avec la langue de l'utilisateur a �t� trouv�e
      $patterns[] = '#(^|\[/lang\])(.*?)(\[lang=(' . $user_lang . '|all)\]|$)#is';
      $replacements[] = '';
      $patterns[] = '#\[lang=(' . $user_lang . '|all)\](.*?)\[/lang\]#is';
      $replacements[] = '\\1';
    }
    else
    {
      // la balise avec la langue de l'utilisateur n'a pas �t� trouv�e
      // On prend tout ce qui est hors balise
      $patterns[] = '#\[lang=all\](.*?)\[/lang\]#is';
      $replacements[] = '\\1';
      $patterns[] = '#\[lang=.*\].*\[/lang\]#is';
      $replacements[] = '';
    }
    return preg_replace($patterns, $replacements, $desc);
  }
}

function get_default_stuffs_modules($modules)
{
  $dir = opendir(STUFFS_PATH . 'modules/');
  while ($file = readdir($dir))
  {
    if ($file != '.' and $file != '..' and $file != '.svn' and $file != 'piclenswall')
    {
      $path = STUFFS_PATH . 'modules/' . $file;
      if (is_dir($path) and !is_link($path))
      {
        $modules[] = array(
          'path' => $path,
          'name' => l10n('module_name_' . strtolower($file)),
          'description' => l10n('module_desc_' . strtolower($file)),
          );
      }
    }
  }
  closedir($dir);
  return $modules;
}

function pwgs_picture_special_sections()
{
  global $page, $conf;

  if (preg_match('#&(pwgs_..)=#', $_SERVER['REQUEST_URI'], $matches))
  {
    if (isset($_GET['action']))
    {
      if (isset($page['category']))
      {
        $page['section'] = 'category/'.$page['category']['id'];
        unset($page['category']);
      }
      $page['section'] .= $matches[0] . $_GET[$matches[1]];
    }
    else
    {
      unset($page['flat']);
      $page['PWG_Stuffs_section'] = $matches[1];
      $page['items'] = explode(',', $_GET[$matches[1]]);
      $page['rank_of'] = array_flip($page['items']);
      switch ($matches[1])
      {
        case 'pwgs_mv': $title = l10n('Most visited'); break;
        case 'pwgs_br': $title = l10n('Best rated'); break;
        case 'pwgs_re': $title = l10n('Recent pictures'); break;
        case 'pwgs_ra': $title = l10n('Random pictures'); break;
      }
      $page['title'] .= $conf['level_separator'] . $title;
      add_event_handler('loc_end_page_header', 'add_pwgs_url_params');
    }
  }
}

function add_pwgs_url_params()
{
  global $page, $template;

  $param = $page['stuffs_section'];

  $urls = array(
    'first.U_IMG',
    'previous.U_IMG',
    'next.U_IMG',
    'last.U_IMG',
    'slideshow.U_START_PLAY',
    'slideshow.U_STOP_PLAY',
    'slideshow.U_START_REPEAT',
    'slideshow.U_STOP_REPEAT',
    'slideshow.U_DEC_PERIOD',
    'slideshow.U_INC_PERIOD',
    'U_SLIDESHOW_START',
    'U_SLIDESHOW_STOP',
    'U_METADATA',
    'favorite.U_FAVORITE',
    'U_SET_AS_REPRESENTATIVE',
    'U_CADDIE',
    'rating.F_ACTION',
    'comment_add.F_ACTION',
    'page_refresh.U_REFRESH',
  );

  foreach ($urls as $url)
  {
    $k = explode('.', $url);
    if (isset($k[1]) and isset($template->smarty->_tpl_vars[$k[0]][$k[1]]))
    {
      $template->smarty->_tpl_vars[$k[0]][$k[1]] = add_url_params($template->smarty->_tpl_vars[$k[0]][$k[1]], array($param => $_GET[$param]));
    }
    elseif (!isset($k[1]) and isset($template->smarty->_tpl_vars[$k[0]]))
    {
      $template->smarty->_tpl_vars[$k[0]] = add_url_params($template->smarty->_tpl_vars[$k[0]], array($param => $_GET[$param]));
    }
  }
}

function hide_main_block()
{
  global $page, $template;

  if ($page['stuffs_section'] == 'on_home')
  {
    $template->set_prefilter('index', 'hide_main_block_prefilter');
  }
}

function hide_main_block_prefilter($content)
{
  return preg_replace('#(?:<div id="content"|<div id="subcontent").*</div>[ \{\*]*<!-- (?:sub|)content -->[ \*\}]*#si', '', $content);
}

?>