 <?php
 session_start();
 include("config/connection.php");
 if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id = $_GET['id'];
  $req = $bdd->prepare('UPDATE plat SET nom_plat=:nom, prix=:prix WHERE id=:id');
  $req->execute(array('id' => $id, 'nom' => $_POST['nom'], 'prix' => $_POST['prix']));
  header('Location:plat.php');

 }
 ?>
