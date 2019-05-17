$(document).ready(function() {
    $('#submit').click(function(event){
    event.preventDefault();
    ajax();
    });

    function ajax()
    {
        var id = $('#personne').val();
        console.log(id);

        var parameters = "id="+id;
        //  on définit les paramèthres à envoyer à la requete   AJAX 'aller', qui seraz transmit à la requete de suppression PHP dans le sishier ajax3.php
        console.log(parameters);

        // post : méthode JQuery permettant 

        $.post("ajax3.php", parameters, function(data){
             $("#message").html(data.message);
            //  on selectionne la div id message afin d'envoyer via la raquete AJAX 'retour' le message de validation
            $('#employes').html(data.resultat);
        }, 'json');
    }
});