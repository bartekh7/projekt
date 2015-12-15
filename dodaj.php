﻿<?php

	session_start();

	require_once "connect.php";

	$polaczenie = @new  mysqli($host, $dbuser, $dbpass, $dbname);
	$polaczenie->set_charset("utf8");
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
		
	}
	else
	{
		$nazwa = $_POST['nazwa'];
		$sposob = ($_POST['sposob']);
		$kategoria = $_POST['kategoria'];
		$poziom = ($_POST['poziom']);
		$czas = ($_POST['czas']);
		
		$nazwa = htmlentities($nazwa, ENT_QUOTES, "UTF-8");
		$sposob  = htmlentities($sposob , ENT_QUOTES, "UTF-8");
		$kategoria= htmlentities($kategoria, ENT_QUOTES, "UTF-8");
		$poziom= htmlentities($poziom, ENT_QUOTES, "UTF-8");
		$czas= htmlentities($czas, ENT_QUOTES, "UTF-8");
		
		$id = $_SESSION['id'] ;
		
		
		$polecenie1 = "SELECT id FROM `poziomy` WHERE nazwa='$poziom'";
		$polecenie2 = "SELECT id FROM `kategorie` WHERE nazwa='$kategoria'";
		
		
		$add = "INSERT INTO `przepisy`.`przepisy` (`id`, `nazwa`, `przepis`, `userid`, `kategoriaid`, `poziomid`, `czas`) VALUES (NULL, '$nazwa', '$sposob', $id, ($polecenie2),  ($polecenie1) , '$czas')";
		
		
		if ($polaczenie->query($add))
				{
					$_SESSION['dodano'] = '<span style="color:black"> Dodałeś nowy przepis! </span>';
					header('Location:moje.php');		
				} 
				else 
				{
					echo "Error: " . $add . "<br>" . $polaczenie->error;
				}
		$polaczenie->close();
	}
	