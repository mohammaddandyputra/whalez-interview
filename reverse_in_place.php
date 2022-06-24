<?php

function Reverse($words){
	$array = explode(' ', $words);
	$reverse_array = array_map('strrev', $array);
	return implode(' ', $reverse_array);
}

$words = "what is your name";

echo Reverse($words)

?>