<?php
	extract($_GET);
	$file=fopen("database/balanced_equations.txt","r");
	$i=1;
	
	while($i < $eqnum+1)
	{
		fgets($file);
		$i=$i+1;
	}
	$line=fgets($file);
	$line=explode("=", $line);
	$left=explode(" ", $line[0]);
	$right=explode(" ", $line[1]);
	$lcoefs=array();
	$rcoefs=array();
	for($i=0; $i < count($left); $i++)
	{
		if(ctype_alpha($left[$i][0]))
		{
			if($i==0)
			{
				$lcoefs[]="1";
			}
			else if($left[$i-1][0] >= "0" && $left[$i-1][0] <= "9")
			{
				$lcoefs[]=$left[$i-1][0];
				
			}
			else
			{
				$lcoefs[]="1";
				
			}
		}
		
	}
	
	for($i=0; $i < count($right); $i++)
	{
		if(ctype_alpha($right[$i][0]))
		{
			if($i==0)
			{
				$rcoefs[]="1";
			}
			else if($right[$i-1][0] >= "0" && $right[$i-1][0] <= "9")
			{
				$rcoefs[]=$right[$i-1][0];
			}
			else
			{
				$rcoefs[]="1";
			}
		}
	}
	
	#function get_atoms($lcoefs, $rcoefs)
	#{
		
	#}
	$tipl=0;
	$match=1;
	for($i=0; $i < count($lhs); $i++)
	{
		if($lcoefs[$i]-0 != $lhs[$i]-0)
		{
			$tipl+=$lcoefs[$i] - $lhs[$i];
			$match=0;
		}
	}
	$tipr=0;
	for($i=0; $i < count($rhs); $i++)
	{
		if($rcoefs[$i]-0 != $rhs[$i]-0)
		{
			$tipr+=$rcoefs[$i] - $rhs[$i];
			$match=0;
		}
	}
	if($match==1)
	{
		echo "3";
	}
	else
	{
		if($tipr==0 && $tipl == 0)
		{
			echo "4";
		}
		else if($tipr * $tipl < 0)
		{
			if($tipr < 0)
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
			if(abs($tipr) > abs($tipl))
			{
				if($tipr > 0)
				{
					echo "0";
				}
				else
				{
					echo "1";
				}
			}
			else
			{
				if($tipl > 0)
				{
					echo "1";
				}
				else
				{
					echo "0";
				}
			}
		}
			
	}

?>
