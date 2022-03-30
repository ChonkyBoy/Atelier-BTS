<?php

//var_dump($_POST);
#récup les données
$genre = filter_input(INPUT_POST, "genre");
$espece = filter_input(INPUT_POST, "espece");

#connexion BDD
include_once "../Config.php";
$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::USERNAME, Config::PASSWORD);
$requete = $pdo->prepare("insert into race(genre,espece) values(:genre,:espece)");
$requete->bindParam(":genre", $genre);
$requete->bindParam(":espece", $espece);

$requete->execute();

//var_dump($genre);
//var_dump($espece);
header("location: ../index.php");

