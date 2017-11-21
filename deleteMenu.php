<?php
session_start();
include("config/connection.php");
if (isset($_GET['id']) && !empty($_GET['id'])) {
 $id = $_GET['id'];

 $sql1 = "DELETE FROM menu_plat WHERE id_menu = :id";
 $q = array('id' => $id);
 $req = $bdd -> prepare($sql1);
 $req -> execute($q);

 $sql = "DELETE FROM menu WHERE id = :id";
 $q = array('id' => $id);
 $req = $bdd -> prepare($sql);
 $req -> execute($q);
 header('Location:menu.php');
}
?>
