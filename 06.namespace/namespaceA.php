<?php

// Les namespaces sont des espaces de noms qui permettent de regrouper des classes, des fonctions et des constantes. Ils permettent de résoudre les conflits de noms entre les classes, les fonctions et les constantes.
namespace A\mySpace;
class PDO {

    public function show() {

        echo "Je suis PDO de la méthode show <br>";

    }
}

$name = new PDO;
$name->show();

echo __NAMESPACE__; // Permet d'afficher le namespace dans lequel on se trouve

// Ici on utilise l'antislash pour indiquer que l'on souhaite utiliser la classe PDO du namespace global et non celle du namespace A\mySpace
$pdo = new \PDO('mysql:localhost;dbname=nettefliquse','root','',array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));


