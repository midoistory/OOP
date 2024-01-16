<?php
    require_once "frog.php";
    require_once "ape.php";

    echo "Midori XI RPL 2<br/><br/>";

    $sheep = new animal("Shaun");
    echo "Name : " .$sheep-> get_name(); //"shaun"
    echo "<br/> Legs : " .$sheep-> get_legs(); //4
    echo "<br/> Cold Blooded : " .$sheep-> get_cold_blooded(); //"no"

    echo "<br/>";
    echo "<br/>";

    $kodok = new Frog("Buduk");
    $kodok->getFrogName();
    $kodok->getFrogLegs();
    $kodok->getFrogBlood();
    $kodok->getFrogJump();

    echo "<br/>";
    echo "<br/>";
    
    $ape = new Ape("Kera Sakti");
    $ape->getApeName();
    $ape->getApeLegs();
    $ape->getApeBlood();
    $ape->getApeYell();
?>