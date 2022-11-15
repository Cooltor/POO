<?php

class Banquier{

    private $nom;
    private $prenom;
    private $age;
    private $grade;
    private $lieu;

    function __construct($n, $p, $a, $g, $l = "Paris"){

        $this->Nom = $n;
        $this->Prenom = $p;
        $this->Age = $a;
        $this->Grade = $g;
        $this->Lieu = $l;

    }

    // sePresenter avec comme lieu par défaut "Paris"

    public function sePresenter(){

        echo "Bonjour je m'appelle " . $this->Prenom . " " . $this->Nom . " j'ai " . $this->Age . " ans et je suis " . $this->Grade . " et je travaille à " . $this->Lieu;

    }

}


$banquier1 = new Banquier("Durand", "Marc", 25, "Directeur", "Lyon");

$banquier1->sePresenter();
echo "<br>";

$banquier2 = new Banquier("Dupont", "Jean", 35, "Directeur");
$banquier2->sePresenter();

