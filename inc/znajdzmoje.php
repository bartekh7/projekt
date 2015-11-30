<?php

session_start();

require_once "connect.php";

$polaczenie = @new  mysqli($host, $dbuser, $dbpass, $dbname);

$sql3 = "SELECT id FROM  uzytkownicy WHERE login='$login'";
$znajdz = "SELECT nazwa, przepis, czas, poziomid, kategoriaid FROM przepisy WHERE userid='$sql3' ORDER BY  nazwa ASC";

if ($rezultat = @$polaczenie->query($znajdz))
		{
			$ileprzepisów = $rezultat->num_rows;
			if ($ileprzepisów>0)
			{			
				$_SESSION['przepis'] = true;
			} 
			else
			{
				exit;
			}
		}
?>