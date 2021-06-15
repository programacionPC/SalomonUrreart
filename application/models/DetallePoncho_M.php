<?php
    class DetallePoncho_M extends CI_Model{

        public function __construct(){
            parent::__construct();
            // remoto
            // $Host= 'www.salomonurreart.com';
            // $Usuario= 'program_salomonurreart';
            // $Password= '159ADN.';
            // $Nombre_base= 'galeriaSalomon';
            
            // local
            $Host= 'localhost';
            $Usuario= 'root';
            $Password= '';
            $Nombre_base= 'galeriaSalomon';

            
            $dsn= "mysql:host=" . $Host . ";dbname=" . $Nombre_base;
            
            $this->dbh = new PDO($dsn, $Usuario, $Password);
            $this->dbh->exec("set names utf8");

            // print_r($this->dbh);
            // exit;
        }
        

// ********************************************************************************************************
// ********************************************************************************************************


        //SELECT de los ponchos
        public function consultarPoncho($ID_Poncho){
            $stmt = $this->dbh->query("SELECT ID_Poncho, nombrePoncho, medidaPoncho, tecnicaPoncho, nombre_ImgPoncho FROM ponchos WHERE ID_Poncho = $ID_Poncho");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function consultarPonchoAnterior($ID_Poncho){
            $stmt = $this->dbh->query("SELECT ID_Poncho, nombrePoncho, medidaPoncho, tecnicaPoncho, nombre_ImgPoncho FROM ponchos WHERE ID_Poncho < $ID_Poncho ORDER BY ID_Poncho DESC LIMIT 1");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function consultarPonchoPosterior($ID_Poncho){
            $stmt = $this->dbh->query("SELECT ID_Poncho, nombrePoncho, medidaPoncho, tecnicaPoncho, nombre_ImgPoncho FROM ponchos WHERE ID_Poncho > $ID_Poncho ORDER BY ID_Poncho LIMIT 1");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function consultarUltimoID_Poncho(){
            $stmt = $this->dbh->query("SELECT MAX(ID_Poncho) AS 'ID_Poncho' FROM ponchos");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function consultarprimerID_Poncho(){
            $stmt = $this->dbh->query("SELECT MIN(ID_Poncho) AS 'ID_Poncho'  FROM ponchos");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }