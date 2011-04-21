<?php

$lang['stuffs_mods_management'] = 'Gestión de los bloques';
$lang['stuffs_add_mod'] = 'Añadir un nuevo bloque';
$lang['stuffs_edit_mod'] = 'Edición del bloque';

$lang['stuffs_module_title'] = 'Titulo del bloque';
$lang['stuffs_desc'] = 'Descripcion';
$lang['stuffs_only_for_admin'] = '(sólo para el panel de la administración)';
$lang['stuffs_type'] = 'Tipo de bloque';
$lang['stuffs_position'] = 'Posicion';
$lang['stuffs_id_ligne'] = 'ID línea';
$lang['stuffs_width'] = 'Ancho';
$lang['stuffs_action'] = 'Acciones';
$lang['stuffs_edit'] = 'Modificar el bloque';
$lang['stuffs_delete'] = 'Supprimir el bloque';
$lang['stuffs_confirm_delete'] = 'Está seguro quierer eliminar el bloque %s?';
$lang['stuffs_main_block'] = 'Bloque principal';
$lang['Hide on home page'] = 'Ocultar en la página principal';

$lang['stuffs_add_module'] = 'Añadir un nuevo bloque';
$lang['stuffs_module_config'] = 'Configuracion del bloque';
$lang['stuffs_visual_config'] = 'Configuración de la visualizacion';
$lang['stuffs_module_options'] = 'Opción del blosque';
$lang['stuffs_authorized_group'] = 'Grupos autorizados';
$lang['stuffs_authorized_users'] = 'Usuarios autorizados';
$lang['stuffs_public_module'] = '(Deja en blanco para bloque público)';
$lang['stuffs_show_title'] = 'Mostrar el titulo del bloque';
$lang['stuffs_show_module_on'] = 'Mostrar el bloque :';
$lang['stuffs_show_on_home'] = 'En la pagina principal del sitio';
$lang['stuffs_show_on_root'] = 'En la raíz de las categorías';
$lang['stuffs_show_on_cats'] = 'En todas las páginas de las categorías';
$lang['stuffs_show_on_picture'] = 'En las páginas de imágenes';
$lang['stuffs_no_options'] = 'No hay opciones para este bloque';

$lang['stuffs_perm'] = 'Habilitar la administración de los derechos de acceso a los módulos:';
$lang['stuffs_group_perm'] = 'por grupos';
$lang['stuffs_user_perm'] = 'por tipo de usuario';
$lang['stuffs_level_perm'] = 'por nivel de confidencialidad';

$lang['stuffs_select_all'] = 'Seleccionar todo';
$lang['stuffs_unselect_all'] = 'Deseleccionar todos';

//Mensajes de información
$lang['stuffs_order_saved'] = 'El orden se ha guardado.';
$lang['stuffs_upgrade_message'] = 'El plugin PWG Stuffs a sido renombrado. Ahora se llama "Blocks".';

// Mensajes de error
$lang['stuffs_error_no_mod_selected'] = 'No ha seleccionado un bloque para agregar.';
$lang['stuffs_no_name'] = 'Debe introducir un nombre para el bloque';
$lang['stuffs_parent_plugin_is_missing'] = 'EL PLUGIN PADRE ya no está activo. Por favor, elimine este bloque o activar el plugin padres.';
$lang['stuffs_piclens_need_upgrade'] = 'EL PLUGIN PicLens debe ser actualizado. PWG Stuffs no es compatible con esta versión de Piclens.';

//------------------------------------------------------------------------------
//              Module LastComs
//------------------------------------------------------------------------------

$lang['module_name_lastcoms'] = 'Últimos comentarios';
$lang['module_desc_lastcoms'] = 'Visualiza los últimos comentarios enviados';

$lang['lastcoms_no_nb_comments'] = 'Usted debe informar el campo " Número de comentarios que hay que visualizar ".';
$lang['lastcoms_config'] = 'Configuración';
$lang['lastcoms_nb_comments'] = 'Número de comentarios que hay que visualizar';
$lang['lastcoms_show_buttons'] = 'Visualizar los botones admin';
$lang['lastcoms_dim'] = 'Dimensión de las miniaturas';
$lang['lastcoms_width'] = 'Anchura máxima';
$lang['lastcoms_height'] = 'Altura máxima';
$lang['lastcoms_nb_cadres'] = 'Número de cuadro por línea';
$lang['lastcoms_taille_cadres'] = 'Altura del cuadro';

//------------------------------------------------------------------------------
//              Module Logon
//------------------------------------------------------------------------------

$lang['module_name_logon'] = 'Identificación';
$lang['module_desc_logon'] = 'Fija un bloque "Identificación" sobre el índice';

$lang['logon_remove_menubar_block'] = 'Retirar el bloque " identificación rápida " del menubar';

//------------------------------------------------------------------------------
//              Module Personal
//------------------------------------------------------------------------------

$lang['module_name_personal'] = 'Bloque personal';
$lang['module_desc_personal'] = 'Fija un bloque personal (un editorial por ejemplo)';

$lang['personal_content'] = 'Contenido';

//------------------------------------------------------------------------------
//              Module Tags
//------------------------------------------------------------------------------

$lang['module_name_tags'] = 'Etiquetas';
$lang['module_desc_tags'] = 'Fija las tags de la galería';

$lang['stuffs_tags_default_display'] = 'Fijación de las tags';
$lang['stuffs_tags_cloud'] = 'Nube de tags';
$lang['stuffs_tags_letters'] = 'Reagrupar por letras';
$lang['stuffs_tags_cumulus'] = '¿ Utilizar el modo Cúmulo (el plugin <a href=http://piwigo.org/ext/extension_view.php?eid=263 target="_blank">Cumulus Tags Cloud</a> debe etre instalado)';

//------------------------------------------------------------------------------
//              Module Most Visited
//------------------------------------------------------------------------------

$lang['module_name_mostvisited'] = 'Más vistas';
$lang['module_desc_mostvisited'] = 'Anuncio las x imágenes más vistas de la galería o de la categoría';

$lang['stuffs_mv_nb_images'] = 'Número máximo de imágenes que hay que fijar';
$lang['stuffs_mv_category_display'] = 'Fijación sobre las páginas de las categorías';
$lang['stuffs_mv_all_cats'] = 'Todas las categorías';
$lang['stuffs_mv_w_thumb'] = 'Categorías con miniaturas únicamente';
$lang['stuffs_mv_wo_thumb'] = 'Categorías sin miniaturas únicamente';
$lang['stuffs_mv_selected_cats'] = 'Categorías seleccionadas únicamente';

$lang['stuffs_mv_cat_selection'] = 'Selección de las categorías';
$lang['stuffs_mv_hold_ctrl'] = 'Mantener a CTRL insistente';

//------------------------------------------------------------------------------
//              Module Best Rated
//------------------------------------------------------------------------------

$lang['module_name_bestrated'] = 'Mejor anotadas';
$lang['module_desc_bestrated'] = 'Anuncio x imágenes las mejor anotadas por la galería o por la categoría';

//------------------------------------------------------------------------------
//              Module Recent
//------------------------------------------------------------------------------

$lang['module_name_recent'] = 'Imágenes recientes';
$lang['module_desc_recent'] = 'Fija las imágenes recientes de la galería o de la categoría (si él de allí a)';

//------------------------------------------------------------------------------
//              Module Random
//------------------------------------------------------------------------------

$lang['module_name_random'] = 'Imágenes al azar';
$lang['module_desc_random'] = 'Anuncio x llenas de imágenes al azar en la galería o la categoría';

//------------------------------------------------------------------------------
//              Module Citation
//------------------------------------------------------------------------------

$lang['module_name_citation'] = 'Citación aleatoria del momento';
$lang['module_desc_citation'] = 'Fija una citación en francés tomada al azar';
$lang['module_Citation_lang'] = 'Idioma';
$lang['module_Citation_code'] = 'Código asociado';

//------------------------------------------------------------------------------
//              Module Featured Photos
//------------------------------------------------------------------------------

$lang['module_name_featuredphotos'] = 'Imágenes de día';
$lang['module_desc_featuredphotos'] = 'Fija las imágenes favoritas del webmaster';

?>