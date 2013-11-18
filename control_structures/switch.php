<?php
$name = 'Arthur';

switch ($name) {
	case 'Arthur':
		echo "I could never get the hang of Thursdays";
		break;
	case 'Marvin':
	case 'Paranoid Android':
		echo "I've got this terrible pain in all the diodes down my the left-side";
		break;	
	default:
		echo "Is that really a piece of fairy cake?";
		break;
}

$a = 2;
echo "<br>";
switch ($a){
    case 0:
        echo "a equals 0<br>";
        break;
    case 1:
        echo "a equals 1<br>";
        break;
     case 2:
        echo "a equals 2<br>";
        break;
     case 3:
        echo "a equals 3<br>";
        break;
    default:
        echo "a is not equal to 1,2,3<br>";
        break;
}

//chinese zodiac
$year = 2013;

switch (($year - 4) % 12){
    case 0: $zodiac = "Rat"; break;
    case 1: $zodiac = "Ox"; break;
    case 2: $zodiac = "Tiger"; break;
    case 3: $zodiac = "Rabbit"; break;
    case 4: $zodiac = "Dragon"; break;
    case 5: $zodiac = "Snake"; break;
    case 6: $zodiac = "Horse"; break;
    case 7: $zodiac = "Goat"; break;
    case 8: $zodiac = "Monkey"; break;
    case 9: $zodiac = "Rooster"; break;
    case 10: $zodiac = "Dog"; break;
    case 11: $zodiac = "Pig"; break;
}
echo "{$year} is the year of the {$zodiac}.";
?>