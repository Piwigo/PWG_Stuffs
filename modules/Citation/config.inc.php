<?php
if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

if (!isset($datas)) {
  $default_fr_value  = '<script type="text/javascript" ';
  $default_fr_value .= 'src="http://citations.hasarddujour.com/'; 
  $default_fr_value .= 'citation-hasard-du-jour.php?random"></script>';
  $datas = array(
      'quote_lang'    => array(
          "fr_FR" => $default_fr_value
        ),
    );
}
$available_languages = get_languages();
// Save configuration
if (isset($_POST['submit']) and !is_adviser()) {
  $new_data = array();
  foreach (array_keys($available_languages) as $current_lang) {
    $quote_value_key = 'quote_config_' . $current_lang;
    if ((isset($_POST[$quote_value_key])) and
        ("" != $_POST[$quote_value_key])) {
      $new_data = array_merge(
          $new_data,
          array($current_lang => stripslashes($_POST[$quote_value_key]))
        );
    }
  }
  $datas = array(
      'quote_lang'  => $new_data
    );
}
global $user;
$template->assign('MODULE_QUOTE_DATA', $datas['quote_lang']);
$template->assign('MODULE_QUOTE_LANGUAGES', $available_languages);
$template->set_filenames(array(
    'module_options' => dirname(__FILE__) . '/config.tpl')
  );
$template->assign_var_from_handle('MODULE_OPTIONS', 'module_options');
?>