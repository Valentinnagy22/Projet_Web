<h3 id="titre_inscription">Entrez vos données : </h3>

<?php

if (isset($_GET['envoyer'])) {
    //permet d'extraire les champs du tableau $_GET pour simplifier
    extract($_GET, EXTR_OVERWRITE);
    if (empty($email) || empty($email2) || empty($mdp) || empty($mdp2) || empty($nom) || empty($prenom)) {
        $erreur = "Veuillez remplir tous les champs";
    } else {
        $client = new ClientDB($cnx);
        $client->addClient($_GET);
        $reussi = "Félicitations, votre compte a été enregistré.";
    }
}
?>

<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_inscription">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-3">
            <input type="text" id="nom" name="nom" size="30" placeholder="Votre nom"/>
        </div>
        <div class="col-sm-3">
            <input type="text" id="prenom" name="prenom" size="30" placeholder="Votre prénom"/>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-3">
            <input type="email" id="email" name="email" size="30" placeholder="Votre email"/>
        </div>
        <div class="col-sm-3">
            <input type="email" id="email2" name="email2" size="30" placeholder="Confirmez votre email"/>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-3">
            <input type="password" id="mdp" name="mdp" size="30" placeholder="Votre mot de passe"/>
        </div>
        <div class="col-sm-3">
            <input type="password" id="mdp2" name="mdp2" size="30" placeholder="Confirmez votre mdp"/>
        </div>
    </div>
    </br></br>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-2">
            <input type="submit" name="envoyer" id="envoyer" value="Envoyer" class="pull-right">&nbsp;  
        </div>
        <div class="col-sm-2">
            <input type="reset" id="reset" value="Annuler" class="pull-left"/>
        </div>
    </div>
    <div class="row form_reussi">
        <div class="col-sm-1"></div>
        <div class="col-sm-4 reussi">
            <?php
            if (isset($reussi)) {
                print $reussi;
            }
            ?>
        </div>
    </div>
</form>
