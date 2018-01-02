<?php

class ClientDB extends Client {

    private $_db;
    private $_client = array();

    public function __construct($cnx) {
        $this->_db = $cnx;
    }

    public function addClient(array $data) {

        $query = "insert into CLIENT (NOM,PRENOM,MDP,EMAIL)"
                . " values (:nom,:prenom,:mdp,:email)";

        try {
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':nom', $data['nom'], PDO::PARAM_STR);
            $resultset->bindValue(':prenom', $data['prenom'], PDO::PARAM_STR);
            $resultset->bindValue(':mdp', $data['mdp'], PDO::PARAM_STR);
            $resultset->bindValue(':email', $data['email'], PDO::PARAM_STR);
            $resultset->execute();
            //$retour = $resultset->fetchColumn(0);
            //return $retour;
        } catch (PDOException $e) {
            print "<br/>Echec de l'insertion";
            print $e->getMessage();
        }
    }
    
    function isClient($email, $mdp) {
        try {
            $query = "select * from CLIENT where EMAIL = :email and MDP = :mdp";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':email', $email);
            $resultset->bindValue(':mdp', $mdp);
            $resultset->execute();
            $data = $resultset->fetch();
            if (!empty($data)) {
                try {
                    $_client[] = new Client($data);
                    if ($_client[0]->EMAIL == $email && $_client[0]->MDP == $mdp) {
                        return $_client;
                    } else {
                        return null;
                    }
                } catch (PDOException $e) {
                    print $e->getMessage();
                }
            }
        } catch (PDOException $e) {
            print "Echec de la requ&ecirc;te." . $e->getMessage();
        }
    }

}
