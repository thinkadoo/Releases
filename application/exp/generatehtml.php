<?php

require_once('tbs_class.php');
require_once('tbs_plugin_cache.php');

require_once 'Database.php'; 

    $databaseToArray = new DataBase('localhost', 'root', 'root', 'musicbrainz', 'mb_releases', 30);
    $resultArray = $databaseToArray->getArray();
	array_shift($resultArray);

	$amount = $resultArray[1]['id'];
	
	$task['monday'] = '<cooking>';
	
	$album = $resultArray[5];

	class clsObj {
		var $param = 'hello Andre oooo';
	}
	$obj = new clsObj;
	
	$fileName = "dynamic";


$TBS = new clsTinyButStrong;

$TBS->PlugIn(TBS_INSTALL, TBS_CACHE, '../html/', '*.html');
$TBS->PlugIn(TBS_CACHE, $fileName, 0);

$TBS->LoadTemplate('template.htm');

$TBS->MergeBlock('blk2',$resultArray);

$TBS->Show();