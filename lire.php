<!DOCTYPE html>
<html>
<head><title>Affichage</title><meta charset="utf-8" />
</head>
<body>
<?php
include("connexion.php");
// Appel de la fonction de connexion
$bdd = maConnexion(); 
/*Exécution de la requête de sélection et récupération du résultat 
dans $response */
$reponse=$bdd->query('SELECT * FROM gestion_de_produit')or die($bdd->errorInfo()[2]);
// Affichage du nombre d’inscriptions
echo"<p>la gestion de produit:".$reponse->rowCount()."</p>";
/* boucle d’affichage */
while($ligne=$reponse->fetchObject()){
?>
<p>
Nom: <?php echo $ligne->Nom; ?><br />
prix: <?php echo $ligne->prix; ?><br />
Description: <?=$ligne->Description; ?><br />
Numero_identification: <?=$ligne->Numero_identification; ?><br />
Date_expiration: <?=$ligne->Date_expiration; ?> 
</p> <hr/>
<?php
}// fin while
/* Termine le traitement de la requête et libère la mémoire occupée par le 
résultat obtenu*/
$reponse->closeCursor(); 
//fermer la connexion
$bdd=null;?>
</body></html>