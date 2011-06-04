<?php

$lang['stuffs_mods_management'] = 'Zarządzanie blokami';
$lang['stuffs_add_mod'] = 'Dodaj blok';
$lang['stuffs_edit_mod'] = 'Edytuj blok';

$lang['stuffs_module_title'] = 'Tytuł bloku';
$lang['stuffs_desc'] = 'Opis';
$lang['stuffs_only_for_admin'] = '(tylko dla panelu administracyjnego)';
$lang['stuffs_type'] = 'Typ bloku';
$lang['stuffs_position'] = 'Położenie';
$lang['stuffs_id_ligne'] = 'ID linii';
$lang['stuffs_width'] = 'Szerokość';
$lang['stuffs_action'] = 'Akcje';
$lang['stuffs_edit'] = 'Modyfikuj blok';
$lang['stuffs_delete'] = 'Usuń blok';
$lang['stuffs_confirm_delete'] = 'Na pewno chcesz usunąć blok %i?';
$lang['stuffs_main_block'] = 'Blok główny';
$lang['Hide on home page'] = 'Ukryj na stronie głównej';
$lang['stuffs_add_module'] = 'Dodaj nowy blok';
/*TODO*/$lang['stuffs_module_config'] = 'Block configuration';
/*TODO*/$lang['stuffs_visual_config'] = 'Display configuration';
/*TODO*/$lang['stuffs_module_options'] = 'Block options';
/*TODO*/$lang['stuffs_authorized_group'] = 'Authorized groups';
/*TODO*/$lang['stuffs_authorized_users'] = 'Authorized users';
/*TODO*/$lang['stuffs_public_module'] = '(Keep empty for public block)';
/*TODO*/$lang['stuffs_show_title'] = 'Show block title';
/*TODO*/$lang['stuffs_show_module_on'] = 'Show block :';
/*TODO*/$lang['stuffs_show_on_home'] = 'On main page';
/*TODO*/$lang['stuffs_show_on_root'] = 'On categories root page';
/*TODO*/$lang['stuffs_show_on_cats'] = 'On all categories pages';
/*TODO*/$lang['stuffs_show_on_picture'] = 'On picture pages';
/*TODO*/$lang['stuffs_no_options'] = 'No options for this block';

/*TODO*/$lang['stuffs_perm'] = 'Activate authorization management:';
/*TODO*/$lang['stuffs_group_perm'] = 'by groups';
/*TODO*/$lang['stuffs_user_perm'] = 'by user type';
/*TODO*/$lang['stuffs_level_perm'] = 'by privacy level';

/*TODO*/$lang['stuffs_select_all'] = 'Select all';
/*TODO*/$lang['stuffs_unselect_all'] = 'Unselect all';

// Infos messages
/*TODO*/$lang['stuffs_order_saved'] = 'Order successfully saved.';
/*TODO*/$lang['stuffs_upgrade_message'] = 'PWG Stuffs plugin as been renamed. It is now called "Blocks".';

// Errors messages
/*TODO*/$lang['stuffs_error_no_mod_selected'] = 'You didn\'t select any block.';
/*TODO*/$lang['stuffs_no_name'] = 'You must specify block\'s name';
/*TODO*/$lang['stuffs_parent_plugin_is_missing'] = 'PARENT PLUGIN IS NOT ACTIVATED. You should remove this block or re-activate parent plugin.';
/*TODO*/$lang['stuffs_piclens_need_upgrade'] = 'PICLENS PLUGIN MUST BE UPDATED. PWG Stuffs is not compatible with this version of Piclens.';

//------------------------------------------------------------------------------
//                            Module LastComs
//------------------------------------------------------------------------------

$lang['module_name_lastcoms'] = 'Najnowsze komentarze';
$lang['module_desc_lastcoms'] = 'Wyświetl najnowsze komentarze';

$lang['lastcoms_no_nb_comments'] = 'Musisz wprowadzić liczbę komentarzy.';
$lang['lastcoms_config'] = 'Konfiguracja';
$lang['lastcoms_nb_comments'] = 'Ilość komentarzy do wyświetlenia';
$lang['lastcoms_show_buttons'] = 'Pokaż opcje administracyjne';
$lang['lastcoms_dim'] = 'Wielkość miniaturek';
$lang['lastcoms_width'] = 'Max szerokość';
$lang['lastcoms_height'] = 'Maksymalna wysokość';
$lang['lastcoms_nb_cadres'] = 'Ilość ramek przez linię'; //* to fix *//
$lang['lastcoms_taille_cadres'] = 'Wysokość ramki';


//------------------------------------------------------------------------------
//                            Module Logon
//------------------------------------------------------------------------------

$lang['module_name_logon'] = 'Login';
$lang['module_desc_logon'] = 'Wyświetl blok logowania';

$lang['logon_remove_menubar_block'] = 'Usuń blok "Szybkie połączenie" z menu';


//------------------------------------------------------------------------------
//                            Module Personal
//------------------------------------------------------------------------------

$lang['module_name_personal'] = 'Osobisty blok';
$lang['module_desc_personal'] = 'Wyświetl osobisty blok (like an edito)'; //* to fix *//

$lang['personal_content'] = 'zawartość';


//------------------------------------------------------------------------------
//                            Module Tags
//------------------------------------------------------------------------------

$lang['module_name_tags'] = 'Tagi';
$lang['module_desc_tags'] = 'Wyświetl tagi galerii';

$lang['stuffs_tags_default_display'] = 'Wyświetlanie tagów'; //* to fix *//
$lang['stuffs_tags_cloud'] = 'Chmura tagów';
$lang['stuffs_tags_letters'] = 'Grupuj literami';
$lang['stuffs_tags_cumulus'] = 'Użyj trybu cumulus (dodatek <a href=http://piwigo.org/ext/extension_view.php?eid=263 target="_blank">Cumulus Tags Cloud</a> musi być zainstalowany)';


//------------------------------------------------------------------------------
//                            Module Most Visited
//------------------------------------------------------------------------------

$lang['module_name_mostvisited'] = 'Najczęsciej odwiedzane';
$lang['module_desc_mostvisited'] = 'Wyświetl x najczęściej odwiedzanych obrazów w galerii lub kategorii';

$lang['stuffs_mv_nb_images'] = 'Maksymalna ilość obrazów do wyświetlenia';
$lang['stuffs_mv_category_display'] = 'Wyświetl na stronach kategorii';
$lang['stuffs_mv_all_cats'] = 'Wszystkie kategorie';
$lang['stuffs_mv_w_thumb'] = 'Tylko kategorie z miniaturkami';
$lang['stuffs_mv_wo_thumb'] = 'Tylko kategorie bez miniaturkami';
$lang['stuffs_mv_selected_cats'] = 'Tylko wybrane kategorie';

$lang['stuffs_mv_cat_selection'] = 'Wybór kategorii';
$lang['stuffs_mv_hold_ctrl'] = 'przytrzymaj CTRL';

//------------------------------------------------------------------------------
//                            Module Best Rated
//------------------------------------------------------------------------------

$lang['module_name_bestrated'] = 'Najwyżej oceniane';
$lang['module_desc_bestrated'] = 'Wyświetl x najwyżej ocenianych obrazów w galerii lub kategorii';

//------------------------------------------------------------------------------
//                            Module Recent
//------------------------------------------------------------------------------

$lang['module_name_recent'] = 'Najnowsze obrazy';
$lang['module_desc_recent'] = 'Wyświetl x najnowszych obrazów w galerii lub w kategorii (jeśli istnieje)';

//------------------------------------------------------------------------------
//                            Module Random
//------------------------------------------------------------------------------

$lang['module_name_random'] = 'Losowy obrazek';
$lang['module_desc_random'] = 'Wyświetl x losowych obrazów w galerii lub kategorii';

//------------------------------------------------------------------------------
//                            Module Citation
//------------------------------------------------------------------------------

$lang['module_name_citation'] = 'Losowy cytat';
$lang['module_desc_citation'] = 'Wyświetl losowy cytat';
$lang['module_Citation_lang'] = 'Język';
$lang['module_Citation_code'] = 'Powiązany kod'; //* to fix *//

//------------------------------------------------------------------------------
//                            Module Featured Photos
//------------------------------------------------------------------------------

$lang['module_name_featuredphotos'] = 'Doskonałe obrazy'; //* to fix *//
$lang['module_desc_featuredphotos'] = 'Wyświetl ulubione obrazki administratora strony';

?>