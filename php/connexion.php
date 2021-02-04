<?php
include "header.php";
?>

<!--

<script type="text/javascript" src="/Cours/TechnoWeb/PROJET/pawcs/js/connexion.js"></script>
-->

<?php
include "bdd.php";
$bdd=connexionbd();

if(isset($_SESSION["pseudo"]) && isset($_SESSION["mdp"])) {
  echo "
    <div class='row'>
      <div class='col text-center'>
        <h1> Vous &ecirctes d&eacutej&agrave connect&eacute(e) en tant que " . $_SESSION["pseudo"]. ".</h1>
          <p class='h6'><small> <a href='/Cours/TechnoWeb/PROJET/pawcs/index.php'>Retour</a></small></p>
      </div>
    </div>";
} else {

  if(isset($_POST["pseudo"]) && isset($_POST["mdp"])) {

    $requete = "SELECT mdp from nedss.log WHERE pseudo = '". $_POST['pseudo'] . "';";
    $resultat = requete($bdd, $requete);

    if ($resultat) {
      if ($resultat[0]["mdp"] == $_POST["mdp"]) {
        $_SESSION["pseudo"] = $_POST["pseudo"];
        $_SESSION["mdp"] = $_POST["mdp"];
        echo "
          <div class='row'>
            <div class='col text-center'>
              <h1> Vous connect&eacute(e) en tant que " . $_SESSION["pseudo"]. ".</h1>
              <p class='h6'><small> <a href='/Cours/TechnoWeb/PROJET/pawcs/index.php'>Retour</a></small></p>
            </div>
          </div>"; 
        header("refresh:1, url=/Cours/TechnoWeb/PROJET/pawcs/index.php");
      } else {
        echo "
          <div class='row'>
            <div class='col text-center'>
              <h1>Mot de passe incorrect, veuillez recommencer !</h1>
            </div>
          </div>"; 
      }
    } else {

      echo "
        <div class='row'>
          <div class='col text-center'>
            <h1>Nom d'utilisateur (" . $_POST["pseudo"] . ") introuvable !</h1>
          </div>
        </div>"; 

    }

  } else {
    
    echo "
      <div class='row'>
        <div class='col text-center'>
          <h1>Veuillez entrer vos indentifiants de connexions !</h1>
          <form id='form-connexion' method='post'>
            <div class='form-group'>
              <label for='pseudo'>Pseudo</label>
              <input name='pseudo' type='text' class='form-control' id='form-pseudo' placeholder='Votre pseudo' required>
            </div>
            <div class='form-group'>
              <label for='inputPassword'>Mot de passe</label>
              <input name='mdp' type='password' class='form-control' id='form-mdp' placeholder='Votre mot de passe' required>
            </div>
            <button type='submit' class='btn btn-secondary'>Connexion</button>
          </form>
        </div>
      </div>"; 
  }

}



include "footer.php";

