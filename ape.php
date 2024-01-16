<?php
require_once "Animal.php";

class Ape extends Animal {
    public function __construct($name){
        parent::__construct($name);
        $this->legs = 2;
    }

    public function getApeName(){
        echo "Name : " . $this->get_name() . "<br/>";
    }

    public function getApeLegs() {
        echo "Legs : " . $this->get_legs() . "<br/>";
    }

    public function getApeBlood() {
        echo "Cold Blooded : " . $this->get_cold_blooded() . "<br/>";
    }

    public function getApeYell(){
        echo "Yell : Auooo";
    }
}
?>
