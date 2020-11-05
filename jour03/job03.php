<?php

	$tab ="I'm sorry Dave I'm afraid I can't do that";	
	
	$i = 0 ;



	

	while ($i <= 40 ) 
	{
		if ($tab[$i] == "a" || $tab[$i] == "e" || $tab[$i] == "i" || $tab[$i] == "I" || $tab[$i] == "o" || $tab[$i] == "u" || $tab[$i] == "y")
		{

			echo $tab[$i];
			echo "<br>";
			
		}
		
		
		$i++;
	}



?>