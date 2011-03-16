<?php

/*TODO*/$lang['stuffs_mods_management'] = 'Blocks management';
/*TODO*/$lang['stuffs_add_mod'] = 'Add a block';
/*TODO*/$lang['stuffs_edit_mod'] = 'Edit block';

/*TODO*/$lang['stuffs_module_title'] = 'Block title';
/*TODO*/$lang['stuffs_desc'] = 'Description';
/*TODO*/$lang['stuffs_only_for_admin'] = '(only for administration pannel)';
/*TODO*/$lang['stuffs_type'] = 'Block type';
/*TODO*/$lang['stuffs_position'] = 'Position';
/*TODO*/$lang['stuffs_id_ligne'] = 'ID line';
/*TODO*/$lang['stuffs_width'] = 'Width';
/*TODO*/$lang['stuffs_action'] = 'Actions';
/*TODO*/$lang['stuffs_edit'] = 'Modify block';
/*TODO*/$lang['stuffs_delete'] = 'Delete block';
/*TODO*/$lang['stuffs_confirm_delete'] = 'Are you sure you want to delete block %s?';
/*TODO*/$lang['stuffs_main_block'] = 'Main block';
/*TODO*/$lang['Hide on home page'] = 'Hide on home page';

/*TODO*/$lang['stuffs_add_module'] = 'Add new block';
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

$lang['module_name_lastcoms'] = 'Zadnji komentari';
$lang['module_desc_lastcoms'] = 'Prikazuje zadnje postavljene komentare';

$lang['lastcoms_no_nb_comments'] = 'Morate navesti broj komentara.';
$lang['lastcoms_config'] = 'Podešavanja';
$lang['lastcoms_nb_comments'] = 'Broj komentara za prikaz';
$lang['lastcoms_show_buttons'] = 'Prikaži administrativne gumbe';
$lang['lastcoms_dim'] = 'Veličina umanjene sličice';
$lang['lastcoms_width'] = 'Maksimalna širina';
$lang['lastcoms_height'] = 'Maksimalna visina';
$lang['lastcoms_nb_cadres'] = 'Broj okvira po liniji';
$lang['lastcoms_taille_cadres'] = 'Visina okvira';


//------------------------------------------------------------------------------
//                            Module Logon
//------------------------------------------------------------------------------

$lang['module_name_logon'] = 'Prijava';
$lang['module_desc_logon'] = 'Prikazuje blok sa prijavom';

$lang['logon_remove_menubar_block'] = 'Ukloni "Quick connect" ("Brzu prijavu") iz izbornika';


//------------------------------------------------------------------------------
//                            Module Personal
//------------------------------------------------------------------------------

$lang['module_name_personal'] = 'Osobni blok';
$lang['module_desc_personal'] = 'Prikazuje osobno kreirani blok teksta na naslovnici (ili nekoj drugoj stranici)';

$lang['personal_content'] = 'sadržaj';


//------------------------------------------------------------------------------
//                            Module Tags
//------------------------------------------------------------------------------

$lang['module_name_tags'] = 'Tagovi';
$lang['module_desc_tags'] = 'Prikazuje tagove galerije';

$lang['stuffs_tags_default_display'] = 'Prikaz tagova';
$lang['stuffs_tags_cloud'] = 'Oblak tagova';
$lang['stuffs_tags_letters'] = 'Grupiraj prema slovima';
$lang['stuffs_tags_cumulus'] = 'Koristi cumulus mod (<a href=http://piwigo.org/ext/extension_view.php?eid=263 target="_blank">Cumulus Tags Cloud</a> plugin mora biti instaliran)';


//------------------------------------------------------------------------------
//                            Module Most Visited
//------------------------------------------------------------------------------

$lang['module_name_mostvisited'] = 'Najposjećenije';
$lang['module_desc_mostvisited'] = 'Prikazuje x najćešće posjećenih slika u galeriji ili kategoriji';

$lang['stuffs_mv_nb_images'] = 'Najveći broj slika za prikaz';
$lang['stuffs_mv_category_display'] = 'Prikaži na stranicama kategorija';
$lang['stuffs_mv_all_cats'] = 'Svih kategorija';
$lang['stuffs_mv_w_thumb'] = 'Samo kategorija sa umanjenim sličicama';
$lang['stuffs_mv_wo_thumb'] = 'Samo kategorija bez umanjenih sličica';
$lang['stuffs_mv_selected_cats'] = 'Samo odabranih kategorija';

$lang['stuffs_mv_cat_selection'] = 'Odabir kategorija';
$lang['stuffs_mv_hold_ctrl'] = 'držite CTRL';

//------------------------------------------------------------------------------
//                            Module Best Rated
//------------------------------------------------------------------------------

$lang['module_name_bestrated'] = 'Najbolje ocijenjene';
$lang['module_desc_bestrated'] = 'Prikazuje x najbolje ocjenjenih slika u galeriji ili kategoriji';

//------------------------------------------------------------------------------
//                            Module Recent
//------------------------------------------------------------------------------

$lang['module_name_recent'] = 'Nedavno objavljene slike';
$lang['module_desc_recent'] = 'Prikazuje x nedavno objavljenih slika u galeriji ili kategoriji (ako postoje)';

//------------------------------------------------------------------------------
//                            Module Random
//------------------------------------------------------------------------------

$lang['module_name_random'] = 'Slučajno odabrane slike';
$lang['module_desc_random'] = 'Prikazuje x slučajno odabranih slika u galeriji ili kategoriji';

//------------------------------------------------------------------------------
//                            Module Citation
//------------------------------------------------------------------------------

$lang['module_name_citation'] = 'Slučajno odabrani citat';
$lang['module_desc_citation'] = 'Prikazuje slučajno odabrani citat';
$lang['module_Citation_lang'] = 'Jezik';
$lang['module_Citation_code'] = 'Povezani kod';

//------------------------------------------------------------------------------
//                            Module Featured Photos
//------------------------------------------------------------------------------

$lang['module_name_featuredphotos'] = 'Istaknute fotografije';
$lang['module_desc_featuredphotos'] = 'Prikazuje omiljene slike webmastera';

?>