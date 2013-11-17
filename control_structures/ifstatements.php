<?php
$a = 3;
$b = 4;

if (a > b){
    echo "a is larger than b";
} elseif(b > a) {
    echo "b is larger than a";
}else{
    echo "a is equal to b";
}

$new_user = true;
if ($new_user){
    echo "<br><h1>Welcome!</h1>";
    echo "<p>We are glad you are here.</p>";
}

//dont divide by zero
$numerator = 20;
$denominator = 4;
if ($denominator >0){
    $result = $numerator / $denominator;
    
}
echo "Result: {$result}";
?>
