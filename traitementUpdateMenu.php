<?php
session_start();
include("config/connection.php");
if (isset($_GET['id']) && !empty($_GET['id'])) {
 $id = $_GET['id'];
 // update le nom du menu et le prix
 $req = $bdd->prepare('UPDATE menu SET nom=:nom, prix=:prix WHERE id=:id');
 $req->execute(array('id' => $id, 'nom' => $_POST['nom'], 'prix' => $_POST['prix']));

 $sql1 = "DELETE FROM menu_plat WHERE id_menu = :id";
 $q = array('id' => $id);
 $req = $bdd -> prepare($sql1);
 $req -> execute($q);

 if (isset($_POST['checkbox'])){
var_dump($_POST['checkbox']);
foreach($_POST['checkbox'] as $k => $check){

 $check=intval($check);


 $req2 = $bdd->prepare('INSERT INTO menu_plat(id_menu, id_plat) VALUES(:menu, :checkbox)');
 $req2->execute(array(
  'menu' => $id,
  'checkbox' => $check
  ));
}

}
 header('Location:menu.php');
 }
 else {
   echo 'Aucun plat n/a été selectionné ! Veuillez recommencer !';
 }
?>
