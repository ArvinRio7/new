<?php

session_start();
$Song = $_REQUEST['Song'];

$addlyrics = simplexml_load_file('files/addsong.xml');
$index = 0;
$i = 1;

foreach ($addlyrics->Lyric as $Lyric) {

	if($Lyric->Song = $Song) {
		$index = $i;
		break;
	}
	$i++;
}

unset($addlyrics->Lyric[$index]);
file_put_contents('files/addsong.xml',$addlyrics->asXML());

$_SESSION['message'] = 'Song Successfully Deleted';
header("location:upload.php");

?>