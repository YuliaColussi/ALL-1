$(document).ready(function() {
  $("#submit").click(function(event) {
    event.preventDefault();
    ajax();
  });

  function ajax() {

    var parameters = {
      prenom: $("#prenom").val(),
      nom: $("#nom").val(),
      sexe: $("#sexe").val(),
      service: $("#service").val(),
      date_embauche: $("#date_embauche").val(),
      salaire: $("#salaire").val()
    };

    console.log(parameters);

    $.post(
      "ajax6.php",parameters,function(data) {

        $("#message").html(data.message);
        

      },"json");

       $("#form")[0].reset(); 
  }

});
