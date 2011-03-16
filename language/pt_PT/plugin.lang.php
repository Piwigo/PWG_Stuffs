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

$lang['module_name_lastcoms'] = 'Últimos Comentários';
$lang['module_desc_lastcoms'] = 'Mostrar comentários mais recentes';

$lang['lastcoms_no_nb_comments'] = 'Deverá especificar o número de comentários.';
$lang['lastcoms_config'] = 'Configuração';
$lang['lastcoms_nb_comments'] = 'Número de comentários a mostrar';
$lang['lastcoms_show_buttons'] = 'Mostrar Botões de Administração';
$lang['lastcoms_dim'] = 'Tamanho das miniaturas';
$lang['lastcoms_width'] = 'Largura máxima';
$lang['lastcoms_height'] = 'Altura máxima';
$lang['lastcoms_nb_cadres'] = 'Número de molduras por linha';
$lang['lastcoms_taille_cadres'] = 'Altura da moldura';


//------------------------------------------------------------------------------
//                            Module Logon
//------------------------------------------------------------------------------

$lang['module_name_logon'] = 'Iniciar Sessão';
$lang['module_desc_logon'] = 'Mostrar bloco de Início de Sessão';

$lang['logon_remove_menubar_block'] = 'Remover bloco de "Ligação Rápida" da barra de menú';


//------------------------------------------------------------------------------
//                            Module Personal
//------------------------------------------------------------------------------

$lang['module_name_personal'] = 'Bloco Pessoal';
$lang['module_desc_personal'] = 'Mostrar bloco Pessoal (como um editor)';

$lang['personal_content'] = 'Conteúdo';


//------------------------------------------------------------------------------
//                            Module Tags
//------------------------------------------------------------------------------

$lang['module_name_tags'] = 'Etiquetas';
$lang['module_desc_tags'] = 'Mostrar Etiquetas da galeria';

$lang['stuffs_tags_default_display'] = 'Mostrar Etiquetas como';
$lang['stuffs_tags_cloud'] = 'Núvem de Etiquetas';
$lang['stuffs_tags_letters'] = 'Agrupar por letras';
$lang['stuffs_tags_cumulus'] = 'Usar modo cumulus (o plugin <a href=http://piwigo.org/ext/extension_view.php?eid=263 target="_blank">Cumulus Tags Cloud</a> deverá estar instalado)';


//------------------------------------------------------------------------------
//                            Module Most Visited
//------------------------------------------------------------------------------

$lang['module_name_mostvisited'] = 'Mais Vistas';
$lang['module_desc_mostvisited'] = 'Mostrar as x fotos mais vistas na galeria ou numa categoria';

$lang['stuffs_mv_nb_images'] = 'Número máximo de fotos a mostrar';
$lang['stuffs_mv_category_display'] = 'Mostrar nas páginas de categoria';
$lang['stuffs_mv_all_cats'] = 'Em todoas as categorias';
$lang['stuffs_mv_w_thumb'] = 'Apenas em categorias com miniaturas';
$lang['stuffs_mv_wo_thumb'] = 'Apenas em categorias com miniaturas';
$lang['stuffs_mv_selected_cats'] = 'Apenas nas categorias seleccionadas';

$lang['stuffs_mv_cat_selection'] = 'Seleccionar categorias';
$lang['stuffs_mv_hold_ctrl'] = 'Pressione CTRL sem largar enquanto clica nas categorias para seleccionar várias';

//------------------------------------------------------------------------------
//                            Module Best Rated
//------------------------------------------------------------------------------

$lang['module_name_bestrated'] = 'Mais Votadas';
$lang['module_desc_bestrated'] = 'Mostrar as x fotos mais votadas na galeria ou numa categoria';

//------------------------------------------------------------------------------
//                            Module Recent
//------------------------------------------------------------------------------

$lang['module_name_recent'] = 'Fotos Recentes';
$lang['module_desc_recent'] = 'Mostrar as x fotos mais recentes na galeria ou numa categoria (se existirem)';

//------------------------------------------------------------------------------
//                            Module Random
//------------------------------------------------------------------------------

$lang['module_name_random'] = 'Fotos Aleatórias';
$lang['module_desc_random'] = 'Mostrar x fotos aleatórias na galeria ou numa categoria';

//------------------------------------------------------------------------------
//                            Module Citation
//------------------------------------------------------------------------------

$lang['module_name_citation'] = 'Citação Aleatória';
$lang['module_desc_citation'] = 'Mostrar uma citação aleatória';
$lang['module_Citation_lang'] = 'Linguagem';
$lang['module_Citation_code'] = 'Código Relacionado';

//------------------------------------------------------------------------------
//                            Module Featured Photos
//------------------------------------------------------------------------------

$lang['module_name_featuredphotos'] = 'Fotos em Destaque';
$lang['module_desc_featuredphotos'] = 'Mostrar as fotos favoritas do webmaster';


?>