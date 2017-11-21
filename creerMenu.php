<?php
session_start();
include('include/header.php');
include('include/barrenav.php');
 ?>

 <div class="row">
     <section class="col-lg-8">
      <h2><span class="label label-default">Ajouter un nouveau menu</span></h2>

  <form id="form" class="col-lg-8" action="traitementMenu.php" method="post">
    <fieldset>
        <legend>Création de nouveau menu</legend>
          <label for="nom">Nom du menu: </label>
          <input autofocus="autofocus" required="required" class="form-control" type="text" name="nom" id="nom" /></br></br>

          <label for="prix">Prix: </label>
          <div class="input-group"><input autofocus="autofocus" placeholder="euros" class="form-control" type="text" name="prix" id="prix" /><span class="input-group-addon">€</span></div></br></br>

        <button name="commit" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-check"></span> Valider</button>
    </fieldset>
  </form>
</section>
</div>
<?php
include('include/footer.php');
 ?>
