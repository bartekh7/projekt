<?php



require_once "connect.php";

$polaczenie = @new  mysqli($host, $dbuser, $dbpass, $dbname);

$szukaj= $_POST['searchin'];

header ('Location: mojeniezal.php');

$sql = "SELECT nazwa, przepis FROM  przepisy WHERE nazwa='$searchin' ORDER BY  nazwa ASC";

$results = $polaczenie->query($sql);

while($row = $results->fetch_row()) {
		echo '<div class="przepisuser">';
		echo '<p><b>  '.$row[0].' </b></p>';
		echo '<p>'.$row[1].'</p><br> 
				</div>';
	
}
?>