<?php

$name = 'Arthur';
$today = 'Thursday';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Missing Semicolon</title>
    </head>
    <body>
        <h1>Notable Qoutes</h1>
        <p>
            <?php
            if ($name == 'Arthur' && $today = 'Thursday'){
                echo "$name: I could never get the hang of Thursdays";
            } elseif ($name == 'Marvin' || $today == 'Wednesday') {
                echo "I've got this terrrible pain in all the diodes";
        } else {
            echo 'is that really a piece of fairy cake?';
        }
            
            ?>
        </p>
    </body>
</html>