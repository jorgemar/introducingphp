<?php
$number = 2;

function doubleIt($num){
    //return $num *=2;
    $num *= 2;
}

 $doubled = doubleIt($number);
// $doubled = doubleIt(7);

echo 'doubled is: ' . $doubled . '<br>';
echo 'number is: ' . $number . '<br>';
var_dump($doubled);
?>
