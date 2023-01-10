<!DOCTYPE html>
<html>
<body>

<?php

$nr1 = rand(1,3) ;
$nr2 = rand(1,3) ;

if($nr1 == 1 && $nr2 == 2)
{
echo "player 1 uses papier!";
echo "<br/>";
echo "player 2 uses schaar!";
echo "<br/>";
echo "player 2 wins!";
}

if($nr1 == 1 && $nr2 == 3)
{
echo "player 1 uses papier!";
echo "<br/>";
echo "player 2 uses steen!";
echo "<br/>";
echo "player 1 wins!";
}

if($nr1 == 1 && $nr2 == 1)
{
echo "player 1 uses papier!";
echo "<br/>";
echo "player 2 uses papier!";
echo "<br/>";
echo "draw";
}

if($nr1 == 2 && $nr2 == 1)
{
echo "player 1 uses schaar!";
echo "<br/>";
echo "player 2 uses papier!";
echo "<br/>";
echo "player 1 wins!";
}

if($nr1 == 2 && $nr2 == 2)
{
echo "player 1 uses schaar!";
echo "<br/>";
echo "player 2 uses schaar!";
echo "<br/>";
echo "draw";
}

if($nr1 == 2 && $nr2 == 3)
{
echo "player 1 uses schaar!";
echo "<br/>";
echo "player 2 uses steen!";
echo "<br/>";
echo "player 2 wins!";
}

if($nr1 == 3 && $nr2 == 1)
{
echo "player 1 uses steen!";
echo "<br/>";
echo "player 2 uses papier!";
echo "<br/>";
echo "player 2 wins!";
}

if($nr1 == 3 && $nr2 == 2)
{
echo "player 1 uses steen!";
echo "<br/>";
echo "player 2 uses schaar!";
echo "<br/>";
echo "player 1 wins!";
}

if($nr1 == 3 && $nr2 == 3)
{
echo "player 1 uses steen!";
echo "<br/>";
echo "player 2 uses steen!";
echo "<br/>";
echo "draw";
}
?>


</body>
</html>