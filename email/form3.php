<?php
$errors = array();
$missing = array();
if(isset($_POST['send'])){
    $to = 'jorge@jjmnetworks.com';
    $subject = 'Feedback from contact form';
    $expected = array('name', 'email', 'comments', 'extras', 'os');
    $required = array('name', 'email', 'comments', 'extras', 'os');
    if (!isset($_POST['extras'])){
        $_POST['extras'] = array();
    }
    $minimumChecked = 2;
    if (count($_POST['extras']) < $minimumChecked){
        $errors['extras'] = true;
    }
    $headers = "From: webmaster@example.com\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8";
    require 'mail_process.php';
}
if ($mailSent){
        header('Location: thankyou.php');
        exit;
    }
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact Us</title>
        <link href="../styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Contact Us</h1>
        <?php if (($_POST && $suspect) || ($_POST && isset($errors['mailfail'])) ) { ?>
        <p class="warning">Sorry your mail could not be sent</p>
        <?php } elseif($errors || $missing) {?>
        <p class="warning">Please fix the item(s) indicated.</p>
        <?php } ?>
        <form name="Contact" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>
                <label for="name">Name:
                <?php if ($missing && in_array('name', $missing)){ ?>
                <span class="warning">Please enter your name</span>
                <?php } ?>
                </label>
                <input type="text" name="name" id="name"
                <?php
                if ($errors || $missing){
                    echo 'value="' . htmlentities($name, ENT_COMPAT, 'utf-8') . '"';
                }
                ?>
                >
            </p>
            <p>
                <label for="email">Email:
                <?php if ($missing && in_array('email', $missing)){ ?>
                    <span class="warning">Please enter your email address</span>
                 <?php } elseif (isset ($errors['email'])) {?>
                    <span class="warning">Invalid email address</span>
                 <?php } ?>
                </label>
                <input type="text" name="email" id="email"
                <?php
                if ($errors || $missing){
                    echo 'value="' . htmlentities($email, ENT_COMPAT, 'utf-8') . '"';
                }
                ?>
                >
            </p>
            <p>
                <label for="comments">Comments:
                 <?php if ($missing && in_array('comments', $missing)){ ?>
                    <span class="warning">Please add comment</span>
                 <?php } ?>
                </label>
                <textarea name="comments" id="comments"><?php
                if ($errors || $missing){
                    echo htmlentities($comments, ENT_COMPAT, 'utf-8');
                }
                ?></textarea>
            </p>
            <fieldset><legend>Optional Extras:
                <?php if (isset($errors['extras'])) { ?>
                <span class="warning">Please select at least
                    <?php echo $minimumChecked; ?></span>
                <?php } ?>    
                </legend>
            <p>
                <input type="checkbox" name="extras[]" value="sunroof" id="extras_0"
                <?php 
                if ($_POST && in_array('sunroof', $extras)){
                    echo 'checked';
                }
                ?>
                 >
                <label for="extras_0">Sun roof</label>
                <br>
                
                <input type="checkbox" name="extras[]" value="aircon" id="extras_1"
                <?php 
                if ($_POST && in_array('aircon', $extras)){
                    echo 'checked';
                }
                ?>
                >
                <label for="extras_1">Air Conditioning</label>
                <br>
                
                <input type="checkbox" name="extras[]" value="automatic" id="extras_2"
                 <?php 
                if ($_POST && in_array('automatic', $extras)){
                    echo 'checked';
                }
                ?>      
                 >
                <label for="extras_2">Automatic Transmission</label>
                <br>
            </p>
            <p>
                <label for="os">Operating System:
                <?php if ($missing && in_array('os', $missing)) { ?>
                    <span class="warning">Please make a selection</span>
                <?php } ?>
                </label>
                <select name="os" id="os">
                    <option value="" <?php if(!$_POST || $os ==''){
                        echo 'selected';
                    } 
                    ?>>Please make a selection</option>
                    <option value="Linux"<?php if(!$_POST || $os =='Linux'){
                        echo 'selected';
                    } 
                    ?>>Linux</option>
                    <option value="Mac"<?php if(!$_POST || $os =='Mac'){
                        echo 'selected';
                    } 
                    ?>>Mac OS X</option>
                    <option value="Windows"<?php if(!$_POST || $os =='Windows'){
                        echo 'selected';
                    } 
                    ?>>Windows</option>
                </select>
            </P>
            <p>
                <input type="submit" name="send" id="send" value="Send Comments">
                
            </p>
        </form>
        
    </body>
</html>
