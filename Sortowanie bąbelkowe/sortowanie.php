<html>
<head>
	<title>Sortowanie bąbelkowe - PHP</title>
	<meta charset="UTF-8">
</head>
<body>

	<?php 
		$tabela[0]=$_POST["a"];
		$tabela[1]=$_POST["b"];
		$tabela[2]=$_POST["c"];
		$tabela[3]=$_POST["d"];
		$tabela[4]=$_POST["e"];
		$tabela[5]=$_POST["f"];
		
		for($i=0; $i<6; $i++)
		{
			for($j=0; $j<5; $j++)
			{
				if($tabela[$j+1]>$tabela[$j])
				{
					$c=$tabela[$j+1];
					$tabela[$j+1]=$tabela[$j];
					$tabela[$j] = $c;
				}
				
			}
		}
		
		for($i=0; $i<6; $i++)
		{
			echo $tabela[$i];
		}
	?>
	
</body>
</html>