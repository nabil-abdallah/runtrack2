<?php
	
	$tab = array(200, 204, 173, 98, 171, 404, 459);
	$i = 0 ;

	

	while ( $i <= 6) {
		if ($tab[$i] % 2 == 0) {
			echo $tab[$i]." "."Est pair";
			echo "<br>";
		}
		else{
			echo $tab[$i]." "."Est impair";
			echo "<br>";
		}
		$i++ ;
		
	}




?>