<?php 
include "header.php";
$PSEUDO_TEMP = $_SESSION["pseudo"];
// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();

echo"

  <div class='row'>
    <div class='col text-center'>
      <h1> Merci de votre visite !</h1>
      </br></br></br>
      <h6> A bient&ocirct j'esp&egravere, ".$PSEUDO_TEMP." !</h6>
    </div>
  </div>"; 
header("refresh:1; url=/Cours/TechnoWeb/PROJET/pawcs/index.php");


include "footer.php";

?>

