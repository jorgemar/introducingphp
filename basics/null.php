<?php

$var1 = null;
$var2 = "";

echo "is var1 null?" . is_null($var1);
echo "<br>is var2 null?" . is_null($var2);
echo "<br>is var3 null?" . is_null($var3);

echo "<br>is var1 set?" . isset($var1);
echo "<br>is var2 set?" . isset($var2);
echo "<br>is var3 set?" . isset($var3);

// empty: "", null 0, 0.0 "0", false, array();
$var3 = "0";
echo "<br>is var1 empty?" . empty($var1);
echo "<br>is var2 empty?" . empty($var2);
echo "<br>is var3 empty?" . empty($var3);

//setting type: string, int, float, array, bool
$count = "2";
echo "<br><br> type juggling<br> type " . gettype($count);
$count += 3;
echo "<br> type " . gettype($count);

$cats = "I have " . $count . " cats.";
echo "<br> type " . gettype($cats);

echo "<br><br> type setting<br> ";
settype($count, "integer");
echo "<br> count " . gettype($count);

$count2 = (string) $count;
echo "<br> count " . gettype($count);
echo "<br> count2 " . gettype($count2);
?>
