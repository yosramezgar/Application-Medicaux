<?php 
function maConnexion() {
 $serveur = "localhost";
 $login = "root";
 $password = "";
 
 try{
$bdd = new PDO('mysql:host=localhost;dbname=g_produit', 'root', '');
$bdd->query("SET NAMES 'utf8'");
return $bdd;
 }
 catch (PDOException $e)
{
die('Erreur : ' . $e->getMessage());
}
}
?>