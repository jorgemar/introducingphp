<?php
$firstName = 'Jorge';
$lastName = 'Martinez';
$book = '"Hitchhiker\'s Guide to the Galaxy"';
$author = 'Douglas Adams';
$timeListened = 25;
$fullName = $firstName . ' '  . $lastName;
$recommendation = "$book by $author";

// $newLines = "<br><br>";
/*$message = "Name: $fullName $newLines";
$message .= "Recommendation: $recommendation $newLines";
$message .= "Times listed: $timeListed";
echo $message;*/
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title><?= $fullName; ?> Recommends</title>
</head>

<body>
<h1>Listen to this!</h1>
<p>Hi, I'm <?= $fullName; ?>, I am a great fan of <?= $recommendation; ?>.
  I have listened to the radio version at least <?= $timeListened; ?> times.</p?
</body>
</html>
