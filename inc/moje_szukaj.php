<?php

require_once "connect.php";

$polaczenie = @new  mysqli($host, $dbuser, $dbpass, $dbname);
$polaczenie->set_charset("utf8");
$id = $_SESSION['id'] ;

$sql = "SELECT nazwa, przepis, id FROM  przepisy WHERE userid='$id' ORDER BY  nazwa ASC";

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

	while($row = $result->fetch_row()) 
	{
		echo '<div class="przepisuser">';
		echo '<p><b>  '.$row[0].' </b></p>';
		echo '<p>'.$row[1].'<br> <br> 
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<a href="przepisy_szukaj.php?id='.$row[2].' style="text-decoration:none;" ">Edytuj</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="przepis.php?id='.$row[2].'">Szczegóły</a></p><br>
		</div>';
		
	}
?>