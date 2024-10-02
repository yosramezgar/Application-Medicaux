<?php
include("connexion.php");
// Appel de la fonction de connexion
$bdd = maConnexion();
if (isset($_REQUEST['nom']) && !empty($_REQUEST['nom']))
$nom=$bdd->quote($_REQUEST['nom']);
else die ("<p>Nom non defini ou saisi</p>");

if (isset($_REQUEST['prix']) && !empty($_REQUEST['prix']))
$prix=$bdd->quote($_REQUEST['prix']);
else die ("<p>Prix non defini ou saisi</p>");

if (isset($_REQUEST['description']) && !empty($_REQUEST['description']))
$description=$bdd->quote($_REQUEST['description']);
else die ("<p>description non defini ou saisi</p>");
if (isset($_REQUEST['numero_identification']) && !empty($_REQUEST['numero_identification']))
$numero_identification=$bdd->quote($_REQUEST['numero_identification']);
else die ("<p>numero_identification non defini ou non saisi</p>");
if (isset($_REQUEST['date_expiration']) && !empty($_REQUEST['date_expiration']))
$date_expiration=$bdd->quote($_REQUEST['date_expiration']);
$sql="INSERT INTO gestion_de_produit VALUES(NULL,$nom,$prix,$description,$numero_identification,$date_expiration)";
$nblignes=$bdd->exec($sql);

?>
<p class='temps'>produit ajoute! </P> <br>
<?php
echo "Votre numero d'identifiant est : ".$bdd->lastInsertId();
?></p>
<?php $bdd=null; ?>