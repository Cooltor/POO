<?php


final class Application {

    public function lancementApplication() {

        return "L'application se lance <br><hr>";

    }

}

// $app = new Application; // Erreur car on ne peut pas instancier une classe finale

// Une classe finale ne peut pas être héritée

class Application2 {

    final public function lancementApplication() {

        return "L'application se lance <br><hr>";

    }

}


class Application3 extends Application2 {

    // public function lancementApplication() {} // Erreur car on ne peut pas surcharger une méthode finale

}

