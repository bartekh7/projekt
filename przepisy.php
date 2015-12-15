<?php

	session_start();
	
	if (isset($_SESSION['zalogowany']))
	{
		header('Location: przepisy_zal.php');
		exit();
	}
?>


<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title> Przepisy kulinarne </title>
	<meta name="description" content "Lista najwspanialszych przepisów kulinarnych ever :D" />
	<meta name="keywords" content "przepisy kulinarne, najlepsze potrawy, przepisy"  />
	<meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1" />

	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Inconsolata:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	
</head>

<body>

	<div id="mainpack">
	
		<div class="mail"> 
			<a href="https://mail.google.com/mail/?shva=1#inbox" class="medialinki" target="_blank">
				<i class="icon-mail"></i>
			</a>
		</div>
				
		<div class="fb"> 
		<a href="https://www.facebook.com/" class="medialinki" target="_blank">
			<i class="icon-facebook"></i>
		</a>
		</div>
				
		<div class="tt">
		<a href="https://twitter.com/" class="medialinki" target="_blank">
			<i class="icon-twitter"></i>
		</a>
		</div>
		<div class="wisielec">
		<a href="gra/szubienicamenu.html" class="medialinki" target="_blank" title="Wisielec - zagraj w grę">
			<b>W</b>
		</a>
		</div>
			
		<div id="login">
		
		<?php

				include('inc/menu2.php');
	
		?>
				
		</div>
		<div style="clear:both"></div>
		
		<?php include('inc/menu.php'); ?>
		
		<div id="searchname">
			Znajdź przepis
		</div>
		
		<div id="searchfield">
		<form action="mojeniezal.php" method="post">
			<input type="text" name="pole" size=70 placeholder="Wpisz szukany przepis" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<input type="submit" value="Szukaj" style="width:150px;" />
			</form>
		</div>
		
		<div style="clear:both"></div>	
		
		<div id="mainpage">
			<img src="img/powitanie.png" />
		</div>
		
		<div id="stopka">
			<div class="footer">
				2015 &copy; Copyright by BHandGL 
		</div>
		
	</div>
	
</body>

</html>