<?php
require_once "connect.php";

$polaczenie = @new  mysqli($host, $dbuser, $dbpass, $dbname);

$sql = "SELECT * FROM  kategorie ORDER BY  nazwa ASC";

$result = $polaczenie->query($sql);

$n = 1;

while($row = $result->fetch_row()) {

				
				if($n == 1) {
					echo '<div class="bocznykafelekl">
				<a style="text-decoration:none;" href="?kategoria='.$row[0].'">
					'.$row[1].'<br>
				<img src="img/'.$row[2].'" /></a>
			</div>';
			$n++;
				}
				else if($n == 2) {
					echo '<div class="srodkowykafelek">
				<a style="text-decoration:none;" href="?kategoria='.$row[0].'">
					'.$row[1].'<br>
				<img src="img/'.$row[2].'" /></a>
			</div>';
			$n++;
				}
				else if($n == 3) {
					echo '<div class="bocznykafelekr">
				<a style="text-decoration:none;" href="?kategoria='.$row[0].'">
					'.$row[1].'<br>
				<img src="img/'.$row[2].'" /></a>
			</div><div style="clear:both"></div>';
				$n = 1;}
}



?>