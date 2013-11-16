<?php ini_set('display_errors', '0'); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset ="utf-8">
        <title>Including XHTML</title>
        <style>
            .main {
                font-style: italic;
            }
        </style>
    </head>
    
    <body>
        <h1>Server-side Includes</h1>
        <p class ="main"> This paragraph is in the main file</p>
         <?php include './includes/paragrap.html'; //with error ?>
        <p class ="main">This paragraph is also in the main file</p>
        <?php include './includes/paragraph.html'; ?>
        
         <p class ="main"> This paragraph is in the main file 2</p>
         <?php include_once './includes/paragraph1.html'; //with error ?>
        <p class ="main">This paragraph is also in the main file 2</p>
        <?php include_once './includes/paragraph1.html'; ?>  
    </body>
</html>