<?php
session_start();
 if (isset($_SESSION['login']) && $_SESSION['password']) {
      session_start();
      $id = $_GET['id'];
      if ($id == 1) {
          header('Location: plat.php');
      }
      if ($id == 2) {
          header('Location: menu.php');
      }
      if ($id == 3) {
          header('Location: gestion.php');
      }

 }

include('include/header.php');
include('include/barrenav.php');

if (isset($_POST['login'])) {

include("config/connection.php");
$req = $bdd->prepare('SELECT password FROM users WHERE login = :login');
$req->execute(array('login' => $_POST['login']));
$result = $req->fetch(PDO::FETCH_ASSOC);
$hash = $result['password'];
$pass = $_REQUEST['password'];
if(password_verify($pass, $hash)){
echo 'mot de passe valide !';
header('Location: gestion.php');
}else{
echo 'mot de passe invalide';
}
}
?>

<div class="row">
  <section class="col-sm-8">
  <h2><span class="label label-default">Accès à l'admin</span></h2>
  <form class="col-lg-6" id="form" action="gestion.php" method="post">
    <fieldset>
        <legend>Merci de vous connecter</legend>

    <label for="login">Login</label>
    <input class="form-control" id="login" type="text" name="login" /></br></br>

    <label for="password">Password</label>
    <input class="form-control" id="password" type="password" name="password" /></br></br>

    <button name="commit" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-check"></span> Login</button>
    </fieldset>
    </form>
  </section>
  </div>
<?php
include('include/footer.php');
 ?>
