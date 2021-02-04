document.addEventListener('DOMContentLoaded', function() {
  var formulaire = document.querySelector("#form-annonce");
  formulaire.addEventListener('submit', function(e){
    var infoFormulaire = new FormData(formulaire);
    var requete = new XMLHttpRequest();
    requete.open("POST", "/Cours/TechnoWeb/PROJET/pawcs/php/mon_annonce.php");
    requete.send(infoFormulaire);
    e.preventDefault();
    requete.addEventListener('load', function() {
      alert("Votre annonce est en ligne !");
      window.location.replace("/Cours/TechnoWeb/PROJET/pawcs/index.php");
    });
  });
});
