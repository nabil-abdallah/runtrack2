<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>job 7</title>
</head>
<body>	
	<?php

		function bubblesort($tab,$croissant)
		{	
			if($croissant==true)
			{
				$i=0;
				$placecara=0;
				while ($i <= count($tab)-2) 
				{	
					if(ord($tab[$i+1][$placecara]) > ord($tab[$i][$placecara]))
					{
						$t=$tab[$i];
						$tab[$i]=$tab[$i+1];
						$tab[$i+1]=$t;		
						$i=-1;
						
					}
					if (ord($tab[$i+1][$placecara]) == ord($tab[$i][$placecara])) 
					{
						while (ord($tab[$i+1][$placecara]) == ord($tab[$i][$placecara]))
						{
							$placecara++;
						}
						$t=$tab[$i];
						$tab[$i]=$tab[$i+1];
						$tab[$i+1]=$t;		
						$placecara=0;

					}
					$i++;
				}
			}
			else
			{
				$i=0;
				$placecara=0;
				while ($i <= count($tab)-2) 
				{	
					if(ord($tab[$i+1][$placecara]) < ord($tab[$i][$placecara]))
					{	
						$t=$tab[$i];
						$tab[$i]=$tab[$i+1];
						$tab[$i+1]=$t;		
						$i=-1;
						
					}
					if (ord($tab[$i+1][$placecara]) == ord($tab[$i][$placecara])) 
					{
						while (ord($tab[$i+1][$placecara]) == ord($tab[$i][$placecara]))
						{	
							$placecara++;
						}	
						$t=$tab[$i];
						$tab[$i]=$tab[$i+1];
						$tab[$i+1]=$t;		
						$placecara=0;
					}
					$i++;
				}
			}

			return $tab;	
		}

		$tab=["j","bbba","bbbx","g","bbby","t"];
		$a= true;
		$tab2= @bubblesort($tab,$a);
		var_dump($tab2);
		$a= false;
		$tab2= @bubblesort($tab,$a);
		var_dump($tab2);
		/*
			je sais que ce code ne marche pas ,je laisse ce mesage au cas où je n'aurais pas eu le temps de revenire dessus .
			j'ai perdu trop de temps pour trouver un moyen de regler le probleme des majuscules...

		*/
	?>
</body>
</html>