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
    $client = new ClientDB($cnx);
    $client_connecte = $client->getClient($_SESSION['mon_client']);
}
?>

<div class="container profil_info">
    <div class="row">
        <div class="col-sm-2">
            <label id="label-info">Nom :</label>
        </div>
        <div class="col-sm-5">
            <?php print utf8_decode($client_connecte[0]['NOM']); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label id="label-info">Prénom :</label>
        </div>
        <div class="col-sm-5">
            <?php print utf8_decode($client_connecte[0]['PRENOM']); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label id="label-info">Email :</label>
        </div>
        <div class="col-sm-5">
            <?php print utf8_decode($client_connecte[0]['EMAIL']); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label id="label-info">Adresse :</label>
        </div>
        <div class="col-sm-5">
            <?php print utf8_decode($client_connecte[0]['ADRESSE']); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label id="label-info">Localité :</label>
        </div>
        <div class="col-sm-5">
            <?php print utf8_decode($client_connecte[0]['LOCALITE']); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label id="label-info">Code postal :</label>
        </div>
        <div class="col-sm-5">
            <?php print utf8_decode($client_connecte[0]['CP']); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <label id="label-info">Téléphone :</label>
        </div>
        <div class="col-sm-5">
            <?php print utf8_decode($client_connecte[0]['TELEPHONE']); ?>
        </div>
    </div>
</div>