$(document).ready(function(){
    $('#submit').click(function(event){
        // event represent the evenement 'click'
        event.preventDefault();
        // this allows us to annulate the clicking and recharging the page so we can use ajax
        ajax();
        // fonction executée ci-dessous
    });

    function ajax()
    {
        var personne = $('#personne').val();
        // on selectionne le champs input ifin de récupérer la valeur saisie dans le champ pour la transmettre à la raquete 'aller' AJAX
        console.log(personne);
        // here we take the answer of a client using jquery

        var parameters = "personne="+personne;
        // on définit le paramèthres à envoyer avec la requete 'aller' AJAX
        // "personne=" permet de definir ou la paramethre va etre envoyé dans le fishier PHP ($personne)

        // La méthode 'post' de JQUERY permet d'envoyer des requetes HTTP AJAX, plusieurs paramethres:
        /*
        1.L'URL de destination des requetes AJAX
        2. Les paramèthres à fournir à la requète
        3. En cas de succés, function(data) recupère les données de la requete 'retour', tout se trouve dans 'data'
        4. Type de transport de données : JSON

        */


        $.post("ajax2.php", parameters, function(data){
            $('#resultat').html(data.resultat);// ici on selectionne la div id 'resultat' et on accroche le message d'arreur ou de validation à l'intérieur
            // data.resultat --> resultat correspond à l'indice 'resultat' du tableau array $tab['resultat'] du fishier ajax2.php
            $('#personne').val('');
            // permet de vider le champs input une fois le formulaire validé
        }, 'json');
    }

});


