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
		
			<?php include('inc/menu2.php'); ?>
				
		</div>
			
		<div style="clear:both"></div>		
		
		<?php include('inc/menu.php'); ?>
		
		<div id="searchname">
			Znajdź przepis
		</div>
		
		<div id="searchfield">
		<form action="szukaj.php" method="post">
			<input type="text" name="pole" size=70 placeholder="Wpisz szukany przepis" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
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
			<?php
			$id = addslashes($_GET['id']);
			
			require_once "connect.php";

			$polaczenie = @new  mysqli($host, $dbuser, $dbpass, $dbname);
			$polaczenie->set_charset("utf8");
			$userid = $_SESSION['id'] ;

			$sql = "SELECT nazwa, przepis, id FROM  przepisy WHERE  id='$id'  LIMIT 1";
			
			$result = $polaczenie->query($sql);
		
			
			while($row = $result->fetch_row()) 
			{
				echo "<h1>$row[0]</h1>";
				echo "<p>$row[1]<p>";
			
			
			?>
			<div id="komentarz">
		<form method="post" action="dodajkomentarz.php">
			<input type="hidden" name="id" value="<?php echo $row[2]; ?>"/>
			<input type="hidden" name="user" value="<?php echo $_SESSION['id'] ; ?>"/>
			<textarea name="komentarz" placeholder="Wpisz treść komentarza..." style="width:716px;" cols="73" rows="10"></textarea>
			<input type="submit" value="Dodaj komentarz"/>
		</form>
		</div>
		</div>
		
		
			<?php
			}
			
			
			?>
		
			
			
		<div style="clear:both"></div>	
				
		<div id="stopka">
			<div class="footer">
				2015 &copy; Copyright by BHandGL 
			</div>
		</div>
		
	</div>
	
</body>

</html>