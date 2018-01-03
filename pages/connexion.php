<h3 id="titre_connexion">Veuillez vous authentifier</h3>
<?php
if (isset($_POST['envoyer2'])) {
    $log = new ClientDB($cnx);
    $client = $log->isClient($_POST['email3'], $_POST['mdp3']);
    print $client[0]->ID_CLIENT;
    if (is_null($client)) {
        
    } else {
        $_SESSION['client'] = 1;
        $_SESSION['mon_client'] = $client[0]->ID_CLIENT;
        var_dump($_SESSION['mon_client']);
        ?>
        <meta http-equiv = "refresh": content = "0;url=index.php?page=accueil.php">
        <?php
    }
}
?>

<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="post" id="form_connexion">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-3">
            <input type="email" id="email3" name="email3" size="30" placeholder="Votre email"/>
        </div>
        <div class="col-sm-3">
            <input type="password" id="mdp3" name="mdp3" size="30" placeholder="Votre mot de passe"/>
        </div>
    </div>
    </br></br>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-2">
            <input type="submit" name="envoyer2" id="envoyer2" value="Connexion" class="pull-right">&nbsp;  
        </div>
        <div class="col-sm-2">
            <input type="reset" id="reset2" value="Annuler" class="pull-left"/>
        </div>
    </div>
</form>