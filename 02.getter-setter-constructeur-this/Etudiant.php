<?php

class Etudiant{

    private $nom;
    private $prenom;
    private $age;
    private $classe;
    private $moyenne;

    public function __construct($n, $p, $a, $c, $m){

        $this->Nom = $n;
        $this->Prenom = $p;
        $this->Age = $a;
        $this->Classe = $c;
        $this->Moyenne = $m;

    }
    
    //sePresenter

    public function sePresenter(){

        echo "Bonjour je m'appelle " . $this->Prenom . " " . $this->Nom . " j'ai " . $this->Age . " ans et je suis en " . $this->Classe . " et ma moyenne est de " . $this->Moyenne;

    }

}

echo "<pre>";
$etudiant1 = new Etudiant("Durand", "Marc", 25, "Terminale", 12); 
$etudiant1->sePresenter();
