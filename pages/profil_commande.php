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
    var_dump($commande_client);
}
?>
