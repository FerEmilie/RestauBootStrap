<?php
session_start();
// Connexion à la base de données
include("config/connection.php");

// verif de l'envoie image
if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0){
          if ($_FILES['image']['size'] <= 1000000){
              $infosfichier = pathinfo($_FILES['image']['name']);
              $extension_upload = $infosfichier['extension'];
              $extensions_autorisees = array('jpg', 'jpeg', 'png', 'txt','odt','pdf');
                if (in_array($extension_upload, $extensions_autorisees)){
                  move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.basename($_FILES['image']['name']));

              }
          }
  }
$image = basename($_FILES['image']['name']);

// Insertion du message à l'aide d'une requête préparée
var_dump($_POST['type']);
$req = $bdd->prepare('INSERT INTO plat (nom_plat, id_type_plat, prix, image) VALUES(:nom, :type, :prix, :image)');
$req->execute(array('nom' => $_POST['nom'], 'type' => $_POST['type'], 'prix' => $_POST['prix'], 'image' => $image));
// Redirection du visiteur
header('Location: creerPlat.php');


?>
