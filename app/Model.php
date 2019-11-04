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
            $this->_connexion = new PDO ('mysql:host='.$this->host.';dbname='.$this->db_name, $this->username, $this->password);
            $this->_connexion->exec('set names utf8');
        } catch (PDOException $e) {
            echo 'Erreur : '.$e->getMessage();
        }
    }

    public function getAll(){
        $sql    = "SELECT * FROM ".$this->table;
        $query  = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function getOne(){
        $sql    = "SELECT * FROM ".$this->table." WHERE id=".$this->id ;
        $query  = $this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();
    }
}