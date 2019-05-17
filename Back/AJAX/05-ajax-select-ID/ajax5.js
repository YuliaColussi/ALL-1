$(document).ready(function() {
  $("#submit").click(function(event) {
    event.preventDefault();
    ajax();
  });

  function ajax() {
    var id = $("#personne").val();
    console.log(id);

    var parameters = "id=" + id;
    console.log(parameters);


 $.post(
   "ajax5.php",parameters,function(data) {
     $("#employes").html(data.resultat);
    //  la requete retour - we stock it into "data"
        $("#resultat").html(data.result);
        //  here we cible the <div>
   },
       "json" );
  }
});
