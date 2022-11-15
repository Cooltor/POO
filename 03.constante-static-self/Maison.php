<?php

/*

1- Quel est le nombre de pièces de la maison?
2- Quelle est la superficie du terrain ?
3- Quelle est la hauteur de la maison
4- Créer un objet Maison(instancier la classe)
5- Quelle est la couleur de cette maison que vous aviez instancier ?

    NOTE:
    $obj->elmt ==> element d'un objet à l'extérieur de la classe
    $this->elmt ==> element d'un objet à l'intérieur de la classe

    class::elmt ==> element d'une classe à l'extérieur de la classe
    self::elmt ==> element d'une classe à l'intérieur de la classe

    NB

    - Est-ce que c'est static ?
        - Oui (self:: ou class::)
            - Est ce que c'est dans la class
                - Oui (self::)
                - Non (class::)
        - Non ($obj-> $this->)
            - Est ce que c'est dans la class
                - Oui ($this->)
                - Non ($obj->)
*/

class Maison
{
    private static $nbPiece = 7;
    public static $espaceTerrain = "500m2";
    public $couleur = "blanc";
    const HAUTEUR = "10m";
    private $nbPorte = 10;

    public static function getNbPiece()
    {
        return self::$nbPiece;
    }

    public function getNbPorte()
    {
        return $this->nbPorte;
    }

    public static function getEspace()
    {
        return self::$espaceTerrain;
    }

    public function getHauteur()
    {
        return self::HAUTEUR;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }
}

// 1- Quel est le nombre de pièces de la maison ?

echo " Il y a " . Maison::getNbPiece() . " pièces dans cette maison <br>";

// 2- Quelle est la superficie du terrain ?

echo " La superficie du terrain est de " . Maison::$espaceTerrain . " <br>";

// 3- Quelle est la hauteur de la maison

echo " La hauteur de la maison est de " . Maison::HAUTEUR . " <br>";

// 4- Créer un objet Maison(instancier la classe)

$maison1 = new Maison();

// 5- Quelle est la couleur de cette maison que vous aviez instancier ?

echo " La couleur de la maison est " . $maison1->getCouleur() . " <br>";

// 6- Combien de portes y a-t-il dans cette maison ?

echo " Il y a " . $maison1->getNbPorte() . " portes dans cette maison <br>";


