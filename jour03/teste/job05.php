<?php

	$str = "On nest pas le meilleur quand on le croit mais quand on le sait";



	$dic = array('consonnes' =>["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z"],'voyelles' => ["a","e","i","o","O","u","y"]);
	
	$i = 0 ;
	$consonnes = 0 ;
	$voyelles = 0;



	while ($i <= 62) 
	{
		$c = 0;
		
		$v = 0 ;
		

		while ($c <= 19) 
		{
			if ($str[$i] == ($dic['consonnes'][$c]))
			{

				$consonnes++ ;
				
				
			}
			$c++ ;
		}

		while ($v <= 6) 
		{
			if ($str[$i] == ($dic['voyelles'][$v])) 
			{
				$voyelles++ ;
				
			}
			$v++ ;
		}
		$i++ ;
	}

	echo "Il y a"." ".$consonnes." "."consonnes "."et ".$voyelles." voyelles";


?>