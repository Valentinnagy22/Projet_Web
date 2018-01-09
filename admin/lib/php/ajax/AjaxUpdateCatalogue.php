<?php

header('Content-type: application/json');
require '../dbConnectMysql.php';
require '../classes/Connexion.class.php';
require '../classes/Jeux.class.php';
require '../classes/JeuxDB.class.php';
$cnx = Connexion::getInstance($dsn, $user, $pass);

try {
    $update = new JeuxDB($cnx);
    extract($_GET, EXTR_OVERWRITE);
    $param = 'id=' . $id . '&champ=' . $champ . '&nouveau=' . $nouveau;
    $update->updateJeux($champ, $nouveau, $id);
} catch (Exception $e) {
    print $e->getMessage();
}

