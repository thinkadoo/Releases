<?php

require_once('tbs_class.php');
require_once('tbs_plugin_cache.php');
require_once('database.php');

$FileName = 0;
$fileName = 0;

function write($buffer)
{
    global $FileName;

    $filename = ( __DIR__ . '/../html/' . $FileName . '.html');
    $fp = fopen($filename, 'w+');
    fwrite($fp, $buffer);
    fclose($fp);

    $FileName = 0;

    //return ($newpage);
}

$htmlFolderLocation = __DIR__ . '/../html/';

if (is_dir($htmlFolderLocation))
{
    @rmdir($htmlFolderLocation);
}else
{
    @mkdir($htmlFolderLocation);
}

ob_start();

$databaseToArray = new DataBase('localhost', 'root', 'root', 'musicbrainz', 'mb_releases', 30000);
$resultArray = $databaseToArray->getArray();

for($i=0; $i<count($resultArray); $i++)
{
    $album = $resultArray[$i];

    $FileName = $album['id'];

    $TBS = new clsTinyButStrong;

    $TBS->LoadTemplate('detail.html');

    $TBS->Show();

    $buffer = ob_get_contents();
    write($buffer);
    ob_clean();
}

function createDistrictIndex($districtID, $genratedFileName)
{
	global $fileName;

	$cnx_id = mysql_connect('localhost','root','root');
	mysql_select_db('musicbrainz',$cnx_id);

	$sql_ok = ( isset($cnx_id) && is_resource($cnx_id) ) ? 1 : 0;
	if ($sql_ok==0) $cnx_id = 'clear';

	$fileName = $genratedFileName;

	$TBSindex = new clsTinyButStrong;

	$TBSindex->PlugIn(TBS_INSTALL, TBS_CACHE, '../html/', '*.html');
	$TBSindex->PlugIn(TBS_CACHE, $fileName, 0);

	$TBSindex->LoadTemplate('template.html');
	
	if($districtID == 10)
	{
		$queryString = 'SELECT * FROM mb_releases';
	}else{
		
	}
	
	$TBSindex->MergeBlock('blk1', $cnx_id , $queryString );

	$TBSindex->Show();

	$buffer = ob_get_contents();
	write($buffer);
	ob_clean();
	
}

	
createDistrictIndex(10,"index");




echo "DONE!";
echo "<br>";
echo '<a href = "../html/index.html">Here is the index file</a> ';
//echo $buffer;

ob_end_flush();