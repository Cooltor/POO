<?php




try{ 
    $pdo = new PDO('mysql:host=localhost;dbname=nettefliquses', 'root', '',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

var_dump($pdo);
}catch(PDOException $e){

    echo "Connexion impossible à la BDD" . $e->getMessage();
    echo "Information :" . $e->getFile();
    echo "Ligne :" . $e->getLine();
    echo "Code :" . $e->getCode();
}