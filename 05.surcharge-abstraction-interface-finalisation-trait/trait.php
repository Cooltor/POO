<?php


trait TPanier {

    public $nbProduit = 1;

    public function affichageProduits() {

        return "Affichage des produits <br><hr>";

    }
}

trait TMembre {

    public function affichageMembres() {

        return "Affichage des membres <br><hr>";

    }
}


// use permet d'importer un ou plusieurs traits dans une classe
class Commande {

    use TPanier, TMembre;

}

$commande = new Commande;

echo   $commande -> affichageProduits();
echo   $commande -> affichageMembres();
echo  $commande -> nbProduit;

