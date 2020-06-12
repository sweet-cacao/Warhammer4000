<?php
    session_start();
    require("classes/Ship.class.php");
    require("classes/Chaos.class.php");
    require("classes/Titan.class.php");
    require("classes/Ultimate.class.php");

    function construct_flot($flot1)
    {
        $Chaos = new Chaos();
        $Titan = new Titan();
        $Ultimate = new Ultimate();
        $arr = array();
        if ($flot1 == "Ultimate 3x")
        {
            $arr[] = $Ultimate->getArray();
            $arr[] = $Ultimate->getArray();
            $arr[] = $Ultimate->getArray();
        }
        else if ($flot1 == "Titan")
            $arr[] = $Titan->getArray();
        else if ($flot1 == "Ultimate, Chaos")
        {
            $arr[] = $Ultimate->getArray();
            $arr[] = $Chaos->getArray();
        }
        else if ($flot1 == "Chaos 2x")
        {
            $arr[] = $Chaos->getArray();
            $arr[] = $Chaos->getArray();
        }
        return $arr;
    }
    $flot1 = $_POST['ship1'];
    $flot2 = $_POST['ship2'];
    if (!$flot1 || !$flot2)
        echo "<header>Choose flot first</header>";
    else
    {  
        $_SESSION['arr'] = construct_flot($flot1);
        $_SESSION['arr2'] = construct_flot($flot2);
        echo "<header><a style='font-size:150%;color:aqua;' href='game.php'>Start game".
    "</a><br />".
    "Player 1: ".$flot1."<br />".
    "Player 2: ".$flot2."</header>";
    }
?>