<?php

$Number1 = 12345;
$Number2 = 23456;
$Number3 = 13243;

if ($Number1 >= $Number2 && $Number1 >= $Number3) 
{
  echo"Here $Number1  is the largest Number";
} 
elseif ($Number2 >= $Number1 && $Number2 >= $Number3) 
{
  echo "Here $Number2 is the largest Number";
} 
else 
{
  echo "Here $Number3  is the largest Number";
}
?>