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
		
		$komentarz = $_POST['komentarz'];
		$przepisid = ($_POST['id']);
		//$userid = $_POST['user'];
		
		
		$komentarz = htmlentities($komentarz, ENT_QUOTES, "UTF-8");
		$przepisid  = htmlentities($przepisid , ENT_QUOTES, "UTF-8");
		//$kategoria= htmlentities($kategoria, ENT_QUOTES, "UTF-8");
		
		$id = $_SESSION['id'] ;
			
		
		$add = "INSERT INTO komentarze (`id`, `komentarz`, `userid`, `przepisid`) VALUES (NULL, '$komentarz' , $id, '$przepisid')";
		
		
		if ($polaczenie->query($add))
				{
					//$_SESSION['dodano'] = '<span style="color:black"> Dodałeś nowy przepis! </span>';
					header('Location:przepisy_kategorie.php');		
				} 
				else 
				{
					echo "Error: " . $add . "<br>" . $polaczenie->error;
				}
		$polaczenie->close();
	}
	