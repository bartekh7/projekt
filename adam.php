<?php

	session_start();
	
	
?>


<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title> Kategorie </title>
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
			<input type="text" name="searchin" size=70  placeholder="Wpisz szukany przepis" />
		</div>
		
		<div class="searchbutton">
			<a href="przepisy_kategorie.php" class="menulink">
				<i class="icon-search"></i> &nbsp;Szukaj
			</a>
		</div>
		
		<div style="clear:both"></div>	
		
		<div class="leftbar">
			
			<div id="title">
				Kategorie
			</div>
			
			<div id="catmenu">
			
				<div class="option2">
					Ciasta i ciastka <br>
				</div>
				
				<div class="option2">
					Dania główne<br>
				</div>
				
				<div class="option2">
					Desery<br>
				</div>
				
				<div class="option2">
					Drinki<br>
				</div>
				
				<div class="option2">
					Makarony<br>
				</div>
				
				<div class="option2">
					Napoje<br>
				</div>
				
				<div class="option2">
					Pizza<br>
				</div>
				
				<div class="option2">
					Potrawy z grilla<br>
				</div>
				
				<div class="option2">
					Potrawy mączne<br>
				</div>
				
				<div class="option2">
					Potrawy mięsne<br>
				</div>
				
				<div class="option2">
					Przetwory<br>
				</div>
				
				<div class="option2">
					Ryby<br>
				</div>
				
				<div class="option2">
					Sosy<br>
				</div>
				
				<div class="option2">
					Zupy<br>	
				</div>
				
			</div>
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