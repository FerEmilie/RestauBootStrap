<?php
session_start();
include('include/header.php');
include('include/barrenav.php');
 ?>

<div class="row">
    <section class="col-lg-8">
  <h2><span class="label label-default">Ajouter un nouveau plat</span></h2>
  <form id="form" class="col-lg-8" action="traitement.php" enctype="multipart/form-data" method="post">
    <fieldset>

        <legend>Création de nouveau plat</legend>
          <label for="nom">Nom du plat: </label>
          <input autofocus="autofocus" required="required" class="form-control" type="text" name="nom" id="nom" /></br></br>

          <?php
          include("config/connection.php");

          $reponse = $bdd->query('SELECT id, type_plat FROM  categorie');
           echo '<label for="type">Type du plat: </label>';
           echo '<select class="form-control" id="type" name="type">';

            while ($donnees = $reponse->fetch())
            {
               echo '<option value="' . $donnees['id'] . '">'. $donnees['type_plat'] .'</option>';

            }
             echo '</select></br></br>';
           ?>

            <label for="prix">Prix: </label>
          <div class="input-group">
            <input autofocus="autofocus" class="form-control" type="text" name="prix" id="prix" /><span class="input-group-addon">€</span></div></br></br>

            <label for="image">Votre photo de plat :</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
            <input type="file" name="image" id="image" /></br></br>
      <button name="commit" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-check"></span> Valider</button>
      <!-- <input class="btn btn-success btn-lg" type="submit" name="commit" value="Valider" /></br></br> -->
   </fieldset>
  </form>
</div>
</div>
<?php
include('include/footer.php');
 ?>
