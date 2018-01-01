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
            while($data = $resultset->fetch()){
                $_infoArray[] = $data;
            }
            return $_infoArray;
        } catch (PDOException $e) {
            print "Erreur " . $e->getMessage();
        }
        
    }

}
