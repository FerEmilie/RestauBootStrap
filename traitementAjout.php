<?php
session_start();
	  include("config/connection.php");

    if (isset($_POST['checkbox'])){
		var_dump($_POST['checkbox']);
		foreach($_POST['checkbox'] as $k => $check){
    $check=intval($check);

    $nvMenu = $_GET['id'];
    var_dump($nvMenu);

    $req = $bdd->prepare('INSERT INTO menu_plat(id_menu, id_plat) VALUES(:menu, :checkbox)');
    $req->execute(array(
    	'menu' => $nvMenu,
    	'checkbox' => $check
    	));
		//
    header('Location: menu.php');
	}
}
	else
	{
		echo 'pas de modifs';

	}
?>
