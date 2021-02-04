<?php 
include "bdd.php";

header("Content-type: application/json");

$maBd = connexionbd(); 

$resultat = $maBd->query("SELECT * FROM nedss.annonces ORDER BY id DESC LIMIT 1");
$annonce = $resultat->FetchAll(PDO::FETCH_ASSOC);

// HTTP OK
http_response_code(200);

echo json_encode($annonce);

?>
