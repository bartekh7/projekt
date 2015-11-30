<?php

if (isset($_SESSION['zalogowany']))
{
	echo "<p>Witaj ".$_SESSION['login']. "!</p>"; 
	echo '<p> <a href="moje.php"> Moje przepisy!   </a> ';
	echo '|  <a href="logout.php">Wyloguj się!</a> </a> </p>';
}
else
{
	echo '
		<form action="zaloguj.php" method="post">
		
			Login:&nbsp;&nbsp; <input type="text" name="login" />
			&nbsp;&nbsp;Hasło:&nbsp;&nbsp; <input type="password" name="haslo"/>		
					
		<br><br>
			<input type="submit" value="Zaloguj" style="width:140px;">
		<br>

			Nie posiadasz konta? 
			<a  href="rejestracja.php" class="loglink" > 
				<i>Zarejestruj się!</i> 
			</a>
			
		</form>';
}
?>