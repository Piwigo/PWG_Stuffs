<?php

$lang['stuffs_mods_management'] = 'Gestione dei blocchi';
$lang['stuffs_add_mod'] = 'Aggiungere un blocco';
$lang['stuffs_edit_mod'] = 'Modificare il blocco';

$lang['stuffs_module_title'] = 'Titolo del blocco';
$lang['stuffs_desc'] = 'Descrizione';
$lang['stuffs_only_for_admin'] = '(solo per il pannello dell\'amministrazione)';
$lang['stuffs_type'] = 'Tipo di blocco';
$lang['stuffs_position'] = 'Posizione';
$lang['stuffs_id_ligne'] = 'ID line';
$lang['stuffs_width'] = 'Larghezza';
$lang['stuffs_action'] = 'Azioni';
$lang['stuffs_edit'] = 'Modificare il blocco';
$lang['stuffs_delete'] = 'Eliminare il blocco';
$lang['stuffs_confirm_delete'] = 'Siete sicuri di voler eliminare il blocco %s?';
$lang['stuffs_main_block'] = 'Blocco principale';
$lang['Hide on home page'] = 'Nascondere sulla Home';

$lang['stuffs_add_module'] = 'Aggiungere un nuovo blocco';
$lang['stuffs_module_config'] = 'Configurazione del blocco';
$lang['stuffs_visual_config'] = 'Configurazione della visualizzazione';
$lang['stuffs_module_options'] = 'Opzioni del blocco';
$lang['stuffs_authorized_group'] = 'Gruppi autorizzati';
$lang['stuffs_authorized_users'] = 'utenti autorizzati';
$lang['stuffs_public_module'] = '(Mantenere vuoto per un blocco pubblico)';
$lang['stuffs_show_title'] = 'Mostrare il titolo del blocco';
$lang['stuffs_show_module_on'] = 'Mostrare il blocco :';
$lang['stuffs_show_on_home'] = 'Sulla pagina principale del sito';
$lang['stuffs_show_on_root'] = 'Alla radice degli album';
$lang['stuffs_show_on_cats'] = 'Su tutte le pagine degli album';
$lang['stuffs_show_on_picture'] = 'Sulle pagine delle foto';
$lang['stuffs_no_options'] = 'Nessuna opzione per questo blocco';

$lang['stuffs_perm'] = 'Attivare la gestione delle autorizzazioni sui moduli :';
$lang['stuffs_group_perm'] = 'per gruppi';
$lang['stuffs_user_perm'] = 'per tipo d\'utente';
$lang['stuffs_level_perm'] = 'per livello privacy';

$lang['stuffs_select_all'] = 'Selezionare tutto';
$lang['stuffs_unselect_all'] = 'Deselezionare tutto';

// Infos messages
$lang['stuffs_order_saved'] = 'Ordinamento è stato registrato';
$lang['stuffs_upgrade_message'] = 'Il plug-in PWG Stuffs è stato rinominato. Oramai si chiama "Blocks"';

// Errors messages
$lang['stuffs_error_no_mod_selected'] = 'Non avete selezionato nessun blocco da aggiungere';
$lang['stuffs_no_name'] = 'Dovete specificare un nome per il blocco';
$lang['stuffs_parent_plugin_is_missing'] = 'IL PLUG-IN PARENTE NON È ATTIVO. Dovete rimuovere il blocco o riattivare il plug-in parente';
$lang['stuffs_piclens_need_upgrade'] = 'IL PLUG-IN PICLENS DEVE ESSERE AGGIORNATO. PWG Stuffs non è compatibile con la versione di Piclens';

//------------------------------------------------------------------------------
//              Module LastComs
//------------------------------------------------------------------------------

$lang['module_name_lastcoms'] = 'Ultimi commenti';
$lang['module_desc_lastcoms'] = 'Visualizzare gli ultimi commenti inseriti';

$lang['lastcoms_no_nb_comments'] = 'Dovete inserire un valore nel campo "Numero di commenti da visualizzare".';
$lang['lastcoms_config'] = 'Configurazione';
$lang['lastcoms_nb_comments'] = 'Numero di commenti da visualizzare';
$lang['lastcoms_show_buttons'] = 'Visualizzare i pulsanti d\'amministrazione';
$lang['lastcoms_dim'] = 'Dimensioni delle miniature';
$lang['lastcoms_width'] = 'larghezza massima';
$lang['lastcoms_height'] = 'altezza massima';
$lang['lastcoms_nb_cadres'] = 'Numero di quadri per riga';
$lang['lastcoms_taille_cadres'] = 'Altezza dei quadri';

//------------------------------------------------------------------------------
//              Module Logon
//------------------------------------------------------------------------------

$lang['module_name_logon'] = 'Identificazione';
$lang['module_desc_logon'] = 'Visualizzare un blocco "Identificazione" sull\'indice';

$lang['logon_remove_menubar_block'] = 'Rimuovere il blocco "identificazione rapida" dalla barra dei menu';

//------------------------------------------------------------------------------
//              Module Personal
//------------------------------------------------------------------------------

$lang['module_name_personal'] = 'Blocco personale';
$lang['module_desc_personal'] = 'Visualizzare blocco personale (una nota per esempio)';

$lang['personal_content'] = 'Contenuto';

//------------------------------------------------------------------------------
//              Module Tags
//------------------------------------------------------------------------------

$lang['module_name_tags'] = 'Tags';
$lang['module_desc_tags'] = 'Visualizzare i tags della galleria';

$lang['stuffs_tags_default_display'] = 'Visualizzazione dei tag';
$lang['stuffs_tags_cloud'] = 'Nuvola di tag';
$lang['stuffs_tags_letters'] = 'Ragruppare per lettera';
$lang['stuffs_tags_cumulus'] = 'Usare cumulus (il plugin <a href=http://piwigo.org/ext/extension_view.php?eid=263 target="_blank">Cumulus Tags Cloud</a> deve essere installato)';

//------------------------------------------------------------------------------
//              Module Most Visited
//------------------------------------------------------------------------------

$lang['module_name_mostvisited'] = 'Le più viste';
$lang['module_desc_mostvisited'] = 'Visualizza le x foto le più viste della galleria o dell\'album';

$lang['stuffs_mv_nb_images'] = 'Numero massimo di foto da visualizzare';
$lang['stuffs_mv_category_display'] = 'Visualizzazione sulle pagine degli album';
$lang['stuffs_mv_all_cats'] = 'Tutti gli album';
$lang['stuffs_mv_w_thumb'] = 'Solo gli album con miniature';
$lang['stuffs_mv_wo_thumb'] = 'Solo gli album senza miniature';
$lang['stuffs_mv_selected_cats'] = 'Solo gli album selezionate';

$lang['stuffs_mv_cat_selection'] = 'Selezione degli album';
$lang['stuffs_mv_hold_ctrl'] = 'tenere premuto CTRL';

//------------------------------------------------------------------------------
//              Module Best Rated
//------------------------------------------------------------------------------

$lang['module_name_bestrated'] = 'Le più votate';
$lang['module_desc_bestrated'] = 'Visualizza le x foto le più votate della galleria o dell\'album';

//------------------------------------------------------------------------------
//              Module Recent
//------------------------------------------------------------------------------

$lang['module_name_recent'] = 'Foto recenti';
$lang['module_desc_recent'] = 'Visualizza le x foto le più recenti della galleria o dell\'album (se esistono)';

//------------------------------------------------------------------------------
//              Module Random
//------------------------------------------------------------------------------

$lang['module_name_random'] = 'Foto a caso';
$lang['module_desc_random'] = 'Visualizza x foto a caso della galleria o dell\'album';

//------------------------------------------------------------------------------
//              Module Citation
//------------------------------------------------------------------------------

$lang['module_name_citation'] = 'Citazione a caso del momento';
$lang['module_desc_citation'] = 'Vizualizza una citazione a caso';
$lang['module_Citation_lang'] = 'Lingua';
$lang['module_Citation_code'] = 'Codice associato';

//------------------------------------------------------------------------------
//              Module Featured Photos
//------------------------------------------------------------------------------

$lang['module_name_featuredphotos'] = 'Foto del giorno';
$lang['module_desc_featuredphotos'] = 'Visualizza le foto preferite del webmaster';

?>