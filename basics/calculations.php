<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>INcrement and Decrement</title>
</head>

<body>
<?php $number = 5; ?>
<p>$number is initiated as <?php $number; ?> </p>
<?php $result = ++$number * 2; ?>
<p><code>$result = ++$number * 2;</code></p>
<p>result is <?php echo $result; ?>. $number is now <?php echo $number; ?></p>
<?php $result = $number++ * 2; ?>
<p><code>$result = $number++ * 2;</code></p>
<p>result is <?php echo $result; ?>. $number is now <?php echo $number; ?></p>
<?php $result = $number-- * 2; ?>
<p><code>$result = $number-- * 2;</code></p>
<p>result is <?php echo $result; ?>. $number is now <?php echo $number; ?></p>
<?php $result = --$number * 2; ?>
<p><code>$result = --$number * 2;</code></p>
<p>result is <?php echo $result; ?>. $number is now <?php echo $number; ?></p>

<br><br>
<p>
    Absolute Value: <?php echo abs(0-300); ?><br>
    Exponential: <?php echo pow(2, 8); ?><br>
    Square root: <?php echo sqrt(100); ?><br>
    Modulo: <?php echo fmod(20, 7); ?><br>
    Random: <?php echo rand(); ?><br>
    Random (min, max): <?php echo rand(1, 10); ?><br>
    <br><br>
    <?php
    echo $float = 3.14 . "<br>";
    echo $float + 7 . "<br>";
    echo 4/3 . "<br>";
    echo "Round: " . round($float, 1) . "<br>";
    echo "Ceiling: " . ceil($float) . "<br>";
    echo "Floor: " . floor($float) . "<br>";
    // other functions:
    //is_int($val);
    //is_float($val);
    //is_numeric($val);
    
    //booleans
    $result1 = true;
    $result2 = false;
    echo "<br>" . $result1;
    echo "<br>" . $result2;
    echo "<br>rsult2 is boolean? " . is_bool($result2);
    
    $number = 3.14;
    if (is_float($number)){
        echo "it is a float.";
    }
    ?>
</p>

</body>
</html>

