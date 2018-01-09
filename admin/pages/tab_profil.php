<?php
$client = new ClientDB($cnx);
$liste_cli = $client->getAllClient();
$nb_cli = count($liste_cli);
//var_dump($liste_cli);
?>


<table class="table-responsive">
    <?php
    echo "<br><table cellspacing=10 border=2 BORDERCOLOR=#6666FF width=80% align=center bgcolor=#ffffff>";
    ?>
    <tr>
        <th class="ecart">Id</th>
        <th class="ecart">Nom</th>
        <th class="ecart">Prenom</th>
        <th class="ecart">Mdp</th>
        <th class="ecart">Email</th>
        <th class="ecart">Adresse</th>
        <th class="ecart">Localité</th>
        <th class="ecart">Code postal</th>
        <th class="ecart">Téléphone</th>
    </tr>
    <?php
    for($i=0;$i<$nb_cli;$i++){
        ?>
    <tr>
        <td class="ecart">
            <?php print utf8_encode($liste_cli[$i]['ID_CLIENT']); ?>
        </td>
        <td>
            <span contenteditable="true" name="nom_client" class="ecart" id="<?php print $liste_cli[$i]['ID_CLIENT']; ?>">
                <?php print utf8_encode($liste_cli[$i]['NOM_CLIENT']); ?>              
            </span>
        </td>
        <td>
            <span contenteditable="true" name="prenom_client" class="ecart" id="<?php print $liste_cli[$i]['ID_CLIENT']; ?>">
                <?php print utf8_encode($liste_cli[$i]['PRENOM_CLIENT']); ?>              
            </span>
        </td>
        <td>
            <span contenteditable="true" name="mdp_client" class="ecart" id="<?php print $liste_cli[$i]['ID_CLIENT']; ?>">
                <?php print utf8_encode($liste_cli[$i]['MDP_CLIENT']); ?>              
            </span>
        </td>
        <td>
            <span contenteditable="true" name="email_client" class="ecart" id="<?php print $liste_cli[$i]['ID_CLIENT']; ?>">
                <?php print utf8_encode($liste_cli[$i]['EMAIL_CLIENT']); ?>              
            </span>
        </td>
        <td>
            <span contenteditable="true" name="adresse_client" class="ecart" id="<?php print $liste_cli[$i]['ID_CLIENT']; ?>">
                <?php print utf8_encode($liste_cli[$i]['ADRESSE_CLIENT']); ?>              
            </span>
        </td>
        <td>
            <span contenteditable="true" name="localite_client" class="ecart" id="<?php print $liste_cli[$i]['ID_CLIENT']; ?>">
                <?php print utf8_encode($liste_cli[$i]['LOCALITE_CLIENT']); ?>              
            </span>
        </td>
        <td>
            <span contenteditable="true" name="cp_client" class="ecart" id="<?php print $liste_cli[$i]['ID_CLIENT']; ?>">
                <?php print utf8_encode($liste_cli[$i]['CP_CLIENT']); ?>              
            </span>
        </td>
                <td>
            <span contenteditable="true" name="telephone_client" class="ecart" id="<?php print $liste_cli[$i]['ID_CLIENT']; ?>">
                <?php print utf8_encode($liste_cli[$i]['TELEPHONE_CLIENT']); ?>              
            </span>
        </td>
    </tr>
    <?php
    }
    ?>
</table>