<?php
    class Ponchos_M extends CI_Model{

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
            $Nombre_base= 'galeriasalomon';

            
            $dsn= "mysql:host=" . $Host . ";dbname=" . $Nombre_base;
            
            $this->dbh = new PDO($dsn, $Usuario, $Password);
            $this->dbh->exec("set names utf8");

            // print_r($this->dbh);
            // exit;
        }
        
// ********************************************************************************************************
        //SELECT de las pinturas
        public function consultarPonchosSalomon(){
            $stmt = $this->dbh->query(
                "SELECT ID_Poncho, nombrePoncho, nombre_ImgPoncho 
                FROM ponchos 
                ORDER BY ID_Poncho"
            );
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        // SELECT de las colecciones existentes
        public function consultarColeccionSalomon(){
            $stmt = $this->dbh->query(
                "SELECT ID_Coleccion, nombre_coleccion 
                FROM colecciones"
            );

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }