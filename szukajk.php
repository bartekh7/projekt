<?php

require_once "connect.php";

$polaczenie = @new  mysqli($host, $dbuser, $dbpass, $dbname);
$polaczenie->set_charset("utf8");
if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
		
	}
	else
	{
		if(isset( $_POST['pole']) and !empty($_POST['pole'])) 
		{
			
			$sql = "SELECT komentarz FROM  komentarze WHERE przepisid = '$id'";

			$results = $polaczenie->query($sql);

			while($row = $results->fetch_row()) 
			{
				echo '<div class="przepisszukaj">';
				echo '<p><b>  '.$row[0].' </b></p>';
				echo '</div>';
			}
		}
	}

?>
