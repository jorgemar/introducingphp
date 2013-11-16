<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact Us</title>
        <link href="../styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Contact Us</h1>
        <form name="Contact" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="text" name="name" id="email">
            </p><p>
                <label for="comments">Comments:</label>
                <textarea name="comments" id="comments"></textarea>
            </p>
            <p>
                <input type="submit" name="send" id="send" value="Send Comments">
            </p>
        </form>
    </body>
</html>
<pre>
<?php
if ($_GET){
    echo 'Contents of the $_GET array: <br>';
    print_r($_GET);
}elseif ($_POST) {
    echo 'COntents of the $_POST array: <br>';
    print_r($_POST);
}

?>
</pre>