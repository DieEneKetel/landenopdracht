<!DOCTYPE html>
<html>
<body>

<?php
echo "de herfst vakantie is om 24 october";
echo "<br>";

echo "that is day 297";
echo "<br>";


$today = date("j F Y");
echo "today is $today";
echo "<br>";

$day1 = date("z");
echo "that is day $day1";
echo "<br>";

$day2 = strtotime("24-10-2022");
$herfstvakantie = date("z",$day2);
$aantaldagen = $herfstvakantie  - $day1;
echo "$aantaldagen";

?>


</body>
</html>