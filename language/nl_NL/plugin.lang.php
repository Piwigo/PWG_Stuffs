<?php

$lang['stuffs_mods_management'] = 'Blok beheer';
$lang['stuffs_add_mod'] = 'Voeg blok toe';
$lang['stuffs_edit_mod'] = 'Blok bewerken';

$lang['stuffs_module_title'] = 'Blok titel';
$lang['stuffs_desc'] = 'Omschrijving';
$lang['stuffs_only_for_admin'] = '(alleen voor administratie paneel)';
$lang['stuffs_type'] = 'Blok type';
$lang['stuffs_position'] = 'Positie';
$lang['stuffs_id_ligne'] = 'ID regel';
$lang['stuffs_width'] = 'Breedte';
$lang['stuffs_action'] = 'Acties';
$lang['stuffs_edit'] = 'Bewerk blok';
$lang['stuffs_delete'] = 'Verwijder blok';
$lang['stuffs_confirm_delete'] = 'Weet je zeker dat je blok wil %s verwijderen?';
$lang['stuffs_main_block'] = 'Hoofd blok';
$lang['Hide on home page'] = 'Verberg op start pagina';

$lang['stuffs_add_module'] = 'Voeg nieuw blok toe';
$lang['stuffs_module_config'] = 'Blok configuratie';
$lang['stuffs_visual_config'] = 'Weergave configuratie';
$lang['stuffs_module_options'] = 'Blok opties';
$lang['stuffs_authorized_group'] = 'Geautoriseerde groepen';
$lang['stuffs_authorized_users'] = 'Geautoriseerde gebruikers';
$lang['stuffs_public_module'] = '(Laat leeg voor publiek blok)';
$lang['stuffs_show_title'] = 'Toon blok titel';
$lang['stuffs_show_module_on'] = 'Toon blok :';
$lang['stuffs_show_on_home'] = 'Op hoofd pagina';
$lang['stuffs_show_on_root'] = 'Op hoofd categorie pagina';
$lang['stuffs_show_on_cats'] = 'Op alle categorie pagina\'s';
$lang['stuffs_show_on_picture'] = 'Op afbeeldingspagina\'s';
$lang['stuffs_no_options'] = 'Geen opties voor dit blok';

$lang['stuffs_perm'] = 'Activeer autorisatie beheer:';
$lang['stuffs_group_perm'] = 'per groep';
$lang['stuffs_user_perm'] = 'per gebruikers type';
$lang['stuffs_level_perm'] = 'naar privacy niveau';

$lang['stuffs_select_all'] = 'Selecteer alles';
$lang['stuffs_unselect_all'] = 'Deselecteer alles';

//todo
// Infos messages
$lang['stuffs_order_saved'] = 'Order successfully saved.';
$lang['stuffs_upgrade_message'] = 'PWG Stuffs plugin as been renamed. It is now called "Blocks".';

// Errors messages
$lang['stuffs_error_no_mod_selected'] = 'You didn\'t select any block.';
$lang['stuffs_no_name'] = 'You must specify block\'s name';
$lang['stuffs_parent_plugin_is_missing'] = 'PARENT PLUGIN IS NOT ACTIVATED. You should remove this block or re-activate parent plugin.';
$lang['stuffs_piclens_need_upgrade'] = 'PICLENS PLUGIN MUST BE UPDATED. PWG Stuffs is not compatible with this version of Piclens.';

//------------------------------------------------------------------------------
//              Module LastComs
//------------------------------------------------------------------------------

$lang['module_name_lastcoms'] = 'Last comments';
$lang['module_desc_lastcoms'] = 'Display last posted comments';

$lang['lastcoms_no_nb_comments'] = 'You must specify numbers of comments.';
$lang['lastcoms_config'] = 'Configuration';
$lang['lastcoms_nb_comments'] = 'Number of comments to display';
$lang['lastcoms_show_buttons'] = 'Show admin buttons';
$lang['lastcoms_dim'] = 'Thumbnails size';
$lang['lastcoms_width'] = 'Max width';
$lang['lastcoms_height'] = 'Max height';
$lang['lastcoms_nb_cadres'] = 'Numbers of frame by line';
$lang['lastcoms_taille_cadres'] = 'Frame height';

//------------------------------------------------------------------------------
//              Module Logon
//------------------------------------------------------------------------------

$lang['module_name_logon'] = 'Login';
$lang['module_desc_logon'] = 'Display login block';

$lang['logon_remove_menubar_block'] = 'Remove "Quick connect" block from menubar';

//------------------------------------------------------------------------------
//              Module Personal
//------------------------------------------------------------------------------

$lang['module_name_personal'] = 'Personnal block';
$lang['module_desc_personal'] = 'Display personnal block (like an edito)';

$lang['personal_content'] = 'content';

//------------------------------------------------------------------------------
//              Module Tags
//------------------------------------------------------------------------------

$lang['module_name_tags'] = 'Tags';
$lang['module_desc_tags'] = 'Display gallery tags';

$lang['stuffs_tags_default_display'] = 'Tags display';
$lang['stuffs_tags_cloud'] = 'Tags cloud';
$lang['stuffs_tags_letters'] = 'Group by lettters';
$lang['stuffs_tags_cumulus'] = 'Use cumulus mode (plugin <a href=http://piwigo.org/ext/extension_view.php?eid=263 target="_blank">Cumulus Tags Cloud</a> must be installed)';

//------------------------------------------------------------------------------
//              Module Most Visited
//------------------------------------------------------------------------------

$lang['module_name_mostvisited'] = 'Most visited';
$lang['module_desc_mostvisited'] = 'Display x most visited pictures in the gallery or a category';

$lang['stuffs_mv_nb_images'] = 'Maximum number of pictures to display';
$lang['stuffs_mv_category_display'] = 'Display on categories pages';
$lang['stuffs_mv_all_cats'] = 'All categories';
$lang['stuffs_mv_w_thumb'] = 'Only categories with thumbnails';
$lang['stuffs_mv_wo_thumb'] = 'Only categories without thumbnails';
$lang['stuffs_mv_selected_cats'] = 'Only selected categories';

$lang['stuffs_mv_cat_selection'] = 'Categories selection';
$lang['stuffs_mv_hold_ctrl'] = 'hold CTRL';

//------------------------------------------------------------------------------
//              Module Best Rated
//------------------------------------------------------------------------------

$lang['module_name_bestrated'] = 'Best rated';
$lang['module_desc_bestrated'] = 'Display x best rated pictures in the gallery or a category';

//------------------------------------------------------------------------------
//              Module Recent
//------------------------------------------------------------------------------

$lang['module_name_recent'] = 'Recent pictures';
$lang['module_desc_recent'] = 'Display x recent pictures in the gallery or a category (if exist)';

//------------------------------------------------------------------------------
//              Module Random
//------------------------------------------------------------------------------

$lang['module_name_random'] = 'Random pictures';
$lang['module_desc_random'] = 'Display x random pictures in the gallery or a category';

//------------------------------------------------------------------------------
//              Module Citation
//------------------------------------------------------------------------------

$lang['module_name_citation'] = 'Random quote';
$lang['module_desc_citation'] = 'Display a random quote';
$lang['module_Citation_lang'] = 'Language';
$lang['module_Citation_code'] = 'Related code';

//------------------------------------------------------------------------------
//              Module Featured Photos
//------------------------------------------------------------------------------

$lang['module_name_featuredphotos'] = 'Featured Photos';
$lang['module_desc_featuredphotos'] = 'Display favorites photos of the webmaster';
?>