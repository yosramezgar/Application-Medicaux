<?php
include("connexion.php");
$bdd = maConnexion(); 
$code=$bdd->quote($_REQUEST["code"]);
$sql="DELETE FROM gestion_de_produit WHERE id=".$code;
$nblignes=$bdd->exec($sql);
if($nblignes!=1)
	die("<p> impossible d'effectuer la requete!".$bdd->errorInfo()[2]."</p>)");
else{
echo "<p class='temps'>Enregistrement supprime avec succes! </p>";
echo "<script>";
echo "window.location.replace('supprimer1.php')";
echo "</script>";
}
$bdd=null; 
?>