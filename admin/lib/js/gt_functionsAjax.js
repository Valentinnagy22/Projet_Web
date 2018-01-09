$(document).ready(function () {


    //code pour le tableau éditable
    $("span[id]").click(function () {
        //alert("coucou");

        var valeur1 = $.trim($(this).text());
        //s'il fallait tester si on utilise edge :
        if (/Edge\/\d./i.test(navigator.userAgent)) {
            $(this).addClass("borderInput");
        }

        var ident = $(this).attr("id");
        var name = $(this).attr("name");
        $(this).blur(function () {
            $(this).removeClass("borderInput");
            var valeur2 = $(this).text();
            valeur2 = $.trim(valeur2);

            if (name == "nom_client" || name == "prenom_client" || name == "mdp_client" || name == "email_client" || name == "adresse_client" || name == "localite_client" || name == "cp_client" || name == "telephone_client") {
                if (valeur1 != valeur2)
                {
                    var parametre = 'champ=' + name + '&id=' + ident + '&nouveau=' + valeur2;
                    var retour = $.ajax({
                        type: 'GET',
                        data: parametre,
                        dataType: "text",
                        url: "./lib/php/ajax/AjaxUpdateClient.php",
                        success: function (data) {
                            console.log("success");
                        }
                    });
                    retour.fail(function (jqXHR, textStatus, errorThrown) {
                        //alert("Echec retour: " + textStatus + "\nerrorThrown: " + errorThrown);
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                    });
                }
                ;
            } else if (name == "nom_jeux" || name == "genre_jeux" || name == "prix_jeux" || name == "image_jeux" || name == "plateforme_jeux") {
                if (valeur1 != valeur2)
                {  
                    var parametre = 'champ=' + name + '&id=' + ident + '&nouveau=' + valeur2;
                    var retour = $.ajax({
                        type: 'GET',
                        data: parametre,
                        dataType: "text",
                        url: "./lib/php/ajax/AjaxUpdateCatalogue.php",
                        success: function (data) {
                            console.log("success");
                        }
                    });
                    retour.fail(function (jqXHR, textStatus, errorThrown) {
                        //alert("Echec retour: " + textStatus + "\nerrorThrown: " + errorThrown);
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                    });
                }
                ;
            }
            else if (name == "date_commande" || name == "id_client_commande" || name == "id_jeux_commande" || name == "prix_commande") {
                if (valeur1 != valeur2)
                {  
                    var parametre = 'champ=' + name + '&id=' + ident + '&nouveau=' + valeur2;
                    var retour = $.ajax({
                        type: 'GET',
                        data: parametre,
                        dataType: "text",
                        url: "./lib/php/ajax/AjaxUpdateCommande.php",
                        success: function (data) {
                            console.log("success");
                        }
                    });
                    retour.fail(function (jqXHR, textStatus, errorThrown) {
                        //alert("Echec retour: " + textStatus + "\nerrorThrown: " + errorThrown);
                        console.log(jqXHR);
                        console.log(textStatus);
                        console.log(errorThrown);
                    });
                }
                ;
            }

        });
    });

});