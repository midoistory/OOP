<?php
require_once "Animal.php";

class Frog extends Animal {
    public function __construct($name){
        parent::__construct($name);
    }

    public function getFrogName(){
        echo "Name : " . $this->get_name() . "<br/>";
    }

    public function getFrogLegs() {
        echo "Legs : " . $this->get_legs() . "<br/>";
    }

    public function getFrogBlood() {
        echo "Cold Blooded : " . $this->get_cold_blooded() . "<br/>";
    }

    public function getFrogJump(){
        echo "Jump : Hop Hop";
    }
}
?>
