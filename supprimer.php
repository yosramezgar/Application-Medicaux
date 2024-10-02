<SCRIPT src="formulaire.js"></SCRIPT>
<?php
include("connexion.php");
$bdd = maConnexion(); 
$sql = "SELECT * FROM gestion_de_produit ORDER BY Id" ;
$reponse = $bdd->query($sql) or die ($bdd->errorInfo()[2]);
echo"<p>Nombre de produit:". $reponse->rowCount()."</p>"; 
?><table><tr><th>Code</th><th>Nom</th><th>prix</th><th>Description</th><th>Numero_identification</th><th>Date_expiration</th><th>Suppression</th></tr> 
<?php
while($enregistrement=$reponse->fetchObject()){
echo "<tr>";
echo "<td> $enregistrement->id</td> ";
echo "<td> $enregistrement->Nom</td> ";
echo "<td> $enregistrement->prix</td> ";
echo "<td> $enregistrement->Description</td> ";
echo "<td> $enregistrement->Numero_identification</td> ";
echo "<td> $enregistrement->Date_expiration</td> ";
echo("<td><a href='#'onClick='confirme($enregistrement->id)'>supprimer</a></td>");
echo "</tr>";} ?> </table>


