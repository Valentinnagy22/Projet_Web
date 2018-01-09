<?php
$jeux = new JeuxDB($cnx);
$liste_cat = $jeux->getAllJeux();
$nb_cat = count($liste_cat);
//var_dump($liste_cli);
?>


<table class="table-responsive">
    <?php
    echo "<br><table cellspacing=10 border=2 BORDERCOLOR=#6666FF width=80% align=center bgcolor=#ffffff>";
    ?>
    <tr>
        <th class="ecart">Id</th>
        <th class="ecart">Nom</th>
        <th class="ecart">Genre</th>
        <th class="ecart">Prix</th>
        <th class="ecart">Image</th>
        <th class="ecart">Plateforme</th>
    </tr>
    <?php
    for ($i = 0; $i < $nb_cat; $i++) {
        ?>
        <tr>
            <td class="ecart">
                <?php print utf8_encode($liste_cat[$i]['ID_JEUX']); ?>
            </td>
            <td>
                <span contenteditable="true" name="nom_jeux" class="ecart" id="<?php print $liste_cat[$i]['ID_JEUX']; ?>">
                    <?php print utf8_encode($liste_cat[$i]['NOM_JEUX']); ?>              
                </span>
            </td>
            <td>
                <span contenteditable="true" name="genre_jeux" class="ecart" id="<?php print $liste_cat[$i]['ID_JEUX']; ?>">
                    <?php print utf8_encode($liste_cat[$i]['GENRE_JEUX']); ?>              
                </span>
            </td>
            <td>
                <span contenteditable="true" name="prix_jeux" class="ecart" id="<?php print $liste_cat[$i]['ID_JEUX']; ?>">
                    <?php print utf8_encode($liste_cat[$i]['PRIX_JEUX']); ?>              
                </span>
            </td>
            <td>
                <span contenteditable="true" name="image_jeux" class="ecart" id="<?php print $liste_cat[$i]['ID_JEUX']; ?>">
                    <?php print utf8_encode($liste_cat[$i]['IMAGE_JEUX']); ?>              
                </span>
            </td>
            <td>
                <span contenteditable="true" name="plateforme_jeux" class="ecart" id="<?php print $liste_cat[$i]['ID_JEUX']; ?>">
                    <?php print utf8_encode($liste_cat[$i]['PLATEFORME_JEUX']); ?>              
                </span>
            </td>
        </tr>
        <?php
    }
    ?>
</table>