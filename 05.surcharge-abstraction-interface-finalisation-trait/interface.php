<?php

// Une interface est une liste de méthodes abstraites sans contenu qui permet de définir un contrat entre une classe et un autre développeur.
// Une classe qui implémente une interface doit obligatoirement définir toutes les méthodes de l'interface. Une classe peut implémenter plusieurs interfaces.
interface Mouvement {

    public function deplacement();

}


// Une classe implémente un interface
// Une classe ne peut pas hériter d'une classe et d'un trait en même temps. Elle peut hériter d'une classe et implémenter un ou plusieurs interfaces.


class Bateau implements Mouvement {

    public function deplacement() {

        return "Je me déplace sur l'eau <br><hr>";

    }

}

class Avion implements Mouvement {

    public function deplacement() {    //Obligation de redéfinir la méthode de l'interface

        return "Je me déplace dans les airs <br><hr>";

    }

}

//$voiture = new Mouvement; // Erreur car on ne peut pas instancier une interface



interface A {

    public function test1();

}

interface B {

    public function test2();

}

class C implements A, B {

    public function test1() {}
    public function test2() {}

}

interface E extends A, B {

    public function test3();

}

class F extends C implements A {

    public function test1() {}

}

