<?php

require_once "connect.php";

$polaczenie = @new  mysqli($host, $dbuser, $dbpass, $dbname);

$id = $_SESSION['id'] ;

$sql = "SELECT nazwa, przepis FROM  przepisy WHERE userid='$id' ORDER BY  nazwa ASC";

$result = $polaczenie->query($sql);

$ileprzep = $result->num_rows;
			if($ileprzep==0)
			{				
				echo '<div class="przepisuser">
				<br>
						<p> <b> Nie posiadasz własnych przepisów! </b> </p>
						</div>
						';
			}

	while($row = $result->fetch_row()) {
		echo '<div class="przepisuser">';
		echo '<p><b>  '.$row[0].' </b></p>';
		echo '<p>'.$row[1].'<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" value="Edytuj" style="width:200px;" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="submit" value="Dodaj komentarz" style="width:200px;" /> </p><br>
		</div>';
		
	
}
?>