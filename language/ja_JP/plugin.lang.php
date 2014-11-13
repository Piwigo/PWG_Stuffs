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
$lang['stuffs_authorized_group'] = '認証済みグループ';
$lang['stuffs_authorized_users'] = '認証済みユーザ';
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

$lang['module_name_lastcoms'] = '最新コメント';
$lang['module_desc_lastcoms'] = '最新コメントを表示する';

$lang['lastcoms_no_nb_comments'] = 'あなたは、コメント数を指定する必要があります。';
$lang['lastcoms_config'] = '設定';
$lang['lastcoms_nb_comments'] = '表示コメント数';
$lang['lastcoms_show_buttons'] = '管理ボタンを表示する';
$lang['lastcoms_dim'] = 'サムネイルサイズ';
$lang['lastcoms_width'] = '最大幅';
$lang['lastcoms_height'] = '最大高';
$lang['lastcoms_nb_cadres'] = '1行あたりのフレーム数';
$lang['lastcoms_taille_cadres'] = 'フレーム高';


//------------------------------------------------------------------------------
//              Module Logon
//------------------------------------------------------------------------------

$lang['module_name_logon'] = 'ログイン';
$lang['module_desc_logon'] = 'ログインブロックを表示する';

$lang['logon_remove_menubar_block'] = 'メニューバーより「クイック接続」ブロックを削除する';


//------------------------------------------------------------------------------
//              Module Personal
//------------------------------------------------------------------------------

$lang['module_name_personal'] = 'パーソナルブロック';
$lang['module_desc_personal'] = 'パーソナルブロックを表示する';

$lang['personal_content'] = 'コンテンツ';


//------------------------------------------------------------------------------
//              Module Tags
//------------------------------------------------------------------------------

$lang['module_name_tags'] = 'タグ';
$lang['module_desc_tags'] = 'ギャラリータグを表示する';

$lang['stuffs_tags_default_display'] = 'タグ表示';
$lang['stuffs_tags_cloud'] = 'タグクラウド';
$lang['stuffs_tags_letters'] = '文字でグルーピングする';
$lang['stuffs_tags_cumulus'] = 'カミュラスモードを使用する (プラグイン <a href=http://piwigo.org/ext/extension_view.php?eid=263 target="_blank">カミュラス・タグクラウド</a>をインストールする必要があります)';


//------------------------------------------------------------------------------
//              Module Most Visited
//------------------------------------------------------------------------------

$lang['module_name_mostvisited'] = '最大アクセス';
$lang['module_desc_mostvisited'] = 'ギャラリまたはカテゴリで最もアクセスされた写真 x件を表示する';

$lang['stuffs_mv_nb_images'] = '表示する写真の最大数';
$lang['stuffs_mv_category_display'] = 'カテゴリページに表示する';
$lang['stuffs_mv_all_cats'] = 'すべてのカテゴリ';
$lang['stuffs_mv_w_thumb'] = 'サムネイル付きカテゴリのみ';
$lang['stuffs_mv_wo_thumb'] = 'カテゴリなしサムネイルのみ';
$lang['stuffs_mv_selected_cats'] = '選択したカテゴリのみ';

$lang['stuffs_mv_cat_selection'] = 'カテゴリ選択';
$lang['stuffs_mv_hold_ctrl'] = 'CTRLを保持';

//------------------------------------------------------------------------------
//              Module Best Rated
//------------------------------------------------------------------------------

$lang['module_name_bestrated'] = '最高評価';
$lang['module_desc_bestrated'] = 'ギャラリまたはカテゴリで最高評価された写真 x件を表示する';

//------------------------------------------------------------------------------
//              Module Recent
//------------------------------------------------------------------------------

$lang['module_name_recent'] = '最近の写真';
$lang['module_desc_recent'] = 'ギャラリまたはアルバム内の最近の写真 x 件を表示する（あれば）';

//------------------------------------------------------------------------------
//              Module Random
//------------------------------------------------------------------------------

$lang['module_name_random'] = 'ランダム写真';
$lang['module_desc_random'] = 'ギャラリまたはアルバム内の写真をランダムに x件を表示する';

//------------------------------------------------------------------------------
//              Module Citation
//------------------------------------------------------------------------------

$lang['module_name_citation'] = 'ランダムクオート';
$lang['module_desc_citation'] = 'ランダムクオートを表示する';
$lang['module_Citation_lang'] = '言語';
$lang['module_Citation_code'] = '関連コード';

//------------------------------------------------------------------------------
//              Module Featured Photos
//------------------------------------------------------------------------------

$lang['module_name_featuredphotos'] = '特集写真';
$lang['module_desc_featuredphotos'] = 'ウェブマスタのお気に入り写真を表示する';

$lang['stuffs_mv_recent_period_only'] = '最近の写真のみ表示する';