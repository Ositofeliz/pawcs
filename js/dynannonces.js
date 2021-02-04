document.addEventListener("DOMContentLoaded", function() {
  var divAnnonce = document.querySelector("#last-annonce");
  function lastAnnonce() {
    var requete = new XMLHttpRequest();
    requete.addEventListener("load", function() {
      //console.log("ADL OK");
      //console.log(this.responseText);
      var annonce = JSON.parse(this.responseText);
      //console.log("ANNONCES : ");
      var annonceStructure = "<div class='col-4 cell-align'>" +
        "<a href='" + annonce[0].photo + "' >" +
        "<img src='" + annonce[0].photo +
        "' class='img-thumbnail' alt='Photo annonce' title='Cliquez pour aggrandir' />" +
        "</a>" +
        "</div>" + 
        "<div class='col-8 cell-align'>" +
        "<div>" +
        "<p class='font-weight-bold'>" + annonce[0].titre + "</p>" +
        "<p>" + annonce[0].categorie + "</p>" +
        "<p class='text-justify'>" + annonce[0].description + "</p>" +
        "<p class='text-secondary font-weight-bold'>" + annonce[0].prix + " euros </p>" +
        "<p class='text-right'> <small>" + annonce[0].date_ajout + "</small></p>" +
        "</div>" +
        "</div>";
      divAnnonce.innerHTML = annonceStructure;
    });
    requete.open("GET", "/Cours/TechnoWeb/PROJET/pawcs/php/get_last.php");
    requete.send();
    //console.log("Last OK");
  }
  setInterval(lastAnnonce, 60000);
  console.log("A jour");
  lastAnnonce();

});




//function lireAnnonces() {
//  var divAnnonces = document.querySelector("#liste-annonces");
//  var requete = new XMLHttpRequest();
//  requete.addEventListener("load", function() {
//    var annonces = JSON.parse(this.responseText);
//    var annoncesStructure = '';
//    for (var i=0; i<annonces.length; i++) {
//      annoncesStructure += "<div class='row border border-dark rounded m-2 text-center'>" +
//          "<div class='col-4'>" +
//          "<a href='" + annonces[i].photo + "' >" +
//          "<img src='" + annonces[i].photo + "' class='img-thumbnail' alt='Photo annonce' title='Cliquez pour aggrandir' />" +
//          "</a>" +
//          "</div>" + 
//          "<div class='col-8 cell-align'>" +
//          "<div>" +
//          "<p>" + annonces[i].titre + "</p>" +
//          "<p>" + annonces[i].categorie + "</p>" +
//          "<p>" + annonces[i].prix + " euros </p>" +
//          "<p>" + annonces[i].date_ajout + "</p>" +
//          "</div>" +
//          "</div>" +
//          "</div>";
//    }
//    divAnnonces.innerHTML = annoncesStructure;
//  });
//  requete.open("GET", "/Cours/TechnoWeb/PROJET/pawcs/php/get_info.php");
//  requete.send();
//  console.log("Ok");
//  setInterval(lireAnnonces, 60000);
//}
