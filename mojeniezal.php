<?php

	session_start();
	
	
?>


<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title> Moje przepisy</title>
	<meta name="description" content "Lista najwspanialszych przepisów kulinarnych ever :D" />
	<meta name="keywords" content "przepisy kulinarne, najlepsze potrawy, przepisy"  />
	<meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1" />

	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	
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
			
		<div id="login">
		
			<?php include('inc/menu2.php'); ?>
				
		</div>
			
		<div style="clear:both"></div>		
		
		<?php include('inc/menu.php'); ?>
		
		<div id="searchname">
			Znajdź przepis
		</div>
		
		<div id="searchfield">
		<form action="szukaj.php" method="post">
			<input type="text" name="szukaj" size=70 placeholder="Wpisz szukany przepis" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<input type="submit" value="Szukaj" style="width:150px;" />
			</form>
		</div>
		
		<div style="clear:both"></div>	
		
		<div class="leftbar">
			
			<div id="title">
				Kategorie
			</div>
			
			<div id="catmenu">
			
		<?php include('inc/menuKategorie.php'); ?>
				
			</div>
		</div>
		
		 <div class="rightbar2">
				
				<div id="recipe">
				
					<?php include('szukaj.php'); ?>
				
				</div>
				
				
				
				<br>
			
		</div>
		
		<div style="clear:both"></div>	
				
		<div id="stopka">
			<div class="footer">
				2015 &copy; Copyright by BHandGL 
			</div>
		</div>
		
	</div>
	
</body>

</html>