<?php

class Vehicule{
    private static $marque ="AUDI"; // static est utilisé pour accéder aux méthodes ou attributs depuis la classe
    private $couleur = "gris nardo"; // une propriété static appartient à la classe et non à l'objet
    private static $modele = "A3";

    // cette méthode appartient à l'objet mais retourne une propriété qui appartient à la classe
    // la lcasse est repréenté par le mot clé self
    // l'objet est représenté par $this 
    public function getMarque(){
        return self::$marque;            // self:: pour accéder à une propriété static depuis la classe
    }

    public function getCouleur(){
        return $this->couleur;
    }

    public static function getModele(){
        return self::$modele;
    }

    public function setMarque ($m){
        self::$marque = $m;
    }

    public function setCouleur ($c){
        $this->couleur = $c;
    }

    public static function setModele ($mo){
        self::$modele = $mo;
    }


}

$vehicule1 = new Vehicule();

echo "Véhicule de marque " .$vehicule1->getMarque()." et de modèle ".$vehicule1->getModele()." de couleur ".$vehicule1->getCouleur() . "<br>";


$vehicule2 = new Vehicule();
$vehicule2->setMarque("BMW"); // le changement de marque s'applique à tous les objets de la classe Vehicule
$vehicule2->setModele("X5");
$vehicule2->setCouleur("noir");

echo "Véhicule de marque " .$vehicule2->getMarque()." et de modèle ". Vehicule::getModele()." de couleur ".$vehicule2->getCouleur() . "<br>";

// pour accéder à une propriété static depuis l'extérieur de la classe, on utilise le nom de la classe
// nom_de_le_classet::nom_de_la_propriété
$vehicule3 = new Vehicule();

$vehicule3->setModele("C220");
$vehicule3->setCouleur("blanche");

echo "Véhicule de marque " .$vehicule3->getMarque()." et de modèle ". Vehicule::getModele()." de couleur ".$vehicule3->getCouleur() . "<br>";



Vehicule::setModele("F40");


$vehicule4 = new Vehicule();
echo "Véhicule de marque " .$vehicule4->getMarque()." et de modèle ". Vehicule::getModele()." de couleur ".$vehicule4->getCouleur() . "<br>";

