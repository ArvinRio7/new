<?php

session_start();

if (isset($_REQUEST['upload'])) {
	$addlyrics = simplexml_load_file('files/addsong.xml');
	$Lyric = $addlyrics->addChild('Lyric');

	$Lyric->addChild('Song', $_REQUEST['Song_No']);
	$Lyric->addChild('Title', $_REQUEST['Song_title']);
	$Lyric->addChild('SongBy', $_REQUEST['Song_By']);
	$Lyric->addChild('Date', $_REQUEST['Song_date']);
	$Lyric->addChild('Lyrics', $_REQUEST['Song_Lyrics']);

	$dom = new DomDocument();
	$dom->preserveWhiteSpace = false;
	$dom->formatOutput = true;
	$dom->loadXML($addlyrics->asXML());
	$dom->save('files/addsong.xml');

	$_SESSION['message'] = "Lyrics Sucessfully Posted";
	header("location: upload.php");
}

else{
	$_SESSION['message'] = "Fill u the form properly";
	header("location: upload.php");
}

?>