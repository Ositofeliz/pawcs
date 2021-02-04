<?php 
include "bdd.php";

header("Content-type: application/json");

$maBd = connexionbd(); 

$keyword = isset($_REQUEST["recherche"]) ? $_REQUEST["recherche"] : NULL;

if ($keyword) {
  $req = "SELECT * FROM nedss.annonces WHERE titre LIKE '%". $keyword . "%' OR description LIKE '%" . $keyword . "%' OR categorie = '" . $keyword."';";
  $resultat = requete($maBd, $req);  
  echo json_encode($resultat);

} else {
  $req = "SELECT * FROM nedss.annonces;"; 
  $resultat = requete($maBd, $req);  
  echo json_encode($resultat);
}

http_response_code(200);

?>
