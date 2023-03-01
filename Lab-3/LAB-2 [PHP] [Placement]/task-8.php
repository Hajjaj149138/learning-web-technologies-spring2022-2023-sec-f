<html lang="en">
<head>
    <title>Task 8</title>
</head>
<body>
    <table border="2" >

<tr>
<td>
    <table>
        
  
<?php

    $array = array(
        array(1, 2, 3, 'A'),
        array(1, 2, 'B', 'C'),
        array(1, 'D', 'E', 'F')
    );

    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            echo $array[$i][$j] . " ";
        }
        echo "<br>";
    }
?>
</td>

    </tr>
    <tr>
    <th>
<table border="2">
    <tr>
    

<td>
           <?php
                for($i=3;$i>=1;$i--){
                  for($j=1;$j<=$i;$j++){
                      echo $j." ";
                  }
                  echo "<br>";
                }
               

?>     </td>
           <td>
           <?php
           $letter = 'A';
                for($i=1;$i<=3;$i++){
                  for($j=1;$j<=$i;$j++){
                      echo $letter." ";
                      $letter++;
                  }
                  echo "<br>";
                }


?>
           </td>
    </tr>
 
</body>
</html>