<?php

#récup l'id de la plage à del
$id = filter_input(INPUT_POST, "id");

#connexion BDD
include_once "../Config.php";
$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::USERNAME, Config::PASSWORD);
#requete pour delete la plage
$requete = $pdo->prepare("delete from plages where id=:id");
$requete->bindParam(":id", $id);
#j'exe la commande t'as captééééééééééé
$requete->execute();

header("location: ../etudes.php");


