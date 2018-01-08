<div class="row menu_profil">
    <div class="col-sm-3">
        <a href="index.php?page=profil.php" class="txtGras">Mes informations</a>
    </div>
    <div class="col-sm-3">
        <a href="index.php?page=profil_commande.php" class="txtGras">Mes commandes</a>
    </div>
</div>


<?php
if (isset($_SESSION['mon_client'])) {
    $commande = new CommandeDB($cnx);
    $commande_client = $commande->getCommandeClient($_SESSION['mon_client']);
    $nbrCommande = count($commande_client);
    //print $nbrCommande;
    //var_dump($commande_client);
    $jeux = new JeuxDB($cnx);
}
?>

<div class="container mes_commandes">
    <?php
    for ($i = 0; $i < $nbrCommande; $i++) {
        ?>
        <div class="row profilcmd_numcommande">
            <div class="col-sm-5">
                Numéro de commande : <?php print $commande_client[$i]['ID_COMMANDE'] ?>
            </div>
        </div>
        <div class="row profilcmd_info">
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
                <label>Effectué le :</label> <?php print $commande_client[$i]['DATE'] ?>
            </div>
            <div class="col-sm-3">
                <label>Nom du jeu :</label> <?php
                $jeux_choisi = $jeux->getJeux($commande_client[$i]['ID_JEUX']);
                print $jeux_choisi[0]['NOM']
                ?>
            </div>
            <div class="col-sm-2">
                <label>Prix :</label> <?php print $commande_client[$i]['PRIX'] ?>
            </div>
            <div class="col-sm-2">

                <a style ="button" href="index.php?page=imprimer.php&id=<?php print $commande_client[$i]['ID_COMMANDE']; ?>">
                    Facture
                </a> 
            </div>
        </div>
        <?php
    }
    ?>
</div>
