<?php


$myArr= array(
    "name"=>"Osama",
    "Age"=>"old",
    "Gender"=>"Male"
);

// looping through the array to print it's content 
// let myKey represent the key value of the array 
// let "myV" reperesnt the value of the array according to it's key

foreach ($myArr as $myKey => $myV )
{
echo "Key=",$myKey," Values=",$myV," <br>";
}

?>