<?php
	extract($_GET);
	$num=1;
	if($level=="easy")
	{
		$num=rand(1,60);
		if($num%3==2)
		{
			$num-=1;
		}
		else if($num%3==0)
		{
			$num-=2;
		}
	}
	else if($level=="medium")
	{
		$num=rand(61,120);
		if($num%3==2)
		{
			$num-=1;
		}
		else if($num%3==0)
		{
			$num-=2;
		}
	}
	else if($level=="hard")
	{
		$num=rand(121,150);
		if($num%3==2)
		{
			$num-=1;
		}
		else if($num%3==0)
		{
			$num-=2;
		}
	}
	$i=1;
	$file=fopen("database/balanced_equations.txt","r");
	while($i < $num)
	{
		fgets($file);
		$i++;
	}
	$line=fgets($file);
	#$line= substr($line,0,-3);
	$retarr=array();
	$retarr["equation"]=$line;
	$retarr["eqnum"]=$num;
	echo json_encode($retarr);
?>
