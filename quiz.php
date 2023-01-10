<?php
class quiz
{
    private  $vragen = array();
    private  $landen = array(
        array('Albanië','tirana'),
        array('Andorra','Andorra la Vella'),
        array('Armenië','Jerevan'),
        array('Azerbeidzjan','Bakoe'),
        array('België','Brussel'),
        array('Bosnië en Herzegovina','Sarajevo'),
        array('Bulgarije','Sofia'),
        array('Cyprus','Nicosia'),
        array('Denemarken','Kopenhagen'),
        array('Duitsland','Berlijn'),
        array('Estland','Tallinn'),
        array('Finland','Helsinki'),
        array('Frankrijk','Parijs'),
        array('Georgië','Tbilisi'),
        array('Griekenland','Athene'),
        array('Hongarije','Boedapest'),
        array('Ierland','Dublin'),
        array('IJsland','Reykjavik'),
        array('Italië','Rome'),
        array('Kazachstan','Nur-Sultan'),
        array('Kosovo','Pristina'),
        array('Kroatië','Zagreb'),
        array('Letland','Riga'),
        array('Liechtenstein','Vaduz'),
        array('Litouwen','Vilnius'),
        array('Luxemburg','Luxemburg'),
        array('Malta','Valletta'),
        array('Moldavië','Chisinau'),
        array('Monaco','Monaco'),
        array('Montenegro','Podgorica'),
        array('Nederland','Amsterdam'),
        array('Noord-Macedonië','Skopje'),
        array('Noorwegen','Oslo'),
        array('Oekraïne','Kiev'),
        array('Oostenrijk','Wenen'),
        array('Polen','Warschau'),
        array('Portugal	','Lissabon'),
        array('Roemenië','Boekarest'),
        array('Rusland','Moskou'),
        array('San Marino','San Marino'),
        array('Servië','Belgrado'),
        array('Slovenië','Ljubljana'),
        array('Slowakije','Bratislava'),
        array('Spanje','Madrid'),
        array('Tsjechië','Praag'),
        array('Turkije','Ankara'),
        array('Vaticaanstad','Vaticaanstad'),
        array('Verenigd Koninkrijk','Londen'),
        array('Wit-Rusland','Minsk'),
        array('Zweden','Stockholm'),
        array('Zwitserland','Bern'),
    );

    function __construct()
    {
        for($i = 0; $i < 10; $i++)
        {
            $r = rand(0,50);

            $vragen[$i] = new Land($this->landen[$r][0],$this->landen[$r][1]);
            $_SESSION["teller"] = 0;
        }
    }

    
}