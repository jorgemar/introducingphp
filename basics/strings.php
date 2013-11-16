<?php
$book = 'Hitchhiker\'s Guide to the Galaxy';
echo $book;
echo "<br>";
$book2 = '"Hitchhiker\'s Guide to the Galaxy"';
echo " I love $book2";
?>

<?php
$first = "The quick brown fox ";
$second = "jumped over the lazy dog.";
$third = $first;
$third .= $second;
echo "<br>" . $third;

//string functions
echo "<br><br>";
echo "Lowercase: ". strtolower($third) . "<br>";
echo "Uppercase: ". strtoupper($third) . "<br>";
echo "Uppercase first: ". ucfirst($third) . "<br>";
echo "Uppercase workds: ". ucwords($third) . "<br><br>";

echo "Length: ". strlen($third) . "<br>";
echo "Trim: A". trim(" B C D ") . "E<br>";
echo "Find: " . strstr($third, "brown") . "<br>";
echo "Replace by string: ". str_replace("quick", "super-quick", $third) . "<br>";

echo "Repeat: ". str_repeat($third, 2) . "<br>";
echo "Make Substring: ". substr($third, 5, 10) . "<br>";
echo "Find position: ". strpos($third, "brown") . "<br>";
echo "Find character: ". strchr($third, "z") . "<br>";
?>
