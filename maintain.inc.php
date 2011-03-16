<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

function plugin_install()
{
  global $prefixeTable, $conf;

  $query = 'SHOW TABLES LIKE "' . $prefixeTable . 'stuffs"';
  $result = pwg_query($query);
  if (!mysql_fetch_row($result))
  {
    $q = 'CREATE TABLE `' . $prefixeTable . 'stuffs` (
`id` smallint(5) NOT NULL,
`pos` smallint(5) NOT NULL,
`name` text NOT NULL,
`descr` varchar(255) default NULL,
`path` varchar(255) default NULL,
`datas` longtext default NULL,
`users` varchar(255) default NULL,
`groups` varchar(255) default NULL,
`level` TINYINT( 3 ) NOT NULL default "0",
`show_title` enum(\'true\',\'false\') NOT NULL,
`on_home` enum(\'true\',\'false\') NOT NULL,
`on_root` enum(\'true\',\'false\') NOT NULL,
`on_cats` enum(\'true\',\'false\') NOT NULL,
`on_picture` enum(\'true\',\'false\') NOT NULL,
`id_line` varchar(1) default NULL,
`width` smallint(9) default NULL,
PRIMARY KEY  (`id`),
KEY `on_home` (`on_home`),
KEY `on_cats` (`on_cats`),
KEY `on_picture` (`on_picture`)
) DEFAULT CHARSET=utf8;';
    pwg_query($q);
  
    $q = "INSERT INTO `" . $prefixeTable . "stuffs` (`id`, `pos`, `name`, `datas`, `users`, `show_title`, `on_home`, `on_cats`, `on_picture`) 
VALUES (0, 1, 'MainBlock', '".addslashes(serialize(true))."', 'guest,generic,normal,admin,webmaster', 'true', 'true', 'true', 'true');";
    pwg_query($q);
  }

  if (!isset($conf['PWG_Stuffs']))
  {
    $config = array(
      'level_perm' => false,
      'group_perm' => false,
      'user_perm' => false,
    );

    $query = 'INSERT INTO ' . CONFIG_TABLE . ' (param,value,comment)
VALUES ("PWG_Stuffs" , "'.pwg_db_real_escape_string(serialize($config)).'" , "PWG Stuffs plugin configuration");';
    pwg_query($query);
  }
}

function plugin_uninstall()
{
  global $prefixeTable;

  $q = 'DROP TABLE ' . $prefixeTable . 'stuffs;';
  pwg_query($q);

	$q = 'DELETE FROM ' . CONFIG_TABLE . ' WHERE param="PWG_Stuffs";';
  pwg_query($q);
}

?>