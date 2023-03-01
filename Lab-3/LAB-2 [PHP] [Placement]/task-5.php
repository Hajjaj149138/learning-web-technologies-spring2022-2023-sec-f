<?php

echo "Here all the odd number's between 10 to 100 : <br><br>";

for ($i = 10; $i <= 100; $i++) 
{
    if ($i % 2 != 0) 
    {
        echo $i . " , ";
    }
}

?>