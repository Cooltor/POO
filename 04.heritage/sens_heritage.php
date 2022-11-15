<?php

class A {

    public function test1() {

        return "Je suis la méthode test() de la classe A <br><hr>";

    }

}

class B extends A {

    public function test2() {

        return "Je suis la méthode test() de la classe B <br><hr>";

    }

}

class C extends B {

    public function test3() {

        return "Je suis la méthode test() de la classe C <br><hr>";

    }

}

$c = new C;

echo $c->test1();
echo $c->test2();
echo $c->test3();

// Non reflectif car on ne peut pas appeler une méthode d'une classe parente depuis une classe enfant