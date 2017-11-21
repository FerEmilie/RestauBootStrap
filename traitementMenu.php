<?php
session_start();
// Connexion à la base de données
include("config/connection.php");

// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO menu (nom, prix) VALUES(:nom, :prix)');
$req->execute(array('nom' => $_POST['nom'], 'prix' => $_POST['prix']));

$idDernierMenu = $bdd->lastInsertId();  // Récupération du dernier id entré en base
$idDernierMenu = intval($idDernierMenu);
var_dump($idDernierMenu);
// Redirection du visiteur
header('Location: ajoutPlatMenu.php?id='.$idDernierMenu);
?>
