<?php

$lang['stuffs_mods_management'] = 'Gestion des blocs';
$lang['stuffs_add_mod'] = 'Ajouter un nouveau bloc';
$lang['stuffs_edit_mod'] = 'Edition du bloc';

$lang['stuffs_module_title'] = 'Titre du bloc';
$lang['stuffs_desc'] = 'Description';
$lang['stuffs_only_for_admin'] = '(uniquement pour le panneau d\'administration)';
$lang['stuffs_type'] = 'Type de bloc';
$lang['stuffs_position'] = 'Position';
$lang['stuffs_id_ligne'] = 'ID ligne';
$lang['stuffs_width'] = 'Largeur';
$lang['stuffs_action'] = 'Actions';
$lang['stuffs_edit'] = 'Modifier le bloc';
$lang['stuffs_delete'] = 'Supprimer le bloc';
$lang['stuffs_confirm_delete'] = 'Etes-vous sur de vouloir supprimer le bloc %s?';
$lang['stuffs_main_block'] = 'Bloc principal';
$lang['Hide on home page'] = 'Masquer sur la page d\'accueil';

$lang['stuffs_add_module'] = 'Ajout d\'un nouveau bloc';
$lang['stuffs_module_config'] = 'Configuration du bloc';
$lang['stuffs_visual_config'] = 'Configuration de l\'affichage';
$lang['stuffs_module_options'] = 'Options du bloc';
$lang['stuffs_authorized_group'] = 'Groupes autorisés';
$lang['stuffs_authorized_users'] = 'Utilisateurs autorisés';
$lang['stuffs_public_module'] = '(Laisser vide pour un bloc publique)';
$lang['stuffs_show_title'] = 'Afficher le titre du bloc';
$lang['stuffs_show_module_on'] = 'Afficher le bloc :';
$lang['stuffs_show_on_home'] = 'Sur la page d\'accueil du site';
$lang['stuffs_show_on_root'] = 'A la racine des catégories';
$lang['stuffs_show_on_cats'] = 'Sur toutes les pages des catégories';
$lang['stuffs_show_on_picture'] = 'Sur les pages des images';
$lang['stuffs_no_options'] = 'Pas d\'options disponibles pour ce bloc';

$lang['stuffs_perm'] = 'Activer la gestion des droits d\'accès aux modules:';
$lang['stuffs_group_perm'] = 'par groupes';
$lang['stuffs_user_perm'] = 'par type d\'utilisateurs';
$lang['stuffs_level_perm'] = 'par niveau de confidentialité';

$lang['stuffs_select_all'] = 'Sélectionner tout';
$lang['stuffs_unselect_all'] = 'Déselectionner tout';

//Messages d'infos
$lang['stuffs_order_saved'] = 'L\'ordre a été sauvegardé.';
$lang['stuffs_upgrade_message'] = 'Le plugin PWG Stuffs a été renommé. Il s\'appelle désormais "Blocks".';

// Messages d'erreurs
$lang['stuffs_error_no_mod_selected'] = 'Vous n\'avez pas sélectionné de bloc à ajouter.';
$lang['stuffs_no_name'] = 'Vous devez indiquer un nom pour le bloc';
$lang['stuffs_parent_plugin_is_missing'] = 'LE PLUGIN PARENT N\'EST PLUS ACTIVÉ. Veuillez supprimer ce bloc ou réactiver le plugin parent.';
$lang['stuffs_piclens_need_upgrade'] = 'LE PLUGIN PICLENS DOIT ÊTRE MIS À JOUR. PWG Stuffs n\'est pas compatible avec cette version de Piclens.';

//------------------------------------------------------------------------------
//              Module LastComs
//------------------------------------------------------------------------------

$lang['module_name_lastcoms'] = 'Derniers commentaires';
$lang['module_desc_lastcoms'] = 'Affiche les derniers commentaires postés';

$lang['lastcoms_no_nb_comments'] = 'Vous devez renseigner le champ "Nombre de commentaires à afficher".';
$lang['lastcoms_config'] = 'Configuration';
$lang['lastcoms_nb_comments'] = 'Nombre de commentaires à afficher';
$lang['lastcoms_show_buttons'] = 'Afficher les boutons admin';
$lang['lastcoms_dim'] = 'Dimension des miniatures';
$lang['lastcoms_width'] = 'largeur maxi';
$lang['lastcoms_height'] = 'hauteur maxi';
$lang['lastcoms_nb_cadres'] = 'Nombre de cadres par ligne';
$lang['lastcoms_taille_cadres'] = 'Hauteur des cadres';

//------------------------------------------------------------------------------
//              Module Logon
//------------------------------------------------------------------------------

$lang['module_name_logon'] = 'Identification';
$lang['module_desc_logon'] = 'Affiche un bloc "Identification" sur l\'index';

$lang['logon_remove_menubar_block'] = 'Retirer le bloc "identification rapide" du menubar';

//------------------------------------------------------------------------------
//              Module Personal
//------------------------------------------------------------------------------

$lang['module_name_personal'] = 'Bloc personnel';
$lang['module_desc_personal'] = 'Affiche un bloc personnel (un édito par exemple)';

$lang['personal_content'] = 'contenu';

//------------------------------------------------------------------------------
//              Module Tags
//------------------------------------------------------------------------------

$lang['module_name_tags'] = 'Tags';
$lang['module_desc_tags'] = 'Affiche les tags de la galerie';

$lang['stuffs_tags_default_display'] = 'Affichage des tags';
$lang['stuffs_tags_cloud'] = 'Nuage de tags';
$lang['stuffs_tags_letters'] = 'Regrouper par lettres';
$lang['stuffs_tags_cumulus'] = 'Utiliser le mode Cumulus (le plugin <a href=http://piwigo.org/ext/extension_view.php?eid=263 target="_blank">Cumulus Tags Cloud</a> doit etre installé)';

//------------------------------------------------------------------------------
//              Module Most Visited
//------------------------------------------------------------------------------

$lang['module_name_mostvisited'] = 'Plus vues';
$lang['module_desc_mostvisited'] = 'Affiche les x images les plus vues de la galerie ou de la catégorie';

$lang['stuffs_mv_nb_images'] = 'Nombre maximum d\'images à afficher';
$lang['stuffs_mv_category_display'] = 'Affichage sur les pages des catégories';
$lang['stuffs_mv_all_cats'] = 'Toutes les catégories';
$lang['stuffs_mv_w_thumb'] = 'Catégories avec miniatures uniquement';
$lang['stuffs_mv_wo_thumb'] = 'Catégories sans miniatures uniquement';
$lang['stuffs_mv_selected_cats'] = 'Catégories sélectionnées uniquement';

$lang['stuffs_mv_cat_selection'] = 'Sélection des catégories';
$lang['stuffs_mv_hold_ctrl'] = 'maintenir CTRL appuyé';

//------------------------------------------------------------------------------
//              Module Best Rated
//------------------------------------------------------------------------------

$lang['module_name_bestrated'] = 'Mieux notées';
$lang['module_desc_bestrated'] = 'Affiche les x images les mieux notées de la galerie ou de la catégorie';

//------------------------------------------------------------------------------
//              Module Recent
//------------------------------------------------------------------------------

$lang['module_name_recent'] = 'Images récentes';
$lang['module_desc_recent'] = 'Affiche les images récentes de la galerie ou de la catégorie (s\'il y en a)';

//------------------------------------------------------------------------------
//              Module Random
//------------------------------------------------------------------------------

$lang['module_name_random'] = 'Images au hasard';
$lang['module_desc_random'] = 'Affiche x images au hasard dans la galerie ou la catégorie';

//------------------------------------------------------------------------------
//              Module Citation
//------------------------------------------------------------------------------

$lang['module_name_citation'] = 'Citation aléatoire du moment';
$lang['module_desc_citation'] = 'Affiche une citation en français prise au hasard';
$lang['module_Citation_lang'] = 'Langue';
$lang['module_Citation_code'] = 'Code associé';

//------------------------------------------------------------------------------
//              Module Featured Photos
//------------------------------------------------------------------------------

$lang['module_name_featuredphotos'] = 'Images du jour';
$lang['module_desc_featuredphotos'] = 'Affiche les images favorites du webmaster';