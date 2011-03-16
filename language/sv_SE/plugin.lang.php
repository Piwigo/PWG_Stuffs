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
//              Module LastComs
//------------------------------------------------------------------------------

$lang['module_name_lastcoms'] = 'Senaste kommentarer';
$lang['module_desc_lastcoms'] = 'Visa senast tillagda kommentarer';

$lang['lastcoms_no_nb_comments'] = 'Du måste specifiera antal kommentarer.';
$lang['lastcoms_config'] = 'Konfiguration';
$lang['lastcoms_nb_comments'] = 'Antal kommentarer att visa';
$lang['lastcoms_show_buttons'] = 'Visa admin knappar';
$lang['lastcoms_dim'] = 'Storlek på miniatyrbilder';
$lang['lastcoms_width'] = 'Max bredd';
$lang['lastcoms_height'] = 'Max höjd';
$lang['lastcoms_nb_cadres'] = 'Antal ramar i linje';
$lang['lastcoms_taille_cadres'] = 'Ram höjd';


//------------------------------------------------------------------------------
//              Module Logon
//------------------------------------------------------------------------------

$lang['module_name_logon'] = 'Logga in';
$lang['module_desc_logon'] = 'Visa "logga in" block';

$lang['logon_remove_menubar_block'] = 'Ta bort "Snabb anslutning" block från menyn';


//------------------------------------------------------------------------------
//              Module Personal
//------------------------------------------------------------------------------

$lang['module_name_personal'] = 'Personligt block';
$lang['module_desc_personal'] = 'Visa personligt block (som en edito)';

$lang['personal_content'] = 'innehåll';


//------------------------------------------------------------------------------
//              Module Tags
//------------------------------------------------------------------------------

$lang['module_name_tags'] = 'Taggar';
$lang['module_desc_tags'] = 'Visa taggar i galleriet';

$lang['stuffs_tags_default_display'] = 'Visning av taggar';
$lang['stuffs_tags_cloud'] = 'Taggmoln';
$lang['stuffs_tags_letters'] = 'Sortera efter bokstäver';
$lang['stuffs_tags_cumulus'] = 'Använd cumulus läge (plugin <a href=http://piwigo.org/ext/extension_view.php?eid=263 target="_blank">Cumulus Tags Cloud</a> måste vara installerat)';


//------------------------------------------------------------------------------
//              Module Most Visited
//------------------------------------------------------------------------------

$lang['module_name_mostvisited'] = 'Mest visad';
$lang['module_desc_mostvisited'] = 'Visa x mest visade bilder i galleriet eller i en kategori';

$lang['stuffs_mv_nb_images'] = 'Maximalt antal bilder att visa';
$lang['stuffs_mv_category_display'] = 'Visa på kategori sidorna';
$lang['stuffs_mv_all_cats'] = 'Alla kategorier';
$lang['stuffs_mv_w_thumb'] = 'Enbart kategorier med miniatyrbilder';
$lang['stuffs_mv_wo_thumb'] = 'Enbart kategorier utan miniatyrbilder';
$lang['stuffs_mv_selected_cats'] = 'Enbart markerade kategorier';

$lang['stuffs_mv_cat_selection'] = 'Kategoriernas markering';
$lang['stuffs_mv_hold_ctrl'] = 'håll in CTRL';

//------------------------------------------------------------------------------
//              Module Best Rated
//------------------------------------------------------------------------------

$lang['module_name_bestrated'] = 'Högst betygsatt';
$lang['module_desc_bestrated'] = 'Visa x högst betygsatta bilder i galleriet eller i en kategori';

//------------------------------------------------------------------------------
//              Module Recent
//------------------------------------------------------------------------------

$lang['module_name_recent'] = 'Senastee bilder';
$lang['module_desc_recent'] = 'Visa x senaste bilder i galleriet eller i en kategori (om det finns)';

//------------------------------------------------------------------------------
//              Module Random
//------------------------------------------------------------------------------

$lang['module_name_random'] = 'Slumpade bilder';
$lang['module_desc_random'] = 'Visa x slumpade bilder i galleriet eller i en kategori';

//------------------------------------------------------------------------------
//              Module Citation
//------------------------------------------------------------------------------

$lang['module_name_citation'] = 'Slumpa citat';
$lang['module_desc_citation'] = 'Visa ett slumpad citat';
$lang['module_Citation_lang'] = 'Språk';
$lang['module_Citation_code'] = 'Relaterad kod';

//------------------------------------------------------------------------------
//              Module Featured Photos
//------------------------------------------------------------------------------

$lang['module_name_featuredphotos'] = 'Bilder i rampljuset';
$lang['module_desc_featuredphotos'] = 'Visa webmasterns favorit bilder';

?>