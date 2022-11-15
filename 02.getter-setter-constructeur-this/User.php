<?php

class User {

    private $prenom;

    public function __construct($p){

        echo "Bonjour je suis le constructeur";
        $this->setPrenom($p);

    }

    public function setPrenom($p){

        $p = trim($p);
        $p = addslashes($p);

        if(is_string($p)){

            $this->prenom = $p;

        }

    }

    public function getPrenom(){

        return $this->prenom;

    }

}

// Puisse que le contructeur demande un argument, il faut lui en passer un lors de l'instanciation de la classe
$user1 = new User("Marc");

echo "<pre>";
echo "Je suis " . $user1->getPrenom();
echo "</pre>";

