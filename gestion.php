<?php
session_start();
 if (!(isset($_SESSION['login']) && $_SESSION['password'])) {
$_SESSION['login'] = $_POST['login'];
$_SESSION['password'] = $_POST['password'];
}
include('include/header.php');
include('include/barrenav.php');
 if (isset($_SESSION['login']) && $_SESSION['password']) {
   echo '
<div class="row">
  <div class="jumbotron">
  <h1 class="text-center">Gestionnaire du restaurant</h1>
  </br></br>
  <p class="text-center"><a href="deconnection.php" class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-remove-circle"></span> Déconnexion</a></p>
  </div>
</div>
</br></br>
  <div class="row">
    <div class="col-lg-offset-1 col-lg-4">
      <h2><a href="creerPlat.php"><span class="label label-default">Création de plat</span></a></h2>
    </div>
    <div class="col-lg-offset-1 col-lg-4">
      <h2><a href="plat.php"><span class="label label-default">Liste des plats</span></a></h2>
    </div>
  </div>
</br></br>
  <div class="row">
    <div class="col-lg-offset-3 col-lg-4">
      <h2><a href="creerMenu.php"><span class="label label-default">Création de menu</span></a></h2>
    </div>
    <div class="col-lg-offset-1 col-lg-4">
      <h2><a href="menu.php"><span class="label label-default ">Liste des menus</span></a></h2>
    </div>
  </div>
  </br></br>'
;
      }
        else {
          echo 'accès denied';
        }

include('include/footer.php');
 ?>
