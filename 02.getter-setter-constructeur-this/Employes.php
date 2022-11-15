<?php

//Écrire une classe qui représente les employés d’une entreprise ayant les propriétés suivantes : nom,    prénom et âge. Cette classe doit être dotée d’un constructeur permettant de valider les conditions suivantes : tous ces attributs sont requis et que l’âge doit être entre 18 et 65 ans compris. Ensuite, créer des employés et afficher leur nom, prénom et âge.

class Employes {

    private $nom;
    private $prenom;
    private $age;

    public function __construct($n, $p, $a){

        if(empty($n) || empty($p) || empty($a)){
            echo "Tous les attributs sont requis";
        } else if($a <= 18 || $a >= 65){
            echo "L'âge doit être entre 18 et 65 ans";
        } else {
            $this->Nom = $n;
            $this->Prenom = $p;
            $this->Age = $a;
        }

    }

    public function sePresenter(){
        echo "Bonjour je m'appelle " . $this->Prenom . " " . $this->Nom . " j'ai " . $this->Age . " ans";
    }

}

echo "<pre>";
$employe1 = new Employes("Durand", "Marc", 25);
$employe1->sePresenter();

echo "<br>";

$employe2 = new Employes("Dupont", "Jean", 15);
$employe2->sePresenter();

echo "<br>";

$employe3 = new Employes("Martin", "Paul", 35);
$employe3->sePresenter();

echo "<br>";

$employe4 = new Employes("Martin", "", 35);
$employe4->sePresenter();



