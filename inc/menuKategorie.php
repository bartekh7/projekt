<?php

require_once "connect.php";

$polaczenie = @new  mysqli($host, $dbuser, $dbpass, $dbname);

$sql = "SELECT * FROM  kategorie ORDER BY  nazwa ASC";

$result = $polaczenie->query($sql);

while($row = $result->fetch_row()) {
	echo '<div class="option2">
			<a style="text-decoration:none;" href="?kategoria='.$row[0].'">
					'.$row[1].'</a><br> 
				</div>';
}



?>