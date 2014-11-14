<?php

$lang['stuffs_mods_management'] = 'ブロックの管理';
$lang['stuffs_add_mod'] = 'ブロックを追加する';
$lang['stuffs_edit_mod'] = 'ブロックを編集';

$lang['stuffs_module_title'] = 'ブロックのタイトル';
$lang['stuffs_desc'] = '概要';
$lang['stuffs_only_for_admin'] = '(管理者用パネルのみ)';
$lang['stuffs_type'] = 'ブロックタイプ';
$lang['stuffs_position'] = '位置';
$lang['stuffs_id_ligne'] = 'ID ライン';
$lang['stuffs_width'] = '幅';
$lang['stuffs_action'] = 'アクション';
$lang['stuffs_edit'] = 'ブロックを変更';
$lang['stuffs_delete'] = 'ブロックを削除';
$lang['stuffs_confirm_delete'] = 'ブロック %sを削除してもよろしいでしょうか？';
$lang['stuffs_main_block'] = 'メインブロック';
/*TODO*/$lang['Hide on home page'] = 'Hide on home page';

$lang['stuffs_add_module'] = '新規ブロックを追加する';
$lang['stuffs_module_config'] = 'ブロックの設定';
$lang['stuffs_visual_config'] = '設定の表示';
$lang['stuffs_module_options'] = 'ブロックのオプション';
$lang['stuffs_authorized_group'] = '認証済みグループ';
$lang['stuffs_authorized_users'] = '認証済みユーザ';
$lang['stuffs_public_module'] = '(パブリックブロックは、空のままとする)';
$lang['stuffs_show_title'] = 'ブロックタイトルを表示';
$lang['stuffs_show_module_on'] = '表示するブロック :';
$lang['stuffs_show_on_home'] = 'メインページに';
$lang['stuffs_show_on_root'] = '（親子関係の）トップのカテゴリページに';
$lang['stuffs_show_on_cats'] = '全てのカテゴリページに';
$lang['stuffs_show_on_picture'] = '写真ページに';
$lang['stuffs_no_options'] = 'このブロックにはオプションがありません';

/*TODO*/$lang['stuffs_perm'] = 'Activate authorization management:';
$lang['stuffs_group_perm'] = 'グループで';
$lang['stuffs_user_perm'] = 'ユーザ種別で';
$lang['stuffs_level_perm'] = 'プライバシーレベルで';

$lang['stuffs_select_all'] = '全てを選択';
$lang['stuffs_unselect_all'] = '全てを非選択に';

// Infos messages
$lang['stuffs_order_saved'] = '順番が保存されました。';
$lang['stuffs_upgrade_message'] = 'PWG Stuffs プラグインは、名前が変わりました。現在の名前は、"Blocks"です。';

// Errors messages
$lang['stuffs_error_no_mod_selected'] = 'あなたは、どのブロックも選択できません。';
$lang['stuffs_no_name'] = 'ブロックの名前を指定して下さい';
$lang['stuffs_parent_plugin_is_missing'] = 'parentプラグインが有効かされていません。このブロックを削除するか、parentプラグインを再度　有効化して下さい。';
$lang['stuffs_piclens_need_upgrade'] = 'piclensプラグインを更新する必要があります。PWG Stuffは、現在のバージョンのPiclensと互換性がありません。';

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