<?php


// Le nom de la classe commence toujours par une lettre majuscule
// Le nom du fichier porte généralement le nom de la classe

class Panier
{
    // Nous avons 3 niveaux de visibilités : public, protected, private

    public $nbProduit = 0;   // public => la propriété est accessible en dehors de la classe

    protected $quantite;     // protected => la propriété est accessible dans la class et dans les classes héritières

    private $prixUnitaire;   // private => la propriété est accessible uniquement dans la classe

    public $userId;

    private function affichageProduit(){    // affichageProduit est appelée "une méthode"

        return "Voici la liste des produits du panier";

    }

    public function ajoutProduit(){

        return "Le produit a bien été ajouté à votre panier";

    }

    protected function retirerProduit(){

        return "L'article a été retirer du panier";

    }

    public function userInfo(){

        return $this->userId;

    }
}


echo "<pre>";
$panier1 = new Panier;   // instanciation de la classe Panier. $panier1 représente l'objet qui a été instancié à partir de la classe Panier
var_dump($panier1);      // Pour voir la liste des propriétés de la classe
echo "</pre>";

echo "<pre>";
var_dump(get_class_methods($panier1));  // Pour voir la liste des méthodes de la classe
$panier1->nbProduit = 5;                // J'affecte la valeur 5 au nbProduit de l'objet $panier1
$panier1->userId = 601;
echo "</pre>";



echo "<pre>";
echo "Le panier 1 contient  $panier1->nbProduit";   // j'appelle la propriété public $nbProduit de l'objet $panier1
echo "</pre>";


echo "<br> Le panier1 =>". $panier1->ajoutProduit();


//echo "<br> Le panier1 =>". $panier1->affichageProduit();      Erreur car la méthode est private donc pas accessible en dehors de la classe


//echo "<br> Le panier1 =>". $panier1->retirerProduit();        Erreur car la méthode est protected donc pas accessible en dehors de la classe


echo "<br>L'id de l'user est  : " . $panier1->userInfo();





echo "<pre>";
$panier2 = new Panier;
var_dump($panier2);
echo "</pre>";


?>