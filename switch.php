<?php

$age = 50;

switch (true) {
    case ( $age > 10  &&  $age < 20) :
        echo "You Can Enter Here";
        break;
    case ( $age > 21  &&  $age < 40) :
        echo "You Can not Enter Here";
        break;
    default:
        echo " Enter the valid date";
}

?>
