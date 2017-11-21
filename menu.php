<?php
session_start();
include('include/header.php');
include('include/barrenav.php');
 ?>
 <div class="row">

<?php
// Connexion à la base de données
include("config/connection.php");
// Récupération des menus et des plats associés
$reponse = $bdd->query('SELECT menu.id as idmenu, menu.prix as prix_menu, nom, GROUP_CONCAT(nom_plat SEPARATOR "-") AS concat_nom_plat FROM menu_plat
LEFT JOIN plat ON id_plat= plat.id
LEFT JOIN menu ON id_menu = menu.id
GROUP BY menu.id
ORDER BY prix_menu
');
echo '<div class="col-sm-12"><h2>Liste des menus et leur composition</h2>';


while ($donnees = $reponse->fetch())
{
  if (isset($donnees['nom']) && !empty($donnees['nom'])) {
  echo '<div class="col-lg-4"><div class="thumbnail">' . '<h3>' . $donnees['nom'] . '</h3><p> ' . $donnees['concat_nom_plat'] . ' - ' . $donnees['prix_menu'] . ' euros.</p><p><a class="btn-sm btn-danger" role="button" href="deleteMenu.php?id=' . $donnees['idmenu'] . '"><span class="glyphicon glyphicon-trash"></span></a>
  <a class="btn-sm btn-info" role="button" href="updateMenu.php?id=' . $donnees['idmenu'] . '&plat=' . $donnees['concat_nom_plat'] .'"><span class="glyphicon glyphicon-wrench"></span></a></p></div></div>';

}
}

echo '</div>';
$reponse->closeCursor();
?>
</div>
<?php
include('include/footer.php');
 ?>
