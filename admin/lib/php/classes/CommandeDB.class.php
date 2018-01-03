<?php

class CommandeDB extends Commande {

    private $_db;
    private $_commande = array();

    public function __construct($cnx) {
        $this->_db = $cnx;
    }

    public function addCommande(array $data) {

        $query = "insert into COMMANDE (ID_CLIENT,ID_JEUX,PRIX)"
                . " values (:id_client,:id_jeux,:prix)";

        try {
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_client', $data['id_client'], PDO::PARAM_STR);
            $resultset->bindValue(':id_jeux', $data['id_jeux'], PDO::PARAM_STR);
            $resultset->bindValue(':prix', $data['prix'], PDO::PARAM_STR);
            $resultset->execute();
            //$retour = $resultset->fetchColumn(0);
            //return $retour;
        } catch (PDOException $e) {
            print "<br/>Echec de l'insertion";
            print $e->getMessage();
        }
    }
    
}