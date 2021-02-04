document.addEventListener('DOMContentLoaded', function() {
  var connexion = document.querySelector('#form-connexion');
  connexion.addEventListener('submit', function() {
    var connexionInfos = new FormData(connexion);
    var requete = new XMLHttpRequest();
    requete.open('POST', '/Cours/TechnoWeb/PROJET/pawcs/php/connexion.php');
    requete.send(connexionInfos);
  });
});
