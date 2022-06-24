<?php

function removeDuplicate($number){
	$output = array_unique($number);

	foreach($output	as $value){
		echo $value."<br>";
	}
}

$data = [19, 21, 19, 21, 46, 21, 29, 21, 18];

echo removeDuplicate($data);

?>