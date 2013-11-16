<?php

$now = new DateTime();
echo $now->format('F j, Y h:ia');

$tokyo = new DateTimeZone('Asia/Tokyo');
$now->setTimezone($tokyo);
echo $now->format('F j, Y h:ia');
?>
