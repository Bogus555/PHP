<!DOCTYPE html>
<html>
<head>
	<title>Obliczanie BMI</title>
	<meta charset="UTF-8">
</head>
<style>
	
	html{
		height: 100%;
	}
	
	body
	{
	background: #cedce7; /* Old browsers */
	background: -moz-linear-gradient(top, #cedce7 0%, #596a72 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top, #cedce7 0%,#596a72 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom, #cedce7 0%,#596a72 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cedce7', endColorstr='#596a72',GradientType=0 ); /* IE6-9 */
	}
	
	p{
		text-align: center;	
	}	
	
	
	h1{
		text-align: center;
		margin-top: 50px;
		font-size: 50px;
	}
	
</style>
<body>

<?php
	
	$a=$_POST["a"];
	$b=$_POST["b"];
	
	$c=$b/($a*$a);
	$BMI=round($c,2);
	
?>
	<h1>Oblicz swoje BMI!</h1>
	
	<p><?php echo "Twój wskaźnik zapotrzebowania kalorycznego wynosi: ", $BMI; ?></p>
	<p>
	<?php 
		
		if($BMI<=16.0){
			echo "Jesteś wygłodzony (grozi śmiercią).";
		}
		else if($BMI>=16.0&&$BMI<=17.0){
			echo "Jesteś wychudzony.";
		}
		else if($BMI>=17.0&&$BMI<=18.5){
			echo "Masz niedowagę.";
		}
		else if($BMI>=18.5&&$BMI<=25.0){
			echo "Twoja waga jest prawidłowa.";
		}
		else if($BMI>=25.0&&$BMI<=30.0){
			echo "Masz nadwagę.";
		}
		else if($BMI>=30.0&&$BMI<=35.0){
			echo "Masz I stopień otylości.";
		}
		else if($BMI>=35.0&&$BMI<=40.0){
			echo "Masz II stopień otyłości.";
		}
		else if($BMI>=40.0){
			echo "Masz skrajną otyłość (grozi śmiecią).";
		}
		
	?>
	</p>
</body>
</html>