<?php
session_start();
include("config/connection.php");
if (isset($_GET['id']) && !empty($_GET['id'])) {
 $id = $_GET['id'];

 $sql1 = "DELETE FROM menu_plat WHERE id_plat = :id";
 $q = array('id' => $id);
 $req = $bdd -> prepare($sql1);
 $req -> execute($q);

 $sql = "DELETE FROM plat WHERE id = :id";
 $q = array('id' => $id);
 $req = $bdd -> prepare($sql);
 $req -> execute($q);
 header('Location:plat.php');
}
?>
