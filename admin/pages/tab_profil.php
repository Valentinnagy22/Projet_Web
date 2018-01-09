<h2 id="titre_gestion_cli">Gestion des clients</h2>
<br/>
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
        <th class="ecart">ID</th>
        <th class="ecart">NOM</th>
        <th class="ecart">PRENOM</th>
        <th class="ecart">EMAIL</th>
        <th class="ecart">MOT DE PASSE</th>
    </tr>
    <?php
    for ($i = 0; $i < $nb_cli; $i++) {
        ?>
        <tr>
            <td class="ecart"><?php print $liste_cli[$i]['ID_CLIENT']; ?></td>
            <td 
                <span contenteditable="true" name="nom_client" class="ecart" id="<?php print $liste_cli[$i]['ID_CLIENT']; ?>">
                        <?php print utf8_encode($liste_cli[$i]['NOM']); ?>
                </span>
            </td>
            <td 
                <span contenteditable="true" name="prenom_client" class="ecart" id="<?php print $liste_cli[$i]['ID_CLIENT']; ?>">
                        <?php print utf8_encode($liste_cli[$i]['PRENOM']); ?>
                </span>
            </td>
            <td 
                <span contenteditable="true" name="email_client" class="ecart" id="<?php print $liste_cli[$i]['ID_CLIENT']; ?>">
                        <?php print utf8_encode($liste_cli[$i]['EMAIL']); ?>
                </span>
            </td>
            <td 
                <span contenteditable="true" name="mdp_client" class="ecart" id="<?php print $liste_cli[$i]['ID_CLIENT']; ?>">
                    <?php print utf8_encode($liste_cli[$i]['MDP']); ?>
                </span>
            </td>      
        </tr>
        <?php
    }
    ?>
</table>
