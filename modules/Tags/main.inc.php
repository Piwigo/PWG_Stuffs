<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

global $conf, $template;

function counter_compare($a, $b)
{
  if ($a['counter'] == $b['counter'])
  {
    return id_compare($a, $b);
  }

  return ($a['counter'] < $b['counter']) ? +1 : -1;
}

function id_compare($a, $b)
{
  return ($a['id'] < $b['id']) ? -1 : 1;
}

$pwgCumulus_installed = get_db_plugins('active','pwgCumulus');

$block['TITLE_URL'] = 'tags.php';

$tags = get_available_tags();

if ((!$pwgCumulus_installed and $datas[0] == 'cumulus') or empty($datas[0]))
{
  $datas[0] = 'cloud';
}

if ($datas[0] == 'letters')
{
  // we want tags diplayed in alphabetic order
  usort($tags, 'tag_alpha_compare');

  $current_letter = null;
  $nb_tags = count($tags);
  $current_column = 1;
  $current_tag_idx = 0;

  $letter = array(
    'tags' => array()
    );

  foreach ($tags as $tag)
  {
    $tag_letter = strtoupper(substr($tag['url_name'], 0, 1));

    if ($current_tag_idx==0) {
      $current_letter = $tag_letter;
      $letter['TITLE'] = $tag_letter;
    }

    //lettre precedente differente de la lettre suivante
    if ($tag_letter !== $current_letter)
    {
      if ($current_column<$conf['tag_letters_column_number']
          and $current_tag_idx > $current_column*$nb_tags/$conf['tag_letters_column_number'] )
      {
        $letter['CHANGE_COLUMN'] = true;
        $current_column++;
      }

      $letter['TITLE'] = $current_letter;

      $template->append(
        'letters',
        $letter
        );

      $current_letter = $tag_letter;
      $letter = array(
        'tags' => array()
        );
    }

    array_push(
      $letter['tags'],
      array_merge(
        $tag,
        array(
          'URL' => make_index_url(
            array(
              'tags' => array($tag),
              )
            ),
          )
        )
      );

    $current_tag_idx++;
  }

  // flush last letter
  if (count($letter['tags']) > 0)
  {
    unset($letter['CHANGE_COLUMN']);
    $letter['TITLE'] = $current_letter;
    $template->append(
      'letters',
      $letter
      );
  }
}
else
{
  usort($tags, 'counter_compare');
  $tags = array_slice($tags, 0, $conf['full_tag_cloud_items_number']);

  // depending on its counter and the other tags counter, each tag has a level
  $tags = add_level_to_tags($tags);

  // we want tags diplayed in alphabetic order
  usort($tags, 'tag_alpha_compare');

  // display sorted tags
  foreach ($tags as $tag)
  {
    $template->append(
      'tags',
      array_merge(
        $tag,
        array(
          'URL' => make_index_url(
            array(
              'tags' => array($tag),
              )
            ),
          )
        )
      );
  }
  if ($datas[0] == 'cumulus' and defined('PWG_CUMULUS_PLUGIN_ROOT'))
  {
    include_once PWG_CUMULUS_PLUGIN_ROOT . "/include/pwgCumulusContent.class.php";
    $cumulus = new pwgCumulusContent(get_plugin_data('pwgCumulus'));
    $cumulus->loc_begin_page_header();
  }
}

$template->assign('display_mode', $datas[0]);

$block['TEMPLATE'] = 'stuffs_tags.tpl';

?>
