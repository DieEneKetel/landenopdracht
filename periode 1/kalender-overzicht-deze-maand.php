<!DOCTYPE html>
<html>
<body>

<?php

$month = date("F");
$today = date("j");
$days_in_month = date("t");


echo "<table border='1'>";
    for($i=1; $i <= 1; $i++)
    {
        echo "<tr>";
            echo "<td>$month</td>";
        echo "</tr>";
    }
echo "</table>";


echo "<table border='1'>";
    echo "<tr>";
    for ($i=1; $i <= $days_in_month; $i++)
    {
        if($i == date("j"))
        {
            echo "<td style='color:red'>$i</td>";
        }
        else
        {
            echo "<td>$i</td>";
        }
        
        switch($i)
        {
            case 7 : echo "<tr></tr>"; break;
            case 14 : echo "<tr></tr>"; break;
            case 21 : echo "<tr></tr>"; break;
            case 28 : echo "<tr></tr>"; break;
        }
    }
    echo "</tr>";
echo "</table>";

?>


</body>
</html>