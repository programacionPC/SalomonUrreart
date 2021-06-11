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
            $stmt = $this->dbh->query("SELECT ID_Poncho, nombrePoncho, nombre_ImgPoncho FROM ponchos WHERE ID_Poncho = $ID_Poncho");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }