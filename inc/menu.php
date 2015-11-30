<?php

if (isset($_SESSION['zalogowany']))
{
	echo '<div id="menu">
		
			<div class="option"> 
				<a href="przepisy.php" class="menulink"> ';
					if($_SERVER['REQUEST_URI'] == '/przepisy/przepisy_zal.php') { echo '<u> Strona główna </u>';} else { echo 'Strona główna';}
				echo '</a>
			</div>
			
			<div class="option"> 
				<a href="przepisy_kategorie.php" class="menulink">';
					if($_SERVER['REQUEST_URI'] == '/przepisy/przepisy_kategorie.php') { echo '<u> Przepisy kulinarne</u>';} else { echo 'Przepisy kulinarne';}
				echo ' 
				</a>
			</div>
			
			<div class="option"> 
				<a href="moje.php" class="menulink" >';
					if($_SERVER['REQUEST_URI'] == '/przepisy/moje.php') { echo '<u> Moje przepisy</u>';} else { echo 'Moje przepisy';}
				echo ' 
				</a>
			</div>
			
			<div class="option"> 
				<a href="informacje.php"	class="menulink" >';
					if($_SERVER['REQUEST_URI'] == '/przepisy/informacje.php') { echo '<u> O projekcie</u>';} else { echo 'O projekcie';}
				echo ' 
				</a>	
			</div>
			
			<div class="option"> 
				<a href="logout.php" class="menulink" >';
					if($_SERVER['REQUEST_URI'] == '/przepisy/logout.php') { echo '<u> Wyloguj/u>';} else { echo 'Wyloguj';}
				echo ' 
				</a>
			</div>
			
			<div style="clear:both"></div>
			
		</div>';
}
else
{
	echo '<div id="menu">
		
			<div class="option"> 
				<a href="przepisy.php" class="menulink"> ';
					if($_SERVER['REQUEST_URI'] == '/przepisy/przepisy.php') { echo '<u> Strona główna </u>';} else { echo 'Strona główna';}
				echo '</a>
			</div>
			
			<div class="option"> 
				<a href="przepisy_kategorie.php" class="menulink"> ';
					if($_SERVER['REQUEST_URI'] == '/przepisy/przepisy_kategorie.php') { echo '<u> Przepisy kulinarne</u>';} else { echo 'Przepisy kulinarne';}
				echo ' 
				</a>
			</div>
			
			<div class="option"> 
				<a href="informacje.php"	class="menulink" >';
					if($_SERVER['REQUEST_URI'] == '/przepisy/informacje.php') { echo '<u> O projekcie</u>';} else { echo 'O projekcie';}
				echo ' 
				</a>	
			</div>
			
			<div class="option"> 
				<a href="logowanie.php" class="menulink" >';
					if($_SERVER['REQUEST_URI'] == '/przepisy/logowanie.php') { echo '<u> Zaloguj</u>';} else { echo 'Zaloguj';}
				echo ' 
				</a>
			</div>
			
			<div style="clear:both"></div>
			
		</div>';
}
?>