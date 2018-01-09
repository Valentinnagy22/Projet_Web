<h2 id="titre_gestion_cli">Gestion du catalogue</h2>
<br/>
<?php
$catalogue = new JeuxDB($cnx);
$liste_cat = $catalogue->getAllJeux();
$nb_cat = count($liste_cat);
//var_dump($liste_cat);
?>

<table class="table-responsive">
    <?php
    echo "<br><table cellspacing=10 border=2 BORDERCOLOR=#6666FF width=80% align=center bgcolor=#ffffff>";
    ?>
    <tr>
        <th class="ecart">ID</th>
        <th class="ecart">GENRE</th>
        <th class="ecart">NOM</th>
        <th class="ecart">PRIX</th>
        <th class="ecart">PLATEFORME</th>
        <th class="ecart">IMAGE</th>
    </tr>
    <?php
    for ($i = 0; $i < $nb_cat; $i++) {
        ?>
        <tr>
            <td class="ecart"><?php print $liste_cat[$i]['ID_JEUX']; ?></td>
            <td class="ecart"><?php print utf8_encode($liste_cat[$i]['GENRE']); ?></td>
            <td class="ecart"><?php print utf8_encode($liste_cat[$i]['NOM']); ?></td>
            <td class="ecart"><?php print utf8_encode($liste_cat[$i]['PRIX']); ?></td>
            <td class="ecart"><?php print utf8_encode($liste_cat[$i]['PLATEFORME']); ?></td>
            <td class="ecart"><?php print utf8_encode($liste_cat[$i]['IMAGE']); ?></td>
        </tr>
        <?php
    }
    ?>
</table>
