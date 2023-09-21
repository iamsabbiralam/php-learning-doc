<?php

$per = 32;

if ($per >= 80 && $per < 100) {
    echo " You are In marit";
} elseif ($per >= 60 && $per < 80 ) {
    echo " you get 1st division";
} elseif ($per >= 50 && $per < 60 ) {
    echo " you get 2nd division";
} elseif ($per >= 33 && $per < 50 ) {
    echo " you get 3rd division";
} elseif ($per < 33 ) {
    echo " you are fail";
} else{
    echo "please give a valid percentage";
}

?> 
