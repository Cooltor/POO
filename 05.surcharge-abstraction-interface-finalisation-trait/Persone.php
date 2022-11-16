<?php


/*Créez une classe représentant une personne. Elle déclare les propriétés nom et prénom et
un constructeur.
Créez une classe client dérivée de la classe personne en y ajoutant la propriété adresse et
une méthode getCoordonnee() qui affiche les coordonnées complètes de la personne.
Créez une classe électeur dérivée de la même classe(Personne), et ajoutez-y deux propriétés bureau de
vote et vote, ainsi que deux méthodes ; une méthode booleen qui permet retourner la
valeur True à l’attribut vote et une autre méthode isVoter qui permet de tester si un
électeur a voté.

*/

class Personne {

    public $nom;
    public $prenom;

    public function __construct($nom, $prenom) {

        $this->nom = $nom;
        $this->prenom = $prenom;

    }

}

class Client extends Personne {

    public $adresse;

    public function __construct($nom, $prenom, $adresse) {

        parent::__construct($nom, $prenom);
        $this->adresse = $adresse;

    }

    public function getCoordonnee() {

        return "Coordonnées complètes de la personne: $this->nom $this->prenom, $this->adresse <br><hr>";

    }

}

class Electeur extends Personne {

    public $bureauDeVote;
    public $vote = false;

    public function __construct($nom, $prenom, $bureauDeVote) {

        parent::__construct($nom, $prenom);
        $this->bureauDeVote = $bureauDeVote;

    }

    public function voter() {

        $this->vote = true;

    }

    public function isVoter() {

        if($this->vote) {

            return "L'électeur $this->nom $this->prenom a voté <br><hr>";

        } else {

            return "L'électeur $this->nom $this->prenom n'a pas voté <br><hr>";

        }

    }

}

$client1 = new Client('Doe', 'John', 'Rue de la Paix, 75000 Paris');
echo $client1->getCoordonnee();

$electeur1 = new Electeur('Doe', 'John', 'Bureau de vote 1');
echo $electeur1->isVoter();

$electeur1->voter();
echo $electeur1->isVoter();