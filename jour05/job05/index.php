<?php

$str="la tsf est une equipe e-sport fun";
$char="e";


function occurences($str,$char)
{	
$i=0;
$i2=0;
	while ( $i<strlen($str) ) 
	{

		if($str[$i]==$char)
		{
			$i2=$i2+1;
		}
		$i=$i+1;

	}
			return($i2);
}

echo occurences($str,$char);
?>