<?php 
	header("Cache-Control: no-cache"); 
	$data = $_POST['data'];
	$file = $_POST['file'];
	$hiddenFormsData = $_POST['hiddenForms'];
	$hiddenFormsFile = 'hiddenForms.html';

	$fh = fopen($file, 'w');
	fwrite($fh, $data);
	fclose($fh);

	$formsFile = fopen($hiddenFormsFile, 'w');
	fwrite($formsFile, $hiddenFormsData);
	fclose($formsFile);

?>
