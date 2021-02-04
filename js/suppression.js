//function suppression() {
//  var checkBox = document.getElementById('sup-box').value;
//  console.log(checkBox);
//  //var infoBox = new FormData(checkBox);
//  var requete = new XMLHttpRequest();
//  console.log(requete);
//  requete.open("POST", "/Cours/TechnoWeb/PROJET/pawcs/php/suppression.php");
//  requete.send(checkBox);
//  console.log(requete.readyState);
//  requete.addEventListener('load', function(){
//    alert("Annonce(s) supprimée(s) !");
//  });
//};
//
document.addEventListener('DOMContentLoaded', function() {
  var button = document.getElementsByClassName("buton-sup");
  var checkBox = document.getElementsByClassName("form-sup");
  for (var i=0; i < checkBox.length; i++) {
    button[i].addEventListener('click', function() {
      console.log(button[i]);
      var infoBox = newFormData(checkBox[i]);
      var requete = newXMLHttpRequest();
      requete.open("POST", "/Cours/TechnoWeb/Projet/pawcs/suppression.php");
      requete.send(infoBox);
      //Send the proper header information along with the request
      requete.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

      requete.onreadystatechange = function() {//Call a function when the state changes.
        if(requete.readyState == 4 && requete.status == 200) {
          console.log(requete.responseText); // <= Here your browser prints the response that came from the php echo to the browser console
        }
      }
    });
  }
});
