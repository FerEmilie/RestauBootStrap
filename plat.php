 <?php
 session_start();
 include('include/header.php');
 include('include/barrenav.php');
  ?>
 <?php
 // Connexion à la base de données
 include("config/connection.php");
 // Récupération des 10 derniers messages

echo '<div class="row">';
 $reponse = $bdd->query('SELECT * FROM plat
WHERE id_type_plat= 1
ORDER BY prix');
 echo '<div class="col-lg-12"><h3>Liste des entrées</h3>';
 while ($donnees = $reponse->fetch())
 {
    	echo '<div class="col-lg-3">
    <div class="thumbnail">
      <img class="img-thumbnail" src="uploads/' . $donnees['image'] . '" alt="image du plat" />
      <div class="caption">
        <h4>' . $donnees['nom_plat'] . ' ~ ' . $donnees['prix'] . ' euros</h4>
        <p><a class="btn-sm btn-danger" role="button" href="delete.php?id=' . $donnees['id'] . '"><span class="glyphicon glyphicon-trash"></span></a>
        <a class="btn-sm btn-info" role="button" href="updatePlat.php?id=' . $donnees['id'] . '&nom=' . $donnees['nom_plat']
        . '&prix=' . $donnees['prix'] . '"><span class="glyphicon glyphicon-wrench"></span></a></p>
      </div>
    </div>
  </div>';

 }
 echo '</div>';

 $reponse = $bdd->query('SELECT * FROM plat
WHERE id_type_plat= 2
ORDER BY prix');
 echo '<div class="col-lg-12"><h3>Liste des plats</h3>';
 while ($donnees = $reponse->fetch())
 {
   echo '<div class="col-lg-3">
 <div class="thumbnail">
   <img class="img-thumbnail" src="uploads/' . $donnees['image'] . '" alt="image du plat" />
   <div class="caption">
     <h4>' . $donnees['nom_plat'] . ' ~ ' . $donnees['prix'] . ' euros</h4>
     <p><a class="btn-sm btn-danger" role="button" href="delete.php?id=' . $donnees['id'] . '"><span class="glyphicon glyphicon-trash"></span></a>
     <a class="btn-sm btn-info" role="button" href="updatePlat.php?id=' . $donnees['id'] . '&nom=' . $donnees['nom_plat']
     . '&prix=' . $donnees['prix'] . '"><span class="glyphicon glyphicon-wrench"></span></a></p>
   </div>
 </div>
</div>';
 }
 echo '</div>';

 $reponse = $bdd->query('SELECT * FROM plat
WHERE id_type_plat= 3
ORDER BY prix');
 echo '<div class="col-lg-12"><h3>Liste des dessert</h3>';
 while ($donnees = $reponse->fetch())
 {
   echo '<div class="col-lg-3">
 <div class="thumbnail">
   <img class="img-thumbnail" src="uploads/' . $donnees['image'] . '" alt="image du plat" />
   <div class="caption">
     <h4>' . $donnees['nom_plat'] . ' ~ ' . $donnees['prix'] . ' euros</h4>
     <p><a class="btn-sm btn-danger" role="button" href="delete.php?id=' . $donnees['id'] . '"><span class="glyphicon glyphicon-trash"></span></a>
     <a class="btn-sm btn-info" role="button" href="updatePlat.php?id=' . $donnees['id'] . '&nom=' . $donnees['nom_plat']
     . '&prix=' . $donnees['prix'] . '"><span class="glyphicon glyphicon-wrench"></span></a></p>
   </div>
 </div>
</div>';
 }

 echo '</div></div>';
 $reponse->closeCursor();
 ?>
 <?php
 include('include/footer.php');
  ?>
