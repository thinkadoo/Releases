<?php

require_once('tbs_class.php');
require_once('tbs_plugin_cache.php');
require_once('Database.php');

$FileName = 0;

function write($buffer)
{
    global $FileName;

    $newpage = str_replace("{greeting}", "You Rock", $buffer);

    $filename = ( __DIR__ . '/../html/' . $FileName . '.html');
    $fp = fopen($filename, 'w+');
    fwrite($fp, $newpage);
    fclose($fp);

    return ($newpage);
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

$cnx_id = mysql_connect('localhost','root','root');
mysql_select_db('musicbrainz',$cnx_id);

$sql_ok = ( isset($cnx_id) && is_resource($cnx_id) ) ? 1 : 0;
if ($sql_ok==0) $cnx_id = 'clear';

$fileName = "index";

$TBSindex = new clsTinyButStrong;

$TBSindex->PlugIn(TBS_INSTALL, TBS_CACHE, '../html/', '*.html');
$TBSindex->PlugIn(TBS_CACHE, $fileName, 0);

$TBSindex->LoadTemplate('template.html');

$TBSindex->MergeBlock('blk1',$cnx_id,'SELECT * FROM mb_releases');

$TBSindex->Show();

$buffer = ob_get_contents();
write($buffer);
ob_clean();

echo $buffer;

ob_end_flush();