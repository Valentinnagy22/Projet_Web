<?php

class CommandeDB extends Commande {

    private $_db;
    private $_commande = array();

    public function __construct($cnx) {
        $this->_db = $cnx;
    }

    public function addCommande(array $data) {

        $query = "insert into COMMANDE (ID_CLIENT_COMMANDE,ID_JEUX_COMMANDE,PRIX_COMMANDE)"
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
    
    function getCommandeClient($id) {
        try {
            $query = "SELECT * FROM COMMANDE where ID_CLIENT_COMMANDE=:id_client_commande";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_client_commande', $id);
            $resultset->execute();
            $data = $resultset->fetchAll();
//var_dump($data);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
    
    function getCommande($id) {
        try {
            $query = "SELECT * FROM COMMANDE where ID_COMMANDE=:id_commande";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_commande', $id);
            $resultset->execute();
            $data = $resultset->fetchAll();
//var_dump($data);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
    
            function getAllCommande() {
        try {
            $query = "SELECT * FROM COMMANDE order by 1";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            $data = $resultset->fetchAll();
//var_dump($data);
            $resultset->execute();
        } catch (PDOException $e) {
            print $e->getMessage();
        }

        while ($data = $resultset->fetch()) {
            try {
                $_infoArray[] = $data;
            } catch (PDOException $e) {
                print $e->getMessage();
            }
        }
        return $_infoArray;
    }
    
                public function updateCommande($champ,$nouveau,$id){                
        try {
            $query="UPDATE COMMANDE set ".$champ." = '".$nouveau."' where ID_COMMANDE ='".$id."'";            
            $resultset = $this->_db->prepare($query);
            $resultset->execute();            
            
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }
    
}
