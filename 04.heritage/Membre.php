<?php

// L'héritage est une notion très importante en programmation orientée objet
// L'héritage permet de créer une classe enfant qui hérite des propriétés et des méthodes d'une classe parente
// On parle de classe fille ou classe enfant et de classe mère ou classe parente
// Lors de l'héritage, on hérite de tout (même des propriétés et méthodes privées)
class Membre {

    public $id=10, $pseudo, $mdp;

    public function __construct(){

        echo "Hello l'internaute <br><hr>";

    }


    public function inscription() {

        echo "Je m'inscris <br><hr>";

    }

    public function seCOnnecter(){

        echo"Je me connecte <br><hr>";

    }

}


// extends = héritage
// donc Admin hérite de Membre
class Admin extends Membre{

    public function accesBackEnd() {

        echo "Je suis admin et j'ai accès au BackEnd     <br><hr>";

    }

}

$admin = new Admin;

echo $admin->inscription();

echo $admin->seCOnnecter();

echo $admin->accesBackEnd();


