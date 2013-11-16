<?php
$errors = array();
$missing = array();
if(isset($_POST['send'])){
    $to = 'jorge@jjmnetworks.com';
    $subject = 'Feedback from contact form';
    $expected = array('name', 'email', 'comments', 'gender', 'terms');
    $required = array('name', 'email', 'comments', 'gender', 'terms');
    if (!isset($_POST['gender'])){
        $_POST['gender'] = '';
    }
    if (!isset($_POST['terms'])){
        $_POST['terms'] = '';
        $errors['terms'] = true;
    }
    $headers = "From: webmaster@example.com\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8";
    //$authenticate = '-fadmin@example.com';
    $authenticate = null;
    require 'mail_process.php';
    if ($mailSent){
        header('Location: thankyou.php');
        exit;
    }
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
            <fieldset><legend>Gender: <?php
            if ($missing && in_array('gender', $missing)) { ?>        
                <span class="warming">Please select a value</span> 
                <?php } ?>
                </legend><p>
                    <input type="radio" name="gender" value="f" id="gender_f"
                    <?php 
                    if ($_POST && $gender == 'f'){
                        echo 'checked';
                    }    
                    ?>
                    >
                    <label for="gender_f">Female</label>
                    <input type="radio" name="gender" value="m" id="gender_m"
                    <?php 
                    if ($_POST && $gender == 'm'){
                        echo 'checked';
                    }    
                    ?>
                    >
                    <label for="gender_m">Male</label>
                    <input type="radio" name="gender" value="w" id="gender_w"
                    <?php 
                    if (!$_POST && $gender == 'w'){
                        echo 'checked';
                    }    
                    ?>
                    >
                    <label for="gender_w">Won't say</label>
                </p></fieldset>
            <p>
                <input type="checkbox" name="terms" id="terms" value="agreed"
                <?PHP 
                    if ($_POST && $terms) {
                      echo 'checked';  
                    } 
                 ?>                       
                 >
                <label for="terms">I agree to the terms.
                <?php if ($_POST && isset($errors['terms'])) { ?>
                    <span class="warming">Please check to accept</span>
                <?php } ?>
                </label>
            </p>
            <p>
                <input type="submit" name="send" id="send" value="Send Comments">
                
            </p>
        </form>
        
    </body>
</html>









<!--<pre>
            <?php
//            if ($_POST && $mailSent) {
//                echo htmlentities($message, ENT_COMPAT, 'utf-8');
//                echo 'Headers: ' . htmlentities($headers, ENT_COMPAT, 'utf-8');
//                echo 'test';
//            }
            ?>
 </pre>-->

<pre>
<?php
//if ($_GET){
//    echo 'Contents of the $_GET array: <br>';
//    print_r($_GET);
//}elseif ($_POST) {
//    echo 'COntents of the $_POST array: <br>';
//    print_r($_POST);
//}

?>
</pre>