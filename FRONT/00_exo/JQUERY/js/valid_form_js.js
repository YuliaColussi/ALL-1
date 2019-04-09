$(function () {
    /**
         * Valider son email
         */
    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        // rejex - pour tester si l'utilisateur entre les simbols vraie
        
        
        return re.test(email);
    }

    /**
     * Valider son numéro de téléphone en FR
     */
    var validateTel = tel => {
        var telReg = new RegExp("(0|\\+33|0033)[1-9][0-9]{8}");
        // also chacks that the phone should be valid for the country standarts
        return telReg.test(tel);
    };

    $('#contact').submit(function (e) {

        e.preventDefault();

        $('#contact .is-invalid').removeClass('is-invalid');
        $('#contact .is-valid').removeClass('is-valid');
        $('#contact .alert alert-danger').remove();

        const nom = $('#nom');
        // const is exactly like var , the only difference is that it never changes
        const prenom = $('#prenom');
        const email = $('#email');
        const tel = $('#tel');

        // -- Validation du champ "nom"
        if (nom.val().length === 0) {
            nom.addClass('is-invalid');
        } else {
            nom.addClass('is-valid');
        }

        // -- Validation du champ "prenom"
        if (prenom.val().length === 0) {
            prenom.addClass('is-invalid');
        } else {
            prenom.addClass('is-valid');
        }

        // -- Validation du champ "email"
        if (!validateEmail(email.val())) {
            email.addClass('is-invalid');
        } else {
            email.addClass('is-valid');
        }

        // -- Validation du champ "tel"
        if (!validateTel(tel.val())) {
            tel.addClass('is-invalid');
        } else {
            tel.addClass('is-valid');
        }


        if ($(this).find('.is-invalid').length === 0) {
            // find looks in the DOM for all the children with the class .is-invalid
            $(this).replaceWith(
                `<div class="alert alert-success">
                        Votre contact à bien été tranmis ! Nous vous répondront dans les meilleurs délais
                    </div>`
            )
        } else {
            $(this).prepend(
                // SINON on ajoute prepend() AVANT this
                //The .prepend() method inserts the specified content as the first child of each element in the jQuery collection (To insert it as the last child, use .append()).
                `<div class="alert alert-danger">
                        Nous n'avons pas été en mesure de valider votre contact. Vérifiez vos informations
                    </div>`
            )
        }

    });


});