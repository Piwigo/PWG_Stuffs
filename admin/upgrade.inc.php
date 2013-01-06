<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

global $prefixeTable, $conf;

$query = 'SHOW FULL COLUMNS FROM '.STUFFS_TABLE.';';
$result = array_from_query($query, 'Field');
if ($result[5] == 'params')
{
  $query = 'ALTER TABLE '.STUFFS_TABLE.'
MODIFY COLUMN name TEXT CHARACTER SET utf8 NOT NULL,
MODIFY COLUMN descr VARCHAR(255) CHARACTER SET utf8 default NULL,
MODIFY COLUMN type VARCHAR(255) CHARACTER SET utf8 NOT NULL,
MODIFY COLUMN params VARCHAR(255) CHARACTER SET utf8 default NULL,
MODIFY COLUMN datas LONGTEXT CHARACTER SET utf8 default NULL,
MODIFY COLUMN users VARCHAR(255) CHARACTER SET utf8 default NULL,
MODIFY COLUMN groups VARCHAR(255) CHARACTER SET utf8 default NULL,
DEFAULT CHARACTER SET utf8,
ADD show_title ENUM(\'true\',\'false\') NOT NULL,
ADD on_home ENUM(\'true\',\'false\') NOT NULL,
ADD on_cats ENUM(\'true\',\'false\') NOT NULL,
ADD on_picture ENUM(\'true\',\'false\') NOT NULL,
ADD id_line VARCHAR(1) default NULL,
ADD width SMALLINT(9) default NULL,
ADD INDEX (on_home),
ADD INDEX (on_cats),
ADD INDEX (on_picture);';

  pwg_query($query);
  
  $query = 'SELECT id, name, type, params, datas FROM '.STUFFS_TABLE.';';
  $result = pwg_query($query);
  
  $modules = array();
  while ($row = pwg_db_fetch_assoc($result))
  {
    if ($row['name'] != 'MainBlock')
    {
      $array = array();
      foreach (explode('///', $row['name']) as $name)
      {
        $a = explode(':', $name);
        array_push($array, '[lang='.substr($a[0],0,2).']'.$a[1].'[/lang]');
      }
      $new_name = implode("\r\n", $array);
    }
    else
    {
      $new_name = 'MainBlock';
    }

    if ($row['type'] == 'LastComs')
    {
      $datas = unserialize($row['datas']);
      $row['datas'] = serialize(array($datas[0], $datas[1], $datas[6], $datas[2], $datas[3]));
    }
  
    $params = explode(',', $row['params']);
    $params[4] = !empty($params[4]) ? '"'.$params[4].'"' : 'NULL';
    $params[5] = !empty($params[5]) ? $params[5] : 'NULL';

    $query = 'UPDATE ' . $prefixeTable . 'stuffs
SET
  name = "'. $new_name . '",
  datas = "' . addslashes($row['datas']) . '",
  show_title = "'. ($params[0] ? 'true' : 'false') .'",
  on_home = "'. ($params[1] ? 'true' : 'false') .'",
  on_cats = "'. ($params[2] ? 'true' : 'false') .'",
  on_picture = "'. ($params[3] ? 'true' : 'false') .'",
  id_line = '. $params[4] .',
  width = '. $params[5] .'
WHERE id = '.$row['id'].';';

    pwg_query($query);
  }

  $query = 'ALTER TABLE '.STUFFS_TABLE.' DROP params;';
  pwg_query($query);

  if (isset($conf['Stuffs']))
  {
    $q = 'DELETE FROM ' . CONFIG_TABLE . ' WHERE param="Stuffs" LIMIT 1;';
    pwg_query($q);
  }
}

$query = 'SHOW FULL COLUMNS FROM '.STUFFS_TABLE.';';
$result = array_from_query($query, 'Field');
if ($result[4] != 'path')
{
  $path = $plugin['id'];
  $conf['Stuffs'] = array();

  $query = 'ALTER TABLE '.STUFFS_TABLE.'
CHANGE `type` `path` VARCHAR( 255 ) NULL DEFAULT NULL,
ADD `level` TINYINT( 3 ) NOT NULL default "0" AFTER `groups`,
ADD `on_root` enum(\'true\',\'false\') NOT NULL AFTER `on_home`
;';
  pwg_query($query);

  $query = 'UPDATE '.STUFFS_TABLE.'
SET on_root = "false"
WHERE on_cats <> "true"
;';
  pwg_query($query);

  $query = 'SELECT * FROM '.STUFFS_TABLE.';';
  $result = pwg_query($query);

  while ($row = pwg_db_fetch_assoc($result))
  {
    if ($row['path'] == 'Personal')
    {
      $data = unserialize($row['datas']);
      $row['datas'] = serialize($data[0]);
    }
    if ($row['path'] == 'piclenswall')
    {
      $row['path'] = PHPWG_PLUGINS_PATH.'piclens/stuffs_module/';
    }
    elseif ($row['path'] != 'MainBlock')
    {
      $row['path'] = PHPWG_PLUGINS_PATH.$path.'/modules/'.$row['path'].'/';
    }
    else
    {
      // Main Block
      $row['path'] = null;
      if (!empty($row['datas']))
      {
        $data = unserialize($row['datas']);
        $row['datas'] = serialize(!$data['hide']);
      }
      else
      {
        $row['datas'] = serialize(true);
      }
    }

    $query = 'UPDATE '.STUFFS_TABLE.'
SET path = '.(is_null($row['path']) ? 'NULL' : '"'.$row['path'].'"').',
    datas = "'.addslashes($row['datas']).'"
WHERE id = '.$row['id'].'
;';
    pwg_query($query);
  }

  $conf['Stuffs']['level_perm'] = false;

  $query = 'SELECT id
FROM '.STUFFS_TABLE.'
WHERE users <> "guest,generic,normal,admin,webmaster"
;';
  $ids = array_from_query($query, 'id');
  $conf['Stuffs']['user_perm'] = !empty($ids);

  $query = 'SELECT id
FROM '.STUFFS_TABLE.'
WHERE groups IS NOT NULL
;';
  $ids = array_from_query($query, 'id');
  $conf['Stuffs']['group_perm'] = !empty($ids);

  $query = 'INSERT INTO ' . CONFIG_TABLE . ' (param,value,comment)
VALUES ("PWG_Stuffs" , "'.pwg_db_real_escape_string(serialize($conf['Stuffs'])).'" , "PWG Stuffs plugin configuration");';
  pwg_query($query);
}

?>