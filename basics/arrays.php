<?php
$characters = array('Arthur Dent', 'Ford Prefect', 'Zaphod Beeblebrox' );
print_r($characters);
echo "<br>" . $characters[1];
$characters[] = 'Marvin';
$characters[] =  'Slartibartfast';
print_r($characters);
$descriptions = array('Earth' => 'Mostly Harmless', 'Marvin' => 'The Paranoid Android' );
$descriptions['Zaphod'] = 'President of the Imperial Galactic Government';
echo "Earth is described as {$descriptions['Earth']}";

$numbers = array(8,23,15,42,16,4);
echo "<br><br>Count: " . count($numbers) . "<br>";
echo "Max Value: " . max($numbers) . "<br>";
echo "Min Value: " . min($numbers) . "<br>";
echo "<pre> Sort: " . sort($numbers);
print_r($numbers);
echo "<br>rsort: " . rsort($numbers);
print_r($numbers); 
echo "</preset>";
echo $num_string = implode("*", $numbers);
print_r(explode("*", $num_string));

?>