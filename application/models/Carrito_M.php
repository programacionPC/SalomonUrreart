<?php
    class Pinturas_M extends CI_Model{

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
// ********************************************************************************************************
        //SELECT de las pinturas
        public function consultar_pintura_carrito(){
            $stmt = $this->dbh->query(
                "SELECT ID_Pintura, nombre_pintura, nombre_ImgPintura, precio
                FROM pinturas 
                ORDER BY ID_Pintura"
            );
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }