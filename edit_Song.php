<?php

session_start();

if (isset($_REQUEST['edit_Song'])) {
	$addlyrics = simplexml_load_file('files/addsong.xml');
	
	$index = 0;
	$i = 0;

	foreach ($addlyrics->Lyric as $Lyric) {

		if($Lyric->Song = $_POST['Song_No']) {
			$Lyric->Title = $_POST['Song_title'];
			$Lyric->SongBy = $_POST['Song_By'];
			$Lyric->Date = $_POST['Song_date'];
			$Lyric->Lyrics = $_POST['Song_Lyrics'];
			$index = $i;
			break;
		}
		$i++;
	}
	file_put_contents('files/addsong.xml',$addlyrics->asXML());
	$_SESSION['message'] = 'Song Successfully Updated';
	header("location:upload.php");
}
else {
	$_SESSION['message'] = 'Select song to edit first';
	header("location:upload.php");
}


?>