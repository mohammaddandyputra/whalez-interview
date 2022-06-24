<?php

function isPrime($number){
    if ($number == 1)
    return "true";

    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return "false";
    }

    return "true";
}

echo isPrime(137);

?>