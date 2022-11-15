<?php

class A {

    public function calcul() {

        return 10;

    }
}


class B extends A {

    public function calcul() {    //redefinition de la méthode calcul()

        // à l'intérieur je surcharge la méthode calcul() de la classe A
        $nb = parent::calcul(); //on récupère le résultat de la méthode calcul() de la classe parente

        if ($nb <=100) {

            return "$nb est inférieur ou égal à 100";
        }else {

            return "$nb est supérieur à 100";
        }
    }
}


$objetB = new B;

echo $objetB->calcul();