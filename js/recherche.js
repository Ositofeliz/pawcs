document.addEventListener('DOMContentLoaded', function() {

  var divAnnonces = document.querySelector('#liste-annonces');
  var logAnnonces = document.querySelector('#annonces-login');
  var formulaire = document.querySelector("#recherche");
  
  formulaire.addEventListener("submit", function(e) {
    var donneesFormulaire = new FormData(formulaire);
    var requeteEnvoi = new XMLHttpRequest();
    var requete = new XMLHttpRequest();
    requeteEnvoi.open("POST", "/Cours/TechnoWeb/PROJET/pawcs/php/get_info.php");
    requeteEnvoi.send(donneesFormulaire);
    requeteEnvoi.addEventListener("load", function() {
      var annonces = JSON.parse(this.responseText);
      var annoncesStructurees = '';
      if (logAnnonces) {
        for (var i=0; i < annonces.length; i++) {
          var myID = annonces[i].id;
          console.log(myID);
          annoncesStructurees += "<div class='row border border-dark rounded m-2 text-center'>" +
            "<div class='col-4 cell-align'>" +
            "<a href='" + annonces[i].photo + "' >" +
            "<img src='" + annonces[i].photo + "' class='img-thumbnail' alt='Photo annonce' title='Cliquez pour aggrandir' />" +
            "</a>" +
            "</div>" + 
            "<div class='col-6 cell-align'>" +
            "<div>" +
            "<p class='font-weight-bold text-left'>" + annonces[i].titre + "</p>" +
            "<p class='text-left'>" + annonces[i].categorie + "</p>" +
            "<p class='text-justify'>" + annonces[i].description + "</p>" +
            "<p class='text-secondary text-left font-weight-bold'>" + annonces[i].prix + " euros </p>" +
            "<p class='text-right'><small>" + annonces[i].date_ajout + "</small></p>" +
            "</div>" +
            "</div>" +
            "<div class='col-2 cell-align'>" +
            // Passage en brut pour l'ID, le temps de trouver une solution temp
            "<a class='btn btn-danger' href='/Cours/TechnoWeb/PROJET/pawcs/php/suppression.php?id="+myID+"' role='button'>Supprimer</a>" +
            "</div>" +
            "</div>";
        }
        requete.open("GET", "/Cours/TechnoWeb/PROJET/pawcs/php/suppression.php");
        requete.send();
        logAnnonces.innerHTML = annoncesStructurees;
        } else {
          for (var i=0; i < annonces.length; i++) {
            annoncesStructurees += "<div class='row border border-dark rounded m-2'>" +
              "<div class='col-4 cell-align'>" +
              "<a href='" + annonces[i].photo + "' >" +
              "<img src='" + annonces[i].photo + "' class='img-thumbnail' alt='Photo annonce' title='Cliquez pour aggrandir' />" +
              "</a>" +
              "</div>" + 
              "<div class='col-8 cell-align'>" +
              "<div>" +
              "<p class='font-weight-bold text-left'>" + annonces[i].titre + "</p>" +
              "<p class='text-left'>" + annonces[i].categorie + "</p>" +
              "<p class='text-justify'>" + annonces[i].description + "</p>" +
              "<p class='text-scondary text-left font-weight-bold'>" + annonces[i].prix + " euros </p>" +
              "<p class='text-right'><small>" + annonces[i].date_ajout + "</small></p>" +
              "</div>" +
              "</div>" +
              "</div>";
        }
      divAnnonces.innerHTML = annoncesStructurees;
      }
    });
    e.preventDefault();
  });
});


