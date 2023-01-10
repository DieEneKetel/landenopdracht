<?php

class Land
{
    private $land = "";
    private $hoofdstad = ""; 
    private $antwoord = "";

    function __construct($land,$hoofdstad)
    {
        $this->land = $land;
        $this->hoofdstad = $hoofdstad;
    }

    function getHoofdstad()
    {
        return $this -> hoofdstad;
    }

    function getLand()
    {
        return $this -> land;
    }

    function setAntwoord($antwoord)
    {
        $this->antwoord = $antwoord;
    }

    function getAntwoord()
    {
        return $this->antwoord;
    }
}
?>