<?php

$lang['stuffs_mods_management'] = 'Správa Bloků';
$lang['stuffs_add_mod'] = 'Přidat blok';
$lang['stuffs_edit_mod'] = 'Edituj blok';

$lang['stuffs_module_title'] = 'Nadpis Bloku';
$lang['stuffs_desc'] = 'Popis';
$lang['stuffs_only_for_admin'] = '(jen pro administrační panel)';
$lang['stuffs_type'] = 'Typ Bloku';
$lang['stuffs_position'] = 'Pozice';
$lang['stuffs_id_ligne'] = 'ID řádku';
$lang['stuffs_width'] = 'Šířka';
$lang['stuffs_action'] = 'Akce';
$lang['stuffs_edit'] = 'Uprav blok';
$lang['stuffs_delete'] = 'Odstraň blok';
$lang['stuffs_confirm_delete'] = 'Opravdu chcete smazat blok %s?';
$lang['stuffs_main_block'] = 'Hlavní blok';
$lang['Hide on home page'] = 'Skrytý pro hlavní stránku';

$lang['stuffs_add_module'] = 'Přidat nový blok';
$lang['stuffs_module_config'] = 'Konfigurace Bloku';
$lang['stuffs_visual_config'] = 'Konfigurace zobrazeni';
$lang['stuffs_module_options'] = 'Možnosti bloku';
$lang['stuffs_authorized_group'] = 'Povolené skupiny';
$lang['stuffs_authorized_users'] = 'Povolení uživatelé';
$lang['stuffs_public_module'] = '(Nechat prázdné pro veřejný blok)';
$lang['stuffs_show_title'] = 'Ukaž nadpis bloku';
$lang['stuffs_show_module_on'] = 'Zobraz blok :';
$lang['stuffs_show_on_home'] = 'Na hlavní stráce';
$lang['stuffs_show_on_root'] = 'Na stránce kategoríí';
$lang['stuffs_show_on_cats'] = 'Na všech stránkách kategorií';
$lang['stuffs_show_on_picture'] = 'Na stránkách obrázků';
$lang['stuffs_no_options'] = 'Tento blok nemá žádné volby nastavení';

$lang['stuffs_perm'] = 'Aktivuj správu autorizací:';
$lang['stuffs_group_perm'] = 'podle skupin';
$lang['stuffs_user_perm'] = 'podle typu uživatele';
$lang['stuffs_level_perm'] = 'podle úrovně oprávnění';

$lang['stuffs_select_all'] = 'Vybrat vše';
$lang['stuffs_unselect_all'] = 'Zruš celý výběr';

// Infos messages
$lang['stuffs_order_saved'] = 'Výběr uložen.';
$lang['stuffs_upgrade_message'] = 'PWG Stuffs plugin byl přejměnován na "Blocks/Bloky".';

// Errors messages
$lang['stuffs_error_no_mod_selected'] = 'Není vybrán žádný blok.';
$lang['stuffs_no_name'] = 'Je potřeba nejprve zadat názvy bloku\ů ';
$lang['stuffs_parent_plugin_is_missing'] = 'Hlavní PLUGIN není aktivován. odeberte tento blok nebo zapněte hlavní plugin Blok.';
$lang['stuffs_piclens_need_upgrade'] = 'PICLENS PLUGIN musí být aktualizován. PWG Stuffs/Blok není kompatibilní s touto verzí pluginu Piclens.';

//------------------------------------------------------------------------------
//                            Module LastComs
//------------------------------------------------------------------------------

$lang['module_name_lastcoms'] = 'Poslední komentáře';
$lang['module_desc_lastcoms'] = 'Zobrazí naposledy vložené komentáře';

$lang['lastcoms_no_nb_comments'] = 'Zadejte počet zobrazených komentářù.';
$lang['lastcoms_config'] = 'Konfigurace';
$lang['lastcoms_nb_comments'] = 'Počet komentářù k zobrazení';
$lang['lastcoms_show_buttons'] = 'Zobraz admin tlačítko';
$lang['lastcoms_dim'] = 'Velikost náhledu';
$lang['lastcoms_width'] = 'Šířka max';
$lang['lastcoms_height'] = 'Výška max';
$lang['lastcoms_nb_cadres'] = 'Počet rámù na řádek';
$lang['lastcoms_taille_cadres'] = 'Výška rámu';

//------------------------------------------------------------------------------
//                            Module Logon
//------------------------------------------------------------------------------

$lang['module_name_logon'] = 'Přihlášení';
$lang['module_desc_logon'] = 'Zobraz přihlašovací blok';

$lang['logon_remove_menubar_block'] = 'Odstranit "Quick connect" blok z menu';

//------------------------------------------------------------------------------
//                            Module Personal
//------------------------------------------------------------------------------

$lang['module_name_personal'] = 'Osobní blok';
$lang['module_desc_personal'] = 'Zobrazí personnal block (něco jako editor)';

$lang['personal_content'] = 'obsah';

//------------------------------------------------------------------------------
//                            Module Tags
//------------------------------------------------------------------------------

$lang['module_name_tags'] = 'Štítky';
$lang['module_desc_tags'] = 'Zobraz štítky galerie';

$lang['stuffs_tags_default_display'] = 'Zobrazení štítkù';
$lang['stuffs_tags_cloud'] = 'Mračno štítkù';
$lang['stuffs_tags_letters'] = 'Podle písmen';
$lang['stuffs_tags_cumulus'] = 'Použít mód cumulus (plugin <a href=http://piwigo.org/ext/extension_view.php?eid=263 target="_blank">Cumulus Tags Cloud</a> musí být nainstalován)';

//------------------------------------------------------------------------------
//                            Module Most Visited
//------------------------------------------------------------------------------

$lang['module_name_mostvisited'] = 'Často navštěvované';
$lang['module_desc_mostvisited'] = 'Zobrazí X nejvíce zobrazených fotek v galerii nebo kategorii';

$lang['stuffs_mv_nb_images'] = 'Maximální počet fotek k zobrazení';
$lang['stuffs_mv_category_display'] = 'Zobrazit v kategoriích';
$lang['stuffs_mv_all_cats'] = 'Všechny kategorie';
$lang['stuffs_mv_w_thumb'] = 'Jen v kategoriích s náhledy';
$lang['stuffs_mv_wo_thumb'] = 'Jen v kategoriích bez náhledù';
$lang['stuffs_mv_selected_cats'] = 'Jen vybraným kategoriím';

$lang['stuffs_mv_cat_selection'] = 'Výběr kategorie';
$lang['stuffs_mv_hold_ctrl'] = 'podržet CTRL';

//------------------------------------------------------------------------------
//                            Module Best Rated
//------------------------------------------------------------------------------

$lang['module_name_bestrated'] = 'Nejlépe hodnocené';
$lang['module_desc_bestrated'] = 'Zobrazí x nejlépe hodnocených fotek v galerii nebo kategorii';

//------------------------------------------------------------------------------
//                            Module Recent
//------------------------------------------------------------------------------

$lang['module_name_recent'] = 'Nové fotografie';
$lang['module_desc_recent'] = 'Zobrazí x nových fotek v galerii nebo kategorii(pokud existují)';

//------------------------------------------------------------------------------
//                            Module Random
//------------------------------------------------------------------------------

$lang['module_name_random'] = 'Náhodné fotografie';
$lang['module_desc_random'] = 'Zobrazí x náhodných fotek v galerii nebo kategorii';

//------------------------------------------------------------------------------
//                            Module Citation
//------------------------------------------------------------------------------

$lang['module_name_citation'] = 'Náhodná citace';
$lang['module_desc_citation'] = 'Zobrazí náhodnou citaci';
$lang['module_Citation_lang'] = 'Jazyk';
$lang['module_Citation_code'] = 'Související kód';

//------------------------------------------------------------------------------
//                            Module Featured Photos
//------------------------------------------------------------------------------

$lang['module_name_featuredphotos'] = 'Nejlepší Fotky';
$lang['module_desc_featuredphotos'] = 'Zobrazí favorizované fotky webmastera';

?>