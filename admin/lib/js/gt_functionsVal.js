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
        equalTo: "Les champs ne correspondent pas."
    });
});