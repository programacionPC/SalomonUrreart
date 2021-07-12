<?php
    class DetallePintura_M extends CI_Model{

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


        //SELECT de las pinturas
        public function consultarPintura($ID_Pintura){
            $stmt = $this->dbh->query("SELECT ID_Pintura, nombre_pintura, tecnica_pintura, medida_pintura, nombre_ImgPintura FROM pinturas WHERE ID_Pintura = $ID_Pintura");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function consultarPinturaAnterior($ID_Pintura){
            $stmt = $this->dbh->query("SELECT ID_Pintura, nombre_pintura, medida_pintura, tecnica_pintura, nombre_ImgPintura FROM pinturas WHERE ID_Pintura < $ID_Pintura ORDER BY ID_Pintura DESC LIMIT 1");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function consultarPinturaPosterior($ID_Pintura){
            $stmt = $this->dbh->query("SELECT ID_Pintura, nombre_pintura, medida_pintura, tecnica_pintura, nombre_ImgPintura FROM pinturas WHERE ID_Pintura > $ID_Pintura ORDER BY ID_Pintura LIMIT 1");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function consultarUltimoID_Pintura(){
            $stmt = $this->dbh->query("SELECT ID_Pintura, nombre_ImgPintura FROM pinturas ORDER BY ID_Pintura DESC LIMIT 1");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function consultarprimerID_Pintura(){
            $stmt = $this->dbh->query("SELECT ID_Pintura, nombre_ImgPintura FROM pinturas ORDER BY ID_Pintura LIMIT 1");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function consultarMiniaturaPintura($ID_Pintura){
            $stmt = $this->dbh->query("SELECT ID_Pintura, ID_ImagenMiniatura, nombre_ImagenMiniatura FROM imagenesminiaturas  WHERE ID_Pintura = $ID_Pintura");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function consultarImagenMiniatura($ID_ImagenMiniatura){
            $stmt = $this->dbh->query("SELECT nombre_ImagenMiniatura FROM  imagenesminiaturas WHERE ID_ImagenMiniatura = $ID_ImagenMiniatura");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }