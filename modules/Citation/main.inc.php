<?php
if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

global $user;

if ((isset($datas['quote_lang'][$user['language']])) and
  ("" != $datas['quote_lang'][$user['language']]))
{
  $block['CONTENT'] = $datas['quote_lang'][$user['language']];
  $block['TEMPLATE'] = 'stuffs_personal.tpl';
}
?>