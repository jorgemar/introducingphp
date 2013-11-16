<?php

$characters = array('Arthur Dent', 'Zaphod Beeblebrox', 'Marvin', 'Slartibartfast', 'Ford Prefect');

?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset ="utf-8">
        <title>Using a foreach loop</title>
    </head>
    
    <body>
        <h1>Character List</h1>
        <ul>
            <?php
            sort($characters);
            foreach ($characters as $name){
                echo "<li>$name</li>";
            }
            ?>
        </ul>
    </body>
</html>