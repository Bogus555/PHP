<!DOCTYPE >
<html>
<head>
	<title>BMI</title>
	<meta charset="UTF-8">
</head>
<style>
	
	body
	{
	height: 100%;
	background: #cedce7; /* Old browsers */
	background: -moz-linear-gradient(top, #cedce7 0%, #596a72 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top, #cedce7 0%,#596a72 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom, #cedce7 0%,#596a72 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cedce7', endColorstr='#596a72',GradientType=0 ); /* IE6-9 */
	}
	
	h1
	{
		text-align: center;
		margin-top: 50px;
		font-size: 50px;
	}
	
	form
	{
		text-align: center;
		font-size: 20px;
	}
	
	input
	{
		margin: 10px;
	}
	
</style>
<body>

	<h1>Oblicz swoje BMI!</h1>
	
	<form action="wyliczenia.php" metod="post" >
	Podaj swój wzrost:
	<input type="text" name="a" />
		<br>
	Podaj swoją wage:
	<input type="text" name="b" />
		<br>
	<input type="submit" value="Zatwierdź" />
	</form>

</body>
</html>