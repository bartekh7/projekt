<?php

require_once "connect.php";

$polaczenie = @new  mysqli($host, $dbuser, $dbpass, $dbname);

//$sql = "INSERT INTO `przepisy`.`kategorie` (`id`, `nazwa`, `obrazek`) VALUES (NULL, 'Potrawy mięsne', 'pzmies.png');";
//$result = $polaczenie->query($sql);

$sql = "SELECT * FROM  kategorie ORDER BY  nazwa ASC";

$result = $polaczenie->query($sql);

while($row = $result->fetch_row()) {
	echo '<div class="option2">
			<a style="text-decoration:none;" href="?kategoria='.$row[0].'">
					'.$row[1].'</a><br> 
				</div>';
}



?>