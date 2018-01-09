<h2 id="titre_gestion_cli">Gestion des commandes</h2>
<br/>
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
        <th class="ecart">ID</th>
        <th class="ecart">ID_CLIENT</th>
        <th class="ecart">ID_JEUX</th>
        <th class="ecart">PRIX</th>
        <th class="ecart">DATE</th>
    </tr>
    <?php
    for ($i = 0; $i < $nb_com; $i++) {
        ?>
        <tr>
            <td class="ecart"><?php print $liste_com[$i]['ID_COMMANDE']; ?></td>
            <td class="ecart"><?php print utf8_encode($liste_com[$i]['ID_CLIENT']); ?></td>
            <td class="ecart"><?php print utf8_encode($liste_com[$i]['ID_JEUX']); ?></td>
            <td class="ecart"><?php print utf8_encode($liste_com[$i]['PRIX']); ?></td>
            <td class="ecart"><?php print utf8_encode($liste_com[$i]['DATE']); ?></td>
           
        </tr>
        <?php
    }
    ?>
</table>
