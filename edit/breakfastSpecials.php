<?php 
	header("Cache-Control: no-cache"); 
	$data = $_POST['data'];

	$myFile = "breakfastSpecials.html";
	$fh = fopen($myFile, 'w');
	fwrite($fh, $data);
	fclose($fh);

?>
