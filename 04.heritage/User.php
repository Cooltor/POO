<?php


/* Créer une classe User avec les attributs protected nom et prénom
Faites les getters et setter. Puis un constructeur (votre constructeur doit prendre 2 params et utiliser les setters) une methode seConnecter qui retourne (Je suis un user et je peux me connecter)
Créer une classe Admin qui hérite de User
Qui a pour méthode roleUser qui affiche je NOM_USER et je suis admin du site
Pour finir,
créer une instance Admin et afficher son role et l'état de sa connexion
*/

class User {

    protected $nom;
    protected $prenom;

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function __construct($nom, $prenom) {
        $this->setNom($nom);
        $this->setPrenom($prenom);
    }

    public function seConnecter() {
        return "Je suis un user et je peux me connecter ! 👨‍💻";
    }

}

class Admin extends User {

    public function roleUser() {
        return "Je suis " . $this->getNom(). " " . $this->getPrenom() ." et je suis admin du site ! 👍 ";
    }

}

$admin = new admin("Billy", "Crawford");
echo $admin->roleUser() . "<br>";
echo $admin->seConnecter();

