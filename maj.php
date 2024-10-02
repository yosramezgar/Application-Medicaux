<?php
if (isset($_REQUEST['code']) && !empty($_REQUEST['code']))
$code=$_REQUEST['code'];
else die ("<p>Id non defini</p>");
if(!is_numeric($code))
die("<p>Veuillez saisir un code numerique</p>");
include("connexion.php");
// Appel de la fonction de connexion
$bdd = maConnexion();
// Appel de la fonction de connexion
$sql="SELECT*FROM gestion_de_produit WHERE Id=".$bdd->quote($code);
$reponse = $bdd->query($sql) or die ($bdd->errorInfo()[2]);
$enregistrement=$reponse->fetchObject();
 if ($reponse->rowCount()==0)

echo"<p class='temps'>Eregistrement non existant >";
else
{ ?>
<link rel="stylesheet" href="majphp.css">
<form Method="POST" Action="maj2.php" name="form1">
<p><input type="hidden" name="Id" value="<?PHP echo $code; ?>" /></p>
<table class="Tableau">
<tr> <td class="temps">Nom : </td> <td><input type="text" size="30" name="nom"
value="<?=$enregistrement->Nom;?>"/></td></tr>

<tr><td class="temps">Prix : </td><td><input type="text" size="30"
name="prix"value="<?=$enregistrement->prix;?>"./></td></tr>

<tr><td class="temps">Description : </td><td><input name="description" type="text" size="30"
value="<?=$enregistrement->Description;?>"/></td></tr>

<tr><td class="temps">Numero d'identification : </td><td><input name="numero_identification" type="text" size="30"
value="<?=$enregistrement->Numero_identification;?>"/></td></tr>

<tr><td class="temps">Date d'expiration : </td><td><input name="date_expiration" type="text" size="30"
value="<?=$enregistrement->Date_expiration;?>"/></td></tr>

<tr>
<td colspan="2"><input  type="submit"
value="Envoyer" name="Send"> <input type="reset" name="Submit"
value="R&eacute;tablir"></td> </tr> </table> </form> <?php } ?>