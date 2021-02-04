<?php 

session_start();
include "bdd.php";
$bdd=connexionbd();

if(isset($_SESSION['pseudo'])) {
  $requete = "DELETE from nedss.annonces WHERE id=".$_GET['id'].";";
  requete($bdd, $requete);
  header("refresh:0, url=/Cours/TechnoWeb/PROJET/pawcs/php/dynannonces.php");
}

?>
