<?php

header('Content-type: application/json');
require '../dbConnectMysql.php';
require '../classes/Connexion.class.php';
require '../classes/Client.class.php';
require '../classes/ClientDB.class.php';
$cnx = Connexion::getInstance($dsn, $user, $pass);

try {
    $update = new ClientDB($cnx);
    extract($_GET, EXTR_OVERWRITE);
    $param = 'id=' . $id . '&champ=' . $champ . '&nouveau=' . $nouveau;
    $update->updateClient($champ, $nouveau, $id);
} catch (Exception $e) {
    print $e->getMessage();
}

