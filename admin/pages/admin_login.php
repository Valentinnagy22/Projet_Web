<?php
if (isset($_POST['se_connecter'])) {
    $log = new AdminDB($cnx);
    $admin = $log->isAdmin($_POST['login'], $_POST['mdp4']);
    //print $admin[0]->ID_ADMIN;
    if (is_null($admin)) {
        
    } else {
        $_SESSION['admin'] = 1;
        $_SESSION['mon_admin'] = $admin[0]->ID_ADMIN;
        //var_dump($_SESSION['mon_admin']);
        ?>
        <meta http-equiv = "refresh": content = "0;url=index.php?page=accueil_admin.php">
        <?php
    }
}
?>

<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="post" id="form_connexionadmin">
    <input type="text" id="login" name="login" size="30" placeholder="Votre login"/>
    </br>
    <input type="password" id="mdp4" name="mdp4" size="30" placeholder="Votre mot de passe"/>
    </br>
    <input type="submit" name="se_connecter" id="se_connecter" value="Connexion" class="pull-right">
    <input type="reset" id="reset3" value="Annuler" class="pull-left"/>
</form>