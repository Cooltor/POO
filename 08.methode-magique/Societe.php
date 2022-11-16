<?php

class Societe {

    public $adresse, $ville, $cp;

    public function __construct(){

    }

    public function __set($propriete, $valeur){

        echo "La propriété $propriete n'existe pas. La valeur $valeur n'a pas été affectée.<br>";

    }

    public function __get($propriete){

        echo "La propriété $propriete n'existe pas.<br>";

    }

}

$societe1 = new Societe();
$societe1->villes = 'Paris';

$societe1->nom;

var_dump($societe1);

