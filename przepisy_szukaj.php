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
		<form action="mojeniezal.php" method="post">
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

			$sql = "SELECT nazwa, przepis FROM  przepisy WHERE userid='$userid' AND id='$id'  LIMIT 1";

			$result = $polaczenie->query($sql);
			while($row = $result->fetch_row()) 
			{
			?>
			<form action="edytuj.php" method="post">
				
					Nazwa: 
					<br> 
					<input type="text" name="nazwa" style="width:600px;" value = "<?php  echo $row[0] ?>" required />
					<br><br>
									
					Sposób przygotowania:
					
					<br>
					<textarea name="sposob" cols="73" rows="15"><?php  echo $row[1] ?></textarea>	
					<br><br>
									
					&nbsp;&nbsp;&nbsp;&nbsp; Kategoria &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Poziom trudności: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Czas[w min]:
					
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp; 
					<select name="kategoria">
						<option value"1">Ciasta i ciastka</option>
						<option value"18">Dania główne</option>
						<option value"3">Desery</option>
						<option value"4">Drinki</option>
						<option value"5">Makarony</option>
						<option value"6">Napoje</option>
						<option value"7">Pizza</option>
						<option value"20">Potrawy mączne</option>
						<option value"21">Potrawy mięsne</option>
						<option value"8">Potrawy z grilla</option>

						<option value"11">Przetwory</option>
						<option value"12">Ryby</option>
						<option value"13">Sosy</option>
						<option value"14">Zupy</option>
					</select>	
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
					<select name="poziom">
						<option value"1">Łatwy</option>
						<option value"2">Średni</option>
						<option value"3">Trudny</option>
					</select>	
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					<select name="czas">
						<option value"15">15</option>
						<option value"30">30</option>
						<option value"45">45</option>
						<option value"60">60</option>
						<option value"75">75</option>
						<option value"90">90</option>
						<option value"105">105</option>
					</select>		
					<br><br>
					
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" value="Edytuj przepis" style="width:140px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
				
				</form>
			<?php
			}
			
			?>

			
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