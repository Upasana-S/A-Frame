<?php
	extract($_GET);
	$chunk=200;
	$pos=$count*$chunk;
	$file=fopen("reactions_opt.html","r");
	fseek($file,$pos);
	$data=fread($file,$chunk);
	echo $data;
?>
