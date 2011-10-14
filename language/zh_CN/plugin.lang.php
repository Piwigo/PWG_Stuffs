<?php

$lang['stuffs_mods_management'] = '管理组件';
$lang['stuffs_add_mod'] = '添加组件';
$lang['stuffs_edit_mod'] = '编辑组件';

$lang['stuffs_module_title'] = '组件名称';
$lang['stuffs_desc'] = '描述';
$lang['stuffs_only_for_admin'] = '(只在后台管理中可见)';
$lang['stuffs_type'] = '组件类型';
$lang['stuffs_position'] = '位置';
$lang['stuffs_id_ligne'] = 'ID行';
$lang['stuffs_width'] = '宽度';
$lang['stuffs_action'] = '行为';
$lang['stuffs_edit'] = '修改组件';
$lang['stuffs_delete'] = '删除组件';
$lang['stuffs_confirm_delete'] = '你要删除组件%s吗?';
$lang['stuffs_main_block'] = '主组件';
$lang['Hide on home page'] = '在首页中隐藏';

$lang['stuffs_add_module'] = '添加新组件';
$lang['stuffs_module_config'] = '组件配置';
$lang['stuffs_visual_config'] = '显示配置';
$lang['stuffs_module_options'] = '组件选项';
$lang['stuffs_authorized_group'] = '权限组';
$lang['stuffs_authorized_users'] = '权限用户类型';
$lang['stuffs_public_module'] = '(保持发布的组件为空)';
$lang['stuffs_show_title'] = '显示组件名称';
$lang['stuffs_show_module_on'] = '显示组件:';
$lang['stuffs_show_on_home'] = '在主页上';
$lang['stuffs_show_on_root'] = '在根分类页上';
$lang['stuffs_show_on_cats'] = '在所有分类页上';
$lang['stuffs_show_on_picture'] = '在图片页上';
$lang['stuffs_no_options'] = '这个组件没有选项';

$lang['stuffs_perm'] = '激活权限管理:';
$lang['stuffs_group_perm'] = '按组';
$lang['stuffs_user_perm'] = '按用户类型';
$lang['stuffs_level_perm'] = '按隐私等级';

$lang['stuffs_select_all'] = '全选';
$lang['stuffs_unselect_all'] = '全不选';

// Infos messages
$lang['stuffs_order_saved'] = '成功保存排序.';
$lang['stuffs_upgrade_message'] = 'PWG Stuffs插件已经重新命名了. 现在叫做"组件".';

// Errors messages
$lang['stuffs_error_no_mod_selected'] = '没有选择任何的组件.';
$lang['stuffs_no_name'] = '必须指定组件名称';
$lang['stuffs_parent_plugin_is_missing'] = '父插件没有激活! 你可以移除这个组件或者重新激活它的父插件. ';
$lang['stuffs_piclens_need_upgrade'] = '必须先更新插件Piclens. PWG Stuffs与这个版本的Piclens插件不兼容.';

//------------------------------------------------------------------------------
//              Module LastComs
//------------------------------------------------------------------------------

$lang['module_name_lastcoms'] = '最新评论';
$lang['module_desc_lastcoms'] = '显示最新发表的评论';

$lang['lastcoms_no_nb_comments'] = '必须指定评论的数量.';
$lang['lastcoms_config'] = '配置';
$lang['lastcoms_nb_comments'] = '显示的评论数';
$lang['lastcoms_show_buttons'] = '显示admin按钮';
$lang['lastcoms_dim'] = '缩略图大小';
$lang['lastcoms_width'] = '最大宽度';
$lang['lastcoms_height'] = '最大高度';
$lang['lastcoms_nb_cadres'] = '每一行显示的评论数';
$lang['lastcoms_taille_cadres'] = '每行高度';

//------------------------------------------------------------------------------
//              Module Logon
//------------------------------------------------------------------------------

$lang['module_name_logon'] = '登录';
$lang['module_desc_logon'] = '显示登录组件';

$lang['logon_remove_menubar_block'] = '不显示"自动登录"选项';

//------------------------------------------------------------------------------
//              Module Personal
//------------------------------------------------------------------------------

$lang['module_name_personal'] = '自定义组件';
$lang['module_desc_personal'] = '显示一个自定义组件(一个文本区域,支持html代码)';

$lang['personal_content'] = '内容';

//------------------------------------------------------------------------------
//              Module Tags
//------------------------------------------------------------------------------

$lang['module_name_tags'] = '标签';
$lang['module_desc_tags'] = '显示相册标签库';

$lang['stuffs_tags_default_display'] = '显示标签方式';
$lang['stuffs_tags_cloud'] = '标签云';
$lang['stuffs_tags_letters'] = '按照字母分类排序';
$lang['stuffs_tags_cumulus'] = '使用cumulus的模式(必须安装插件<a href="http://piwigo.org/ext/extension_view.php?eid=263 " target="_blank">Cumulus Tags Cloud</a>)';

//------------------------------------------------------------------------------
//              Module Most Visited
//------------------------------------------------------------------------------

$lang['module_name_mostvisited'] = '访问量最大';
$lang['module_desc_mostvisited'] = '在相册或分类页中显示访问量最大的N个图片';

$lang['stuffs_mv_nb_images'] = '显示图片的最大数量';
$lang['stuffs_mv_category_display'] = '在根分类页中显示';
$lang['stuffs_mv_all_cats'] = '所有分类页中显示';
$lang['stuffs_mv_w_thumb'] = '带缩略图的分类';
$lang['stuffs_mv_wo_thumb'] = '没有缩略图的分类';
$lang['stuffs_mv_selected_cats'] = '已选择的分类';

$lang['stuffs_mv_cat_selection'] = '选择分类';
$lang['stuffs_mv_hold_ctrl'] = '按住CTRL键';

//------------------------------------------------------------------------------
//              Module Best Rated
//------------------------------------------------------------------------------

$lang['module_name_bestrated'] = '投票最高';
$lang['module_desc_bestrated'] = '在相册或分类页中显示投票最高的N个图片';

//------------------------------------------------------------------------------
//              Module Recent
//------------------------------------------------------------------------------

$lang['module_name_recent'] = '最新图片';
$lang['module_desc_recent'] = '在相册或分类页中显示最新的N个图片(如果存在的话)';

//------------------------------------------------------------------------------
//              Module Random
//------------------------------------------------------------------------------

$lang['module_name_random'] = '随机图片';
$lang['module_desc_random'] = '在相册或分类页中显示N个随机图片';

//------------------------------------------------------------------------------
//              Module Citation
//------------------------------------------------------------------------------

$lang['module_name_citation'] = '随机引用';
$lang['module_desc_citation'] = '显示一个随机引用(也可以作为为不同语言设置不同内容的自定义组件)';
$lang['module_Citation_lang'] = '语言';
$lang['module_Citation_code'] = '相关代码';

//------------------------------------------------------------------------------
//              Module Featured Photos
//------------------------------------------------------------------------------

$lang['module_name_featuredphotos'] = '推荐图片';
$lang['module_desc_featuredphotos'] = '显示网站管理员收藏的图片';

?>