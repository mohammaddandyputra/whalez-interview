<?php
 	function FindNonRepeatChar($words) {
	  	$char = null;
	  	for ($i = 0; $i <= strlen($words); $i++) {
	     	if (substr_count($words, substr($words, $i, 1)) == 1) {
	        	return substr($words, $i, 1);
	     	}
		}
	}

	echo FindNonRepeatChar("the quick brown fox jumps then quickly blow air");
?>