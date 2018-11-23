<?php
	extract($_GET);
	$positions=[0,615,747,750,1740,1493,1653]
	if(count<6){
	$pos+=$positions[count];
	$file=fopen("reactions_opt.html","r");
	fseek($file,$pos);
	$data=fread($file,$positions[count+1])
	echo $pos
	echo $data;}
?>
