<?php
// Pattern est une solution pour éviter de créer plusieurs instances d'une classe
// Le Singleton est un modèle de conception qui permet de créer une seule instance d'une classe


class Singleton{

    private static $instance = null;

    // Puisse que le constructeur est private je ne pourrai instancier la classe
    private function __contruct(){



    }

    // Puisse que __clone() est private je ne pourrai pas cloner la classe
    private function __clone(){



    }

    // Si self::$instance est null la premiere fois que je vais appeler la méthode getInstance() je vais instancier la classe
    public static function getInstance() {

        if(is_null(self::$instance)) {

            return self::$instance = new Singleton;

        }

        return self::$instance;

    }

}


//$s = new Singleton; //erreur car le constructeur est private


$obj1 = Singleton::getInstance();  // J'appelle la méthode getInstance() pour instancier la classe
var_dump($obj1); //Affiche object(Singleton)#1 (0) { } quie est l'objet de la variable de RAM $obj1

$obj2 = Singleton::getInstance();
var_dump($obj2);

$obj3 = Singleton::getInstance();
var_dump($obj3);

$obj4 = Singleton::getInstance();
var_dump($obj4);

$obj5 = Singleton::getInstance();
var_dump($obj5);






