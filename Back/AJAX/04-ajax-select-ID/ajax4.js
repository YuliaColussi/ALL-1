$(document).ready(function() {
    ajax();

  function ajax() {
    var prenom = $("#personne").text();
    // text permet de recuperer la contenu de la div / ajax 'ALLER'
    console.log(prenom);
    
    var parameters = "prenom=" + prenom;
    // console.log(prenom);
    

    //la réponse de la requete 'retour' AJAX se trouve dans 'data'
    $.post(
      "ajax4.php",parameters,function(data)
      {
        $("#resultat").html(data.resultat);
        // on selectionne la div id 'resultat' pour coller le tableau ($tab['resultat]) définit dans la page ajax4.php
      },"json");
  }
});
