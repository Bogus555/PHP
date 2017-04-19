<?php 
	$a=$_POST["a"];
	$b=$_POST["b"];
	$c=$_POST["c"];
	
		$delta=pow($b,2)-4*$a*$c;
	
	if($delta<=0)
	{
		echo "Delta wyszła ujemna i nie posiada rozwiazania";
	}
	
	else if($delta>=0)
	{
		$x1=-$b-sqrt($delta)/(2*$a);
		$x2=$b-sqrt($delta)/(2*$a);
		
		print("x1 = $x1 | x2 = $x2");
	}
	else
	{
		$x=-$b/(2*$a);
		
		print("x = $x");
	}
	
	?>