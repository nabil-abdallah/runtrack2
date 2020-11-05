<?php 
// tableau
$notes=[200, 204, 173, 98, 171, 404, 459];
		// afficher tableau
		var_dump($notes);
		 // boucle
		 for ($i=0; $i<7 ; $i++) {
		 	// si 
		 if ($notes[$i]%2==0) {
		 	echo $notes[$i]." pair <br>" ;
		 }
		 // si non 
		 	else {
		 		echo $notes[$i]." impair <br>";
		 	}


		 }


 ?>