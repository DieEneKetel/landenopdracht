<!DOCTYPE html>
<html>
<body>

<?php
echo "mijn verjaardag is op 4 november";
echo "<br>";

echo "that is day 308";
echo "<br>";


$today = date("j F Y");
echo "today is $today";
echo "<br>";

$day1 = date("z");
echo "that is day $day1";
echo "<br>";

$day2 = strtotime("04-11-2022");
$verjaardag = date("z",$day2);

$eindejaar = strtotime("31-12-2022");
$dageneindejaar = date("z",$eindejaar);

if($day1 > $verjaardag)
{
    $aantaldagen = $dageneindejaar + $verjaardag - $day1 + 1 ;
    echo "$aantaldagen";
}

else
{
    $aantaldagen = $verjaardag - $day1;
    echo "$aantaldagen";
}
?>


</body>
</html>