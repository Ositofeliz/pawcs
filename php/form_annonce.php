<?php
include "header.php";
?>


<script style="text/javascript" src="/Cours/TechnoWeb/PROJET/pawcs/js/form_annonce.js"></script>
<div class="row">
  <div class="col text-center">
    <h1>Votre annonce</h1>
  </div>
</div>
<div class="row">
  <div class="col text-center">

<?php
if(isset($_SESSION["pseudo"])){

  echo '
    <form id="form-annonce">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputNom">Nom</label>
          <input name="nom" type="text" class="form-control" id="inputNom" placeholder="Gerceval" required>
        </div>
        <div class="form-group col-md-8">
          <label for="inputTitre">Titre</label>
          <input name="titre" type="text" class="form-control" id="inputTitre" placeholder="Jeu du sloubi sans les poutres (les bouts de bois sont fournis)" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="inputCategorie">Categorie</label>
          <input name="categorie" type="text" class="form-control" id="inputCategorie" placeholder="Loisirs" required>
        </div>
        <div class="form-group col-md-3">
          <label for="inputPrix">Prix</label>
          <input name="prix" type="number" class="form-control" id="inputPrix" placeholder="Prix en or" required>
        </div>
        <div class="form-group col-md-3">
          <label for="inputLat">Latitude</label>
          <input name="latitude" type="number" class="form-control" id="inputLat" placeholder="Latitude" required>
        </div>
        <div class="form-group col-md-3">
          <label for="inputLong">Longitude</label>
          <input name="longitude" type="number" class="form-control" id="inputLong" placeholder="Longitude" required>
        </div>
      </div>
      <div class="form-group">
        <label for="inputDescription">Description</label>
        <textarea name="description" class="form-control" id="inputDescription" placeholder="Jeu sloobi presque neuf. Contient 50 bouts de bois de 2 pouces, 50 bouts de bois de 3 pouces, 50 bouts de bois de 4 pouces et ainsi de suite. Les 50 poutres de la longueur de la pi&#232ce dans laquelle vous jouez ne sont pas fournies" required></textarea>
      </div>
      <div class="form-group">
        <label for="inputImage">Image</label>
        <input name="image" type="text" class="form-control" id="inputImage" placeholrd="http://www.trolls-et-k.com/uploads/Medias/959/23/G_pim_66_1385626049.jpg" required>
      </div>
      <button type="submit" class="btn btn-secondary">Valider votre annonce</button>
    </form>';

} else {
  echo "<h5> Vous devez être <a class='text-secondary' href='/Cours/TechnoWeb/PROJET/pawcs/php/connexion.php'>connecté(e)</a> pour envoyer une annonce !</h5>"; 
}

?>
  </div>
</div>

<?php
include "footer.php";
?>
