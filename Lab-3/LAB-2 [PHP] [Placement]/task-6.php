<?php

$myArray = array(23, 25, 24, 29, 234, 324);

$element = 234;

$result = false;

foreach ($myArray as $value) 
{
    if ($value == $element) 
    {
        $result = true;
        break;
    }
}

if ($result) {
    echo "The element $element was found in the array.";
} else {
    echo "The element $element was not found in the array.";
}
?>