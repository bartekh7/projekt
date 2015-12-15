<?php

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
		$id = $_POST['id'];
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
				
		$polecenie1 = "SELECT id FROM `poziomy` WHERE nazwa='$poziom'";
		$polecenie2 = "SELECT id FROM `kategorie` WHERE nazwa='$kategoria'";
		
		$update  = "UPDATE `przepisy`.`przepisy` SET `nazwa` = '$nazwa', `przepis` = '$sposob', `kategoriaid` = ('$polecenie2'), `poziomid` = ('$polecenie1'), `czas` = '$czas' WHERE `przepisy`.`id` = $id";
		
		if ($polaczenie->query($update))
				{
					header('Location:przepisy_szukaj.php');		
				} 
				else 
				{
					echo "Error: " . $update . "<br>" . $polaczenie->error;
				}
		$polaczenie->close();
	}
	?>