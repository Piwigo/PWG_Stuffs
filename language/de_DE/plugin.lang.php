<?php

$lang['stuffs_mods_management'] = 'Verwaltung der Blöcke';
$lang['stuffs_add_mod'] = 'Einen Block hinzufügen';
$lang['stuffs_edit_mod'] = 'Einen Block bearbeiten';

$lang['stuffs_module_title'] = 'Titel des Blockes';
$lang['stuffs_desc'] = 'Beschreibung';
$lang['stuffs_only_for_admin'] = '(nur für den Administrations Panel)';
$lang['stuffs_type'] = 'Block-Typ';
$lang['stuffs_position'] = 'Position';
$lang['stuffs_id_ligne'] = 'ID Linie';
$lang['stuffs_width'] = 'Breite';
$lang['stuffs_action'] = 'Aktionen';
$lang['stuffs_edit'] = 'Block bearbeiten';
$lang['stuffs_delete'] = 'Block löschen';
$lang['stuffs_confirm_delete'] = 'Sind Sie sicher, dass Sie den Block %s löschen wollen?';
$lang['stuffs_main_block'] = 'Hauptblock';
$lang['Hide on home page'] = 'Auf der Startseite verbergen';

$lang['stuffs_add_module'] = 'Einen neuen Block hinzufügen';
$lang['stuffs_module_config'] = 'Block-Konfiguration';
$lang['stuffs_visual_config'] = 'Display-Konfiguration';
$lang['stuffs_module_options'] = 'Block-Optionen';
$lang['stuffs_authorized_group'] = 'Autorisierte Gruppen';
$lang['stuffs_authorized_users'] = 'Autorisierte Benutzer';
$lang['stuffs_public_module'] = '(Leer lassen um den Block öffentlich zu halten.)';
$lang['stuffs_show_title'] = 'Block Titel anzeigen';
$lang['stuffs_show_module_on'] = 'Block anzeigen :';
$lang['stuffs_show_on_home'] = 'Auf der Startseite';
$lang['stuffs_show_on_root'] = 'Am Stamm der Kategorien.';
$lang['stuffs_show_on_cats'] = 'Auf allen Kategorie Seiten';
$lang['stuffs_show_on_picture'] = 'Auf den Bilderseiten';
$lang['stuffs_no_options'] = 'Keine Optionen für diesen Block';

$lang['stuffs_perm'] = 'Verwaltung der Genehmigungen aktivieren';
$lang['stuffs_group_perm'] = 'nach Gruppen';
$lang['stuffs_user_perm'] = 'nach Benutzer Typ';
$lang['stuffs_level_perm'] = 'nach Privacy Level';

$lang['stuffs_select_all'] = 'Alle auswählen';
$lang['stuffs_unselect_all'] = 'Alle Auswahlen aufheben';

// Infos messages
$lang['stuffs_order_saved'] = 'Reihenfolge erfolgreich gespeichert.';
$lang['stuffs_upgrade_message'] = 'PWG Stuffs Plug-In wurde umbenannt. Es heißt nun "Blocks".';

// Errors messages
$lang['stuffs_error_no_mod_selected'] = 'Sie haben keinen Block ausgewählt.';
$lang['stuffs_no_name'] = 'Sie müssen den Namen des Blockes angeben';
$lang['stuffs_parent_plugin_is_missing'] = 'PARENT PLUGIN IST NICHT AKTIVIERT. Sie sollten diesen Block entfernen oder den übergeordneten Plug-In reaktivieren.';
$lang['stuffs_piclens_need_upgrade'] = 'PICLENS PLUGIN MUSS AKTUALISIERT WERDEN. PWG Stuffs ist nicht kompatibel mit dieser Version von Piclens.';

//------------------------------------------------------------------------------
//              Module LastComs
//------------------------------------------------------------------------------

$lang['module_name_lastcoms'] = 'Die letzten Kommentare';
$lang['module_desc_lastcoms'] = 'Zeigt die zuletzt eingegebenen Kommentare an';

$lang['lastcoms_no_nb_comments'] = 'Das Feld "Anzahl der angezeigten Kommentare" ist obligatorisch.';
$lang['lastcoms_config'] = 'Einstellung';
$lang['lastcoms_nb_comments'] = 'Anzahl der angezeigten Kommentare';
$lang['lastcoms_show_buttons'] = 'Verwaltungsknöpfe anzeigen';
$lang['lastcoms_dim'] = 'Dimensionen der Miniaturbilder';
$lang['lastcoms_width'] = 'Max. Breite';
$lang['lastcoms_height'] = 'Max. Höhe';
$lang['lastcoms_nb_cadres'] = 'Anzahl Blöcke pro Linie';
$lang['lastcoms_taille_cadres'] = 'Höhe der Blöcke';

//------------------------------------------------------------------------------
//              Module Logon
//------------------------------------------------------------------------------

$lang['module_name_logon'] = 'Anmeldung';
$lang['module_desc_logon'] = 'Zeigt ein Anmeldefenster in einem Block auf der Indexseite an';

$lang['logon_remove_menubar_block'] = 'Die "Schnellanmeldung" vom Hauptmenü entfernen';

//------------------------------------------------------------------------------
//              Module Personal
//------------------------------------------------------------------------------

$lang['module_name_personal'] = 'Persönlicher Block';
$lang['module_desc_personal'] = 'Zeigt einen persönlichen Block an (z. Bsp. ein Editorial)';

$lang['personal_content'] = 'Inhalt';

//------------------------------------------------------------------------------
//              Module Tags
//------------------------------------------------------------------------------

$lang['module_name_tags'] = 'Tags';
$lang['module_desc_tags'] = 'Zeigt die Tags der Galerien an';

$lang['stuffs_tags_default_display'] = 'Tags-Anzeige';
$lang['stuffs_tags_cloud'] = 'Tags normal auflisten';
$lang['stuffs_tags_letters'] = 'Nach Buchstaben gruppieren';
$lang['stuffs_tags_cumulus'] = 'Den Modus Cumulus benützen(Das Plugin <a href=http://piwigo.org/ext/extension_view.php?eid=263 target="_blank">Cumulus Tags Cloud</a> muss dazu installiert werden)';

//------------------------------------------------------------------------------
//              Module Most Visited
//------------------------------------------------------------------------------

$lang['module_name_mostvisited'] = 'Meist angeschaute Bilder';
$lang['module_desc_mostvisited'] = 'Zeigt die x meist angeschauten Bilder der Galerie oder Kategorie an';

$lang['stuffs_mv_nb_images'] = 'Max. Anzahl der anzuzeigenden Bilder';
$lang['stuffs_mv_category_display'] = 'Auf der Kategorieseite anzeigen';
$lang['stuffs_mv_all_cats'] = 'Alle Kategorien';
$lang['stuffs_mv_w_thumb'] = 'Nur Kategorien mit Miniaturbildern';
$lang['stuffs_mv_wo_thumb'] = 'Nur Kategorien ohne Miniaturbilder';
$lang['stuffs_mv_selected_cats'] = 'Nur ausgewählte Kategorien';

$lang['stuffs_mv_cat_selection'] = 'Auswahl Kategorie';
$lang['stuffs_mv_hold_ctrl'] = 'CTRL-Taste gedrückt halten';

//------------------------------------------------------------------------------
//              Module Best Rated
//------------------------------------------------------------------------------

$lang['module_name_bestrated'] = 'Beste Noten';
$lang['module_desc_bestrated'] = 'Zeigt die x bestbenoteten Bilder der Galerie oder Kategorie an';

//------------------------------------------------------------------------------
//              Module Recent
//------------------------------------------------------------------------------

$lang['module_name_recent'] = 'Neuesten Bilder';
$lang['module_desc_recent'] = 'Zeigt die neusten hinzugefügten Bilder der Galerie oder Kategorie an (falls vorhanden!)';

//------------------------------------------------------------------------------
//              Module Random
//------------------------------------------------------------------------------

$lang['module_name_random'] = 'Zufallsbild';
$lang['module_desc_random'] = 'Zeigt x Zufallsbilder der Galerie oder Kategorie an';

//------------------------------------------------------------------------------
//              Module Citation
//------------------------------------------------------------------------------

$lang['module_name_citation'] = 'Zufälliges Zitat';
$lang['module_desc_citation'] = 'Zeige ein zufälliges Zitat';
$lang['module_Citation_lang'] = 'Sprache';
$lang['module_Citation_code'] = 'Dazugehöriger Code';

//------------------------------------------------------------------------------
//              Module Featured Photos
//------------------------------------------------------------------------------

$lang['module_name_featuredphotos'] = 'Ausgewählte Fotos';
$lang['module_desc_featuredphotos'] = 'Lieblingsbilder des Webmasters anzeigen';

?>