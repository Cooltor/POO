<?php

abstract class Joueur {

    public function seConnecter() {

        return $this -> etreMajeur();

    }

    abstract public function etreMajeur();
    abstract public function devise();

}

//$joueur = new Joueur; // erreur car on ne peut pas instancier une classe abstraite

class JoueurFr extends Joueur {

    public function etreMajeur() {

        return 18;

    }

    public function devise() {

        return 2;

    }

}

$joueur = new JoueurFr;

echo   $joueur -> seConnecter() . '<hr>'; 
echo   $joueur -> etreMajeur() . '<hr>';
echo   $joueur -> devise() . '<hr>';

// Pour définir une méthode abstraite, il faut obligatoirement être dans une classe abstraite
// Les méthodes abstraites n'ont pas de contenu
// Une classe abstraite peut contenir des méthodes normales

