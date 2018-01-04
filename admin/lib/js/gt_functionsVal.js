$(document).ready(function () {

    //pour pouvoir utiliser regex
    $.validator.addMethod("regex", function (value, element, regexpr) {
        return regexpr.test(value);
    }, "Format non valide.");

    $("#form_inscription").validate({
        rules: {
            email: "required",
            email2: {
                equalTo: "#email"
            },
            mdp: "required",
            mdp2: {
                equalTo: "#mdp"
            },
            nom: "required",
            prenom: "required",
            adresse: "required",
            localite: "required",
            cp: {
                required: true,
                min: 1000,
                max: 9999
            },
            tel: {
                required: true,
                regex: /^(0)[0-9]{2,3}\/[0-9]{2}\.[0-9]{2}\.[0-9]{2}$/
            },
            submitHandler: function (form) {
                form.submit();
            }
        }
    });  
    
    $("#form_connexion").validate({
        rules: {
            email3: "required",          
            mdp3: "required",
            submitHandler: function (form) {
                form.submit();
            }
        }
    });   
    
    //TRADUCTION DES MESSAGES DE VALIDATION EN FRANÇAIS
    $.extend($.validator.messages, {
        required: "Veuillez renseigner ce champ.",
        email: "Veuillez renseigner un email valide.",
        equalTo: "Les champs ne correspondent pas.",
                max: $.validator.format("Entrez un nombre inférieur ou égal à {0}."),
        min: $.validator.format("Entrez un nombre de minimum {0}.")
    });
});