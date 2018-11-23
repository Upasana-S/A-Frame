<?php

	extract($_GET);
	$str=file_get_contents("credentials.json");
	$arr=json_decode($str ,true);
	if(array_key_exists($user,$arr))
	{
		
		if($arr[$user]==$pwd)
		{
			echo "1";
		}
		else
		{
			echo "0";
		}
	}
	else
	{
		echo "0";
	}

?>
