<?php

	session_start();

	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: logowanie.php');
		exit();
	}
	
	require_once "connect.php";

	$polaczenie = @new  mysqli($host, $dbuser, $dbpass, $dbname);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = md5($_POST['haslo']);
		$haslo2 = md5($_POST['haslo2']);
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
		$haslo2 = htmlentities($haslo2, ENT_QUOTES, "UTF-8");
	
		
		if ($rezultatl = @$polaczenie->query(
		sprintf("SELECT * FROM uzytkownicy WHERE login='%s' AND haslo='%s'",
		mysqli_real_escape_string($polaczenie,$login),
		mysqli_real_escape_string($polaczenie,$haslo))))
		{
			$ilekont = $rezultatl->num_rows;
			if ($ilekont>0)
			{			
				$_SESSION['zalogowany'] = true;
				
				$wiersz = $rezultatl->fetch_assoc();
				$_SESSION['id'] = $wiersz['id'];
				$_SESSION['login'] = $wiersz['login'];
				$_SESSION['email'] = $wiersz['email'];
				

				$rezultatl->free_result();
				header('Location: przepisy.php');
							
			} 
			else 
			{
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: logowanie.php');
			}
			
		}
		$polaczenie->close();
		
	}

?>