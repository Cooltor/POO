<?php


class Homme
{
    private $nom;
    private $prenom;

    // __construct ets une méthode magique qui s'execute automatiquement lors de l'instanciation de la classe

    public function __construct()
    {
        echo "Bonjour je suis le constructeur";
    }
    // Setter(Mutateur) permet d'attribuer une bvaleur à notre propriété $prenom. 
    //Son nom commence pas set suivi du nom de la propriété qu'on veut setter
    public function setPrenom($p){

        $p = trim($p);
        $p = addslashes($p);

        if(is_string($p)){

            $this->prenom = $p;

        }
    }
    // Getter (Ascesseur) permet d'accéder à la variable de la propriété 
    public function getPrenom() {

        return $this->prenom;

    }

    public function getNom() {

        return $this->nom;

    }

    public function setNom($n){

        $n = trim($n);
        $n = addslashes($n);

        if(is_string($n)){

            $this->nom = $n;

        }
}
}

$homme1 = new Homme;

$homme1->setNom("Durand"); // J'attribut une valeur à la propriété private $nom de l'objet $homme1 en passant par le setter qui est une méthode public

$homme1->setPrenom("Marc");

echo "<br>";
echo "Je suis " .$homme1->getPrenom() . " " . $homme1->getNom(). ", enchanté.";  // J'accède aux valeurs des propriétés nom et prénom de l'objet en passant par les getter
// qui sont des méthodes public



