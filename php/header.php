<?php
session_start();
?>

<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>OURS, annonces en ligne</title>
  <link rel="stylesheet" href="/Cours/TechnoWeb/PROJET/pawcs/assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="/Cours/TechnoWeb/PROJET/pawcs/assets/customCSS/custom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script style="text/javascript" src="/Cours/TechnoWeb/PROJET/pawcs/assets/bootstrap/js/bootstrap.js"></script>

</head>
<body>
  <div class="container">

    <div class="row bg-dark mb-5 rounded">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
         
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ours-navbar" aria-controls="ours-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="ours-navbar">
            <a class="navbar-brand" href="/Cours/TechnoWeb/PROJET/pawcs/index.php" title="Accueil">
              <img id="ours-logo" src="/Cours/TechnoWeb/PROJET/pawcs/assets/fig/main_logo.png">
            </a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link text-light" href="/Cours/TechnoWeb/PROJET/pawcs/php/all_annonces.php"> Toutes nos annonces </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="/Cours/TechnoWeb/PROJET/pawcs/php/dynannonces.php"> Annonces & Recherche </a>
              </li>
            </ul>

            <?php
              if(isset($_SESSION["pseudo"])) {
                echo "
                  
                  <a href='/Cours/TechnoWeb/PROJET/pawcs/php/deconnexion.php' type='button' class='btn btn-lg btn-secondary'> Se d&eacuteconnecter (".$_SESSION["pseudo"].") </a>";
              } else {
                echo "
                  <a href='/Cours/TechnoWeb/PROJET/pawcs/php/connexion.php' type='button' class='btn btn-lg btn-secondary'> Se connecter </a>";
              }
            ?>
              
          </div>
        </nav>
      </div>
    </div>

