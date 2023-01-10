<html>
    
    <body>
        <?php
            include("land.php");
            include("quiz.php");

            if (isset($_POST["antwoord"])){

                $antwoord = $_POST["antwoord"];
                $num = $_POST["number"];
                $hoofdstad = $landen_array[$num]->Gethoofdstad();
                    if ($antwoord == $hoofdstad){
                        echo " You win";
                    }
                    else {
                        echo " Wrong! <br>";
                        $r = rand(0,50);
                        $land = $landen_array[$r]->Getland();
                        echo "Wat is de hoofdstad van ", $land, "?";
                        echo '<form action="landenOpdracht.php" method="post">
                        Antwoord: <input type="text" name="antwoord"><br>
                        <input type="submit">
                        <input type="hidden" name="number" value="'.$r.'">
                        </form>';
                    }
                    //echo $hoofdstad;
                    // echo $antwoord;
                    // echo $_POST["antwoord"];
                    unset($_POST["antwoord"]);
                }
                else{
                    $r = rand(0,50);
                    $land = $landen_array[$r]->Getland();
                    echo "Wat is de hoofdstad van ", $land, "?";
                    echo '<form action="landenOpdracht.php" method="post">
                    Antwoord: <input type="text" name="antwoord"><br>
                    <input type="submit">
                    <input type="hidden" name="number" value="'.$r.'">
                    </form>';
                }
        ?>
    </body>
</html>