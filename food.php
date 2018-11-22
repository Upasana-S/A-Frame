<?php
	var res=array();
	extract($_GET);
	if($fname=="pizza"){
		$res["cs"]="Italian";
		$res["price"]="300";
		$res["veg"]="veg";
	}
	else if($fname=="cornflakes"
		$res["cs"]="Cereal";
		$res["price"]="500";
		$res["veg"]="veg";
	}
	else if($fname=="dosa"
		$res["cs"]="South Indian";
		$res["price"]="150";
		$res["veg"]="veg";
	}

//send output as json
//convert a php array to json using json_encode

	$ret=json_encode($res);
	echo $ret


?>

