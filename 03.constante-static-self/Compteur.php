<?php

class Compteur{
    
        public static $nbInstanceClass;

        public $nbInstanceObjt = 0;
    
        public function __construct()
        {
            ++self::$nbInstanceClass;
            ++$this->nbInstanceObjt;
        }

    }

$c1 = new Compteur();
$c2 = new Compteur();
$c3 = new Compteur();
$c4 = new Compteur();
$c5 = new Compteur();

echo "Nombre de fois que la classe a été instanciée : " . Compteur::$nbInstanceClass . "<br>";
echo "Nombre de fois que l'objet a été instancié : " . $c1->nbInstanceObjt . "<br>";
echo "Nombre de fois que l'objet a été instancié : " . $c5->nbInstanceObjt . "<br>";

