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
else die ("<p>description non defini ou non saisi</p>");

if (isset($_REQUEST['numero_identification']) && !empty($_REQUEST['numero_identification']))
$numero_identification=$bdd->quote($_REQUEST['numero_identification']);
else die ("<p>numero_identification non defini ou non saisi</p>");

if (isset($_REQUEST['date_expiration']) && !empty($_REQUEST['date_expiration']))
$date_expiration=$bdd->quote($_REQUEST['date_expiration']);
else die ("<p>date_expiration non defini ou non saisi</p>");


$code=$bdd->quote($_REQUEST['Id']);
$requete=" UPDATE gestion_de_produit SET Nom=$nom, Prix=$prix, Description=$description, Numero_identification=$numero_identification, Date_expiration=$date_expiration WHERE Id=$code";
$nblignes=$bdd->exec($requete);
if($nblignes!=1)
die("<p> Impossible d'effectuer la requete!".$bdd->errorInfo()[2]."</p>");

else
echo "<p class='temps'>Enregistrement modifie avec succes! </p>";
$requete1="select * from gestion_de_produit where Id = $code";
$reponse1 = $bdd->query($requete1);
$ligne = $reponse1->fetchObject();
?> <p>Nom:<?php echo $ligne->Nom;?><br />
Prix:<?php echo $ligne->prix;?><br/>
Description:<?php echo $ligne->Description;?><br />
Numero d'identification:<?php echo $ligne->Numero_identification;?><br />
Date d'expiration:<?php echo $ligne->Date_expiration;?></p>
<?php $bdd=null; ?>