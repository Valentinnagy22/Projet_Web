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
                <a class="nav-item nav-link" href="index.php?page=connexion.php"><img src="./admin/images/connexion.jpg"/>Connexion</a>
                <a class="nav-item nav-link" href="index.php?page=inscription.php"><img src="./admin/images/inscription.jpg"/>Inscription</a>
                <a class="nav-item nav-link" href="index.php?page=contact.php"><img src="./admin/images/contact.jpg"/>Contact</a>
            </div>
        </div>
    </nav>
    <?php }
?>

