<?php

class JeuxDB extends Jeux {

    private $_db;
    private $_infoArray = array();

    public function __construct($cnx) {
        $this->_db = $cnx;
    }

    public function readallJeux() {
        try {
            $query = "select * from JEUX ";
            $resultset = $this->_db->prepare($query);
            $resultset->execute();
            //$data = $resultset->fetchAll();
            //var_dump($data);
            while ($data = $resultset->fetch()) {
                $_infoArray[] = $data;
            }
            return $_infoArray;
        } catch (PDOException $e) {
            print "Erreur " . $e->getMessage();
        }
    }

    function getJeux($id) {
        try {
            $query = "SELECT * FROM JEUX where ID_JEUX=:id_jeux";
            $resultset = $this->_db->prepare($query);
            $resultset->bindValue(':id_jeux', $id);
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
    
                function getAllJeux() {
        try {
            $query = "SELECT * FROM JEUX order by 1";
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
    
            public function updateJeux($champ,$nouveau,$id){                
        try {
            $query="UPDATE JEUX set ".$champ." = '".$nouveau."' where ID_JEUX ='".$id."'";            
            $resultset = $this->_db->prepare($query);
            $resultset->execute();            
            
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }

}
