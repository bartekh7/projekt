<?php

	session_start();

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
		$email = $_POST['email'];
		$haslo2 = md5($_POST['haslo2']);
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
		$haslo2 = htmlentities($haslo2, ENT_QUOTES, "UTF-8");
		$email = htmlentities($email, ENT_QUOTES, "UTF-8");
		
		if($haslo != $haslo2)
		{
			$_SESSION['zlehaslo'] = '<span style="color:red"> Podaj takie same hasła! </span>';
			header("Location:rejestracja.php");
			exit;
			
		}
		
		$sql = "SELECT login FROM uzytkownicy WHERE login='$login'"; /*sprawdza czy login istnieje*/
		$sql2 = "SELECT email FROM uzytkownicy WHERE email='$email'"; /* sprawdza czy email istinieje*/
		$add = "INSERT INTO uzytkownicy (login, haslo, email) VALUES ('$login', '$haslo', '$email')"; /*dodaje dane*/
			
		if ($rezultat = @$polaczenie->query($sql))
		{
			$ilelog = $rezultat->num_rows;
			if ($ilelog>0)
			{			
				$_SESSION['bladlogin'] = '<span style="color:red"> Podany login istnieje! </span>';
				header('Location:rejestracja.php');
			} 
			else 
			{
				
				$flaga_uz = true;
			}
		}
		
		if ($rezultatm = @$polaczenie->query($sql2))
		{
			$ilemail = $rezultatm->num_rows;
			if ($ilemail>0)
			{			
				$_SESSION['bladmail'] = '<span style="color:red"> Podany mail istnieje! </span>';
				header('Location:rejestracja.php');
			} 
			else 
			{
				
				$flaga_mail = true;
			}
		}
		
		if($flaga_uz && $flaga_mail)
		{
			if (@$polaczenie->query($add))
				{
					$_SESSION['goodreg'] = '<span style="color:green"> Dziękujemy za rejestrację! </span>';
					header('Location: logowanie.php');				
				} 
				else 
				{
					echo "Error: " . $add . "<br>" . $polaczenie->error;
				}
		}
		$polaczenie->close();
	}

?>