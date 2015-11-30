<?php

require_once "connect.php";

$polaczenie = @new  mysqli($host, $dbuser, $dbpass, $dbname);

$id = $_SESSION['id'] ;

$sql = "SELECT nazwa, przepis FROM  przepisy WHERE userid='$id' ORDER BY  nazwa ASC";

$result = $polaczenie->query($sql);

/*$ileprzep = $result->num_rows;
			if($ileprzep>0)
			{				
				$wiersz = $result->fetch_assoc();
				$_SESSION['nazwa'] = $wiersz['nazwa'];
				$_SESSION['user'] = $wiersz['user'];*/





	while($row = $result->fetch_row()) {
		echo '<div class="przepisuser">';
		echo '<p><b>  '.$row[0].' </b></p>';
		echo '<p>'.$row[1].'</p><br> 
				</div>';
	
}
?>