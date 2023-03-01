<?php 

    for($i=0;$i<=2;$i++)
    {        
        for($s=0;$s<=$i;$s++)
        {
            echo "*";
        }
        echo "<br>";
    }

    echo "<br><br>";
    for($i=2;$i>=0;$i--)
    {
        $n=1;        
        for($s=0;$s<=$i;$s++)
        {
            echo ($n. " ");
            $n=$n+1;
        }
        echo "<br>";
    }

    echo "<br><br>";
    $a=65;
    for($i=0; $i<4; $i++)
    {
    for($s=0;$s<$i;$s++)
     {
        echo chr($a)," ";
        $a++;
     }
        echo"</br>";

    }
?>