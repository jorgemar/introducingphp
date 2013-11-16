<?php require './includes/my_function.php'
?>
<html>
    <head>
        <meta charset ="utf-8">
        <title>Using require</title>
    </head>
    
    <body>
        <h1>including a function</h1>
        <p>3407 seconds converted to minutes and seconds:
        <?php echo convertSeconds(3407); ?></p> 
    </body>
