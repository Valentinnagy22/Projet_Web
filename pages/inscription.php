<h3 id="titre_inscription">Entrez vos données : </h3>

<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get" id="form_inscription">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <input type="text" id="nom" name="nom" placeholder="Votre nom"/>
        </div>
        <div class="col-sm-4">
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom"/>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <input type="email" id="email" name="email" placeholder="Votre email"/>
        </div>
        <div class="col-sm-4">
            <input type="email" id="email2" name="email1" placeholder="Confirmez votre email"/>
        </div>
    </div>
    </br>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
            <input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe"/>
        </div>
        <div class="col-sm-4">
            <input type="password" id="mdp2" name="mdp2" placeholder="Confirmez votre mdp"/>
        </div>
    </div>
</form>