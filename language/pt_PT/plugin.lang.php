<?php

$lang['stuffs_mods_management'] = 'Gestão de Blocos';
$lang['stuffs_add_mod'] = 'Adicionar um bloco';
$lang['stuffs_edit_mod'] = 'Editar bloco';

$lang['stuffs_module_title'] = 'Título do bloco';
$lang['stuffs_desc'] = 'Descrição';
$lang['stuffs_only_for_admin'] = '(apenas para o painel administrativo)';
$lang['stuffs_type'] = 'Tipo de Bloco';
$lang['stuffs_position'] = 'Posição';
$lang['stuffs_id_ligne'] = 'ID da linha';
$lang['stuffs_width'] = 'Largura';
$lang['stuffs_action'] = 'Acções';
$lang['stuffs_edit'] = 'Modificar bloco';
$lang['stuffs_delete'] = 'Apagar bloco';
$lang['stuffs_confirm_delete'] = 'Tem a certeza que deseja apagar o bloco %s?';
$lang['stuffs_main_block'] = 'Bloco principal';
$lang['Hide on home page'] = 'Esconder na página de entrada';

$lang['stuffs_add_module'] = 'Adicionar novo bloco';
$lang['stuffs_module_config'] = 'Configuração do bloco';
$lang['stuffs_visual_config'] = 'Mostrar configuração';
$lang['stuffs_module_options'] = 'Opções do bloco';
$lang['stuffs_authorized_group'] = 'Grupos autorizados';
$lang['stuffs_authorized_users'] = 'Utilizadores autorizados';
$lang['stuffs_public_module'] = '(Manter vazio para bloco público)';
$lang['stuffs_show_title'] = 'Mostrar título do bloco';
$lang['stuffs_show_module_on'] = 'Mostrar bloco :';
$lang['stuffs_show_on_home'] = 'Na página de entrada';
$lang['stuffs_show_on_root'] = 'Na página raiz das categorias';
$lang['stuffs_show_on_cats'] = 'Em todas as páginas de categorias';
$lang['stuffs_show_on_picture'] = 'Nas páginas de Imagem';
$lang['stuffs_no_options'] = 'Este bloco não tem opções';

$lang['stuffs_perm'] = 'Activar autorização  de gestão:';
$lang['stuffs_group_perm'] = 'por grupos';
$lang['stuffs_user_perm'] = 'por tipo de utilizador';
$lang['stuffs_level_perm'] = 'por nível de privacidade';

$lang['stuffs_select_all'] = 'Seleccionar todos';
$lang['stuffs_unselect_all'] = 'Desseleccionar todos';

// Infos messages
$lang['stuffs_order_saved'] = 'Ordem salva com sucesso.';
$lang['stuffs_upgrade_message'] = 'A extensão PWG Stuffs foi renomeada. Agora chama-se "Blocos".';

// Errors messages
$lang['stuffs_error_no_mod_selected'] = 'Não seleccionou bloco algum.';
$lang['stuffs_no_name'] = 'Deverá especificar um nome para o bloco';
$lang['stuffs_parent_plugin_is_missing'] = 'A EXTENSÃO RAIZ NÃO ESTÁ ACTIVADA. Deverá remover este bloco ou re-activar a extensão raiz.';
$lang['stuffs_piclens_need_upgrade'] = 'A EXTENSÃO PICLENS DEVERÁ SER ACTUALIZADA. PWG Stuffs não é compatível com esta versão da extensão Piclens.';

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