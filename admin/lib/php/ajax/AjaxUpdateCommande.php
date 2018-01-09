<?php

header('Content-type: application/json');
require '../dbConnectMysql.php';
require '../classes/Connexion.class.php';
require '../classes/Commande.class.php';
require '../classes/CommandeDB.class.php';
$cnx = Connexion::getInstance($dsn, $user, $pass);

try {
    $update = new CommandeDB($cnx);
    extract($_GET, EXTR_OVERWRITE);
    $param = 'id=' . $id . '&champ=' . $champ . '&nouveau=' . $nouveau;
    $update->updateCommande($champ, $nouveau, $id);
} catch (Exception $e) {
    print $e->getMessage();
}

