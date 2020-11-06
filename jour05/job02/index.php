<?php

	function bonjour($boolval='jour')
	{
		if ($boolval == true) {
			echo "Bonjour";
		}
		else
		{
			echo "Bonsoir";
		}
	}
	bonjour();
?>