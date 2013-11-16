<?php

$characters = array('Arthur Dent', 'Ford Prefect', 
    'Zaphod Beeblebrox', 'Marvin', 'Slartibartfast');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Using a Foreach Loop</title>
</head>

<body>
<h1>Character List</h1>
<ul>
<?php
foreach ($characters as $name){
    echo "<li>$name</li>";
}
?>
</ul>
</body>
</html>