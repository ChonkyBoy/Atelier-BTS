<?php

#récup les données
$nom = filter_input(INPUT_POST, "nom");
$commune = filter_input(INPUT_POST, "commune");
$departement = filter_input(INPUT_POST, "departement");
$superficie = filter_input(INPUT_POST, "superficie");


#connexion BDD
include_once "../Config.php";
$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::USERNAME, Config::PASSWORD);
$requete = $pdo->prepare("insert into plage(nom,commune,departement,superficie) values(:nom,:commune,:departement,:superficie)");
$requete->bindParam(":nom", $nom);
$requete->bindParam(":commune", $commune);
$requete->bindParam(":departement", $departement);
$requete->bindParam(":superficie", $superficie);
$requete->execute();
//echo $nom;
//echo $commune;
//echo $departement;
//echo $superficie;
header("location: ../index.php");

