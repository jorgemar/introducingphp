<?php
$characters = array('Arthur Dent', 'Ford Prefect', 'Zaphod Beeblebrox', 'Marvin', 'Slartibartfast');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Using a For Loop</title>
</head>

<body>
<h1>Character List</h1>
<ul>
<?php
for ($i = 0; $i < count($characters); $i++){
/*	if ($i ==3){
		continue;
	}
*/	
	echo '<li>' . $characters[$i] . '</li>';
	if ($characters[$i] == "Ford Prefect"){
		break;
	}
}
?>
</ul>
</body>
</html>
