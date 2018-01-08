 <?php
if (isset($_POST['envoyer2'])) {
    $log = new ClientDB($cnx);
    $client = $log->isClient($_POST['email3'], $_POST['mdp3']);
    if (is_null($client)) {
        
    } else {
        $_SESSION['client'] = 1;
        $_SESSION['mon_client'] = $client[0]->ID_CLIENT;
    }
}
?>

<div class="modal fade" id="connexionModal" tabindex="-1" role="dialog" aria-labelledby="connexionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="connexionModalLabel">Connexion à Geek Garden</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="post" id="form_connexion">
                    <input type="email" id="email3" name="email3" size="30" placeholder="Votre email"/>
                    </br>
                    <input type="password" id="mdp3" name="mdp3" size="30" placeholder="Votre mot de passe"/>
                    </br>
                    <input type="submit" name="envoyer2" id="envoyer2" value="Connexion" class="pull-right">
                    <input type="reset" id="reset2" value="Annuler" class="pull-left"/>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
if (isset($_SESSION['client'])) {
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php?page=accueil.php"><img src="./admin/images/home.jpg"/>Accueil</a>
                <a class="nav-item nav-link" href="index.php?page=catalogue.php"><img src="./admin/images/catalogue.jpg"/>Catalogue</a>
                <a class="nav-item nav-link" href="index.php?page=profil.php"><img src="./admin/images/profil.jpg"/>Mon profil</a>
                <a class="nav-item nav-link" href="index.php?page=contact.php"><img src="./admin/images/contact.jpg"/>Contact</a>
                <a class="nav-item nav-link" href="index.php?page=deconnexion.php"><img src="./admin/images/deconnexion.jpg"/>Deconnexion</a>
            </div>
        </div>
    </nav>
<?php } else {
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php?page=accueil.php"><img src="./admin/images/home.jpg"/>Accueil</a>
                <a class="nav-item nav-link" href="index.php?page=catalogue.php"><img src="./admin/images/catalogue.jpg"/>Catalogue</a>
                <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#connexionModal"><img src="./admin/images/connexion.jpg"/>Connexion</a>
                <a class="nav-item nav-link" href="index.php?page=inscription.php"><img src="./admin/images/inscription.jpg"/>Inscription</a>
                <a class="nav-item nav-link" href="index.php?page=contact.php"><img src="./admin/images/contact.jpg"/>Contact</a>
                <a class="nav-item nav-link" href="./admin/index.php"><img src="./admin/images/admin.jpg"/>Administration</a>
            </div>
        </div>
    </nav>
<?php }
?>

