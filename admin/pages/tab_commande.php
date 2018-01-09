<?php
$commande = new CommandeDB($cnx);
$liste_com = $commande->getAllCommande();
$nb_com = count($liste_com);
//var_dump($liste_com);
?>


<table class="table-responsive">
    <?php
    echo "<br><table cellspacing=10 border=2 BORDERCOLOR=#6666FF width=80% align=center bgcolor=#ffffff>";
    ?>
    <tr>
        <th class="ecart">Id</th>
        <th class="ecart">Date</th>
        <th class="ecart">Id_client</th>
        <th class="ecart">Id_jeux</th>
        <th class="ecart">Prix</th>
    </tr>
    <?php
    for ($i = 0; $i < $nb_com; $i++) {
        ?>
        <tr>
            <td class="ecart">
                <?php print utf8_encode($liste_com[$i]['ID_COMMANDE']); ?>
            </td>
            <td>
                <span contenteditable="true" name="date_commande" class="ecart" id="<?php print $liste_com[$i]['ID_COMMANDE']; ?>">
                    <?php print utf8_encode($liste_com[$i]['DATE_COMMANDE']); ?>              
                </span>
            </td>
            <td>
                <span contenteditable="true" name="id_client_commande" class="ecart" id="<?php print $liste_com[$i]['ID_COMMANDE']; ?>">
                    <?php print utf8_encode($liste_com[$i]['ID_CLIENT_COMMANDE']); ?>              
                </span>
            </td>
            <td>
                <span contenteditable="true" name="id_jeux_commande" class="ecart" id="<?php print $liste_com[$i]['ID_COMMANDE']; ?>">
                    <?php print utf8_encode($liste_com[$i]['ID_JEUX_COMMANDE']); ?>              
                </span>
            </td>
            <td>
                <span contenteditable="true" name="prix_commande" class="ecart" id="<?php print $liste_com[$i]['ID_COMMANDE']; ?>">
                    <?php print utf8_encode($liste_com[$i]['PRIX_COMMANDE']); ?>              
                </span>
            </td>
        </tr>
        <?php
    }
    ?>
</table>