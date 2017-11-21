<?php
session_start();
include('include/header.php');
include('include/barrenav.php');
 ?>

 <div class="row">
     <section class="col-lg-8">
    <form id="form" class="col-lg-8" method="post" action="traitementUpdate.php?id=<?php echo $_GET['id']; ?>">
      <fieldset>
        <legend>Vous avez choisi de modifier le plat n°: <?php echo $_GET['id']; ?> </legend>
         <label for="nom">Nouveau Nom du plat: </label>
         <input class="form-control" autofocus="autofocus" placeholder="Actuel -> <?php echo $_GET['nom']; ?>" required="required" type="text" name="nom" id="nom" /></br></br>

         <label for="prix">Nouveau Prix: </label>
         <input class="form-control" autofocus="autofocus" placeholder="Actuel -> <?php echo $_GET['prix']; ?> euros" type="text" name="prix" id="prix" /></br></br>

         <button name="commit" class="btn btn-block btn-lg btn-success"><span class="glyphicon glyphicon-check"></span> Valider</button>
       </fieldset>
     </form>
   </section>
 </div>

     <?php
     include('include/footer.php');
      ?>
