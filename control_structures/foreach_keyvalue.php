<?php

$descriptions = array('Earth' => 'Mostly harmless', 
    'Marvin' => 'The paranoid android', 
    'Zaphod' => 'President of IGG');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Using a Foreach Loop</title>
</head>

<body>
<h1>Descriptions</h1>
<?php
foreach ($descriptions as $key => $description){
    echo "<p>$key is $description</p>";
}
?>
</body>
</html>