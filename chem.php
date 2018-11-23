<?php
	//send json data
	$res=array();
	extract($_GET);

	$file=fopen("data.json","r");
	
	$data=fread($file,filesize("data.json")); 
	$array = explode("\n", file_get_contents('data.json'));
	
	//echo gettype($array);
	//echo gettype($array[1]);
	$js=json_decode($array[$element]);
	$jsele=json_encode($js);
	echo $array[$element];

?>