<?php
    class Inicio_M extends CI_Model{

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
        
        //SELECT del perfil 
        public function consultarPerfilSalomon(){
            $stmt = $this->dbh->query(
                "SELECT perfil, nombre_Fotografia 
                FROM artista 
                ORDER BY ID_Artista 
                DESC
                LIMIT 1"
            );
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        // SELECT de las colecciones existentes
        public function consultarColeccionSalomon(){
            $stmt = $this->dbh->query(
                "SELECT ID_Coleccion, nombre_coleccion 
                FROM colecciones"
            );

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //SELECT de las ultimas obras realizadas
        public function consultarUltimasObrasSalomon(){
            $stmt = $this->dbh->query(
                "SELECT ID_UltimaObra, nombre_UltimaObra, tecnica_UltimaObra, tamanio_UltimaObra, nombre_ImgUltimaObra 
                FROM ultimasobras"
            );

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //SELECT de las pinturas
        // public function consultarPinturasSalomon(){
        //     $stmt = $this->dbh->query(
        //         "SELECT ID_Pintura, nombre_pintura, nombre_ImgPintura 
        //         FROM pinturas 
        //         ORDER BY ID_Pintura"
        //     );
            
        //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
        // }
    }