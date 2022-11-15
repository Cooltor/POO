<?php

class A {

    public function direBonjour() {

        return "Bonjour <br><hr>";

    }

}

class B {

    public $maVariable;

    public function __contruct() {

        $this->maVariable = new A;

    }

}



$b = new B;

echo $b->maVariable->direBonjour();