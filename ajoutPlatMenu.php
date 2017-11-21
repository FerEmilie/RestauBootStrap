<?php
session_start();
include('include/header.php');
include('include/barrenav.php');
 ?>

 <div class="row">
  <section class="col-sm-8">
    <h2><span class="label label-default">Completer le menu</span></h2>
      <p class="clair">Retour création de menu: <a class="link" href="creerMenu.php">ici</a></p>
      <p class="clair">Retour création de plat: <a class="link" href="creerPlat.php">ici</a></p>
<?php
  // Connexion à la base de données
  include("config/connection.php");
  $idmenu = $_GET['id'];
  echo '<form id="form" class="col-lg-8" method="post" action="traitementAjout.php?id='.$idmenu.'">';
  echo '<fieldset><legend>Veuillez complèter le menu n° ' . $_GET['id'] . '</legend><br/>';
  echo '<p>Cochez les plats à ajouter au menu: </p>';
     $reponse = $bdd->query('SELECT plat.id AS id_plat, nom_plat FROM plat ORDER BY id_type_plat');
       echo'<div class="items">';
        while ($donnees = $reponse->fetch())
       {
			   echo'<input class="form-control" id="item'.$donnees['id_plat'].'" type="checkbox" name="checkbox[]" value="'.$donnees['id_plat'].'" /><label for="item'.$donnees['id_plat'].'">'.$donnees['nom_plat'].'</label>';
      }

      echo '<h2 class="done" aria-hidden="true">Ajouté</h2><h2 class="undone" aria-hidden="true">A choisir</h2></div>';
		 echo '<button name="commit" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-check"></span> Valider</button></fieldset></form>';

  $reponse->closeCursor();
  ?>
</section>
</div>
  <?php
  include('include/footer.php');
   ?>
