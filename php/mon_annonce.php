<?php 

session_start();
include "bdd.php";
$bdd=connexionbd();

echo "TITRE : ". $_REQUEST['titre'];

if (isset($_SESSION["pseudo"])) {
  if (isset($_REQUEST)) {
    $requete = "INSERT INTO nedss.annonces VALUES" .
      "(DEFAULT, '" .
      $_REQUEST["titre"] . "','" .
      $_REQUEST["description"] . "','" .
      $_REQUEST["categorie"] . "','" .
      $_REQUEST["nom"] . "','" .
      $_REQUEST["prix"] . "','" .
      $_REQUEST["image"] . "','" .
      $_REQUEST["latitude"] . "','" .
      $_REQUEST["longitude"] . "', DEFAULT);";
    requete($bdd, $requete);
  }
}



?>
