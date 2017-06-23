<?php

function rndstr($laenge) 
{
	$str = "abcdefghijklmnopqrstuvwxyz0123456789";
	for($i=0; $i < $laenge; $i++) {
		$res .= substr($str, mt_rand(0, strlen($str)), 1);	
	}
	return $res;
}

?>
