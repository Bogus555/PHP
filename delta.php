<!DOCTYPE>
<html>
<head>
	<title>Obliczanie delty - PHP</title>
	<meta charset="UTF-8">
</head>
<style>
	
	body{
	background: rgb(240,249,255);
	background: -moz-linear-gradient(top, rgba(240,249,255,1) 0%, rgba(203,235,255,1) 47%, rgba(161,219,255,1) 100%);
	background: -webkit-linear-gradient(top, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%);
	background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f9ff', endColorstr='#a1dbff',GradientType=0 );
	}
	
	h1{
		text-align: center;
		margin-bottom: 30px;
	}
	
	form{
		text-align: center;
	}
	
	p{
		text-align: center;
	}
</style>
<body>
	<h1>Obliczanie delty</h1>

<form action="licz.php" method="post">
	
	Podaj a:
	<input type="text" name="a" />
	
		<br>
		<br>
	
	Podaj b:
	<input type="text" name="b" />
		
		<br>
		<br>
	
	Podaj c:
	<input type="text" name="c" />
	
		<br>
		<br>

	<input type="submit">
</form>
	
	<p>Strona została stworzona przez Jędrzeja Boguszyńskiego</p>
	
</body>
</head>
</html>