<?php

abstract class Model{
    //informations de base de données
    private $host       = "localhost";
    private $db_name    = "mvc";
    private $username   = "root";
    private $password   = "root";

    //Propriété contenant la connexion
    protected $_connexion;

    //Propriétés contenant les informations de réquêtes
    public $table;
    public $id;

    public function getConnection(){
        $this->_connexion = null; // on efface s'il y'en a une autre connexion

        try {
    $bdd = new PDO('mysql:host=localhost;dbname=licence2;charset=UTF8', 'root', 'root');
} catch (Exception $e) {
    die("Erreur : ".$e->getMessage);
}

        try {
            $this->_connexion = new PDO ('mysql:host='.$this->host.';dbname='.$this->db_name, $this->username, $this->password);
            $this->_connexion->exec('set names utf8');
        } catch (PDOException $e) {
            echo 'Erreur : '.$e->getMessage();
        }
    }
}