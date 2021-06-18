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
        
        //INSERT de colecciones
        public function insertarColeccion($RecibeColeccion){
            // echo "<pre>";
            // print_r($RecibeProducto);
            // echo "</pre>";
            // exit;
            $stmt = $this->dbh->prepare("INSERT INTO colecciones(nombre_coleccion, fecha_creacion) VALUES (:NOMBRE, 
            CURDATE())");

            // insertar una fila
            $Coleccion = $RecibeColeccion['Nombre'];

            //Se vinculan los valores de las sentencias preparadas, stmt es una abreviatura de statement
            $stmt->bindParam(':NOMBRE', $Coleccion);

            //Se ejecuta la inserción de los datos en la tabla(ejecuta una sentencia preparada )
            if($stmt->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        // INSERT de datos de perfil
        public function insertarPerfil($Perfil, $nombre_Fotografia, $tipo_Fotografia, $tamanio_Fotografia){
            $stmt = $this->dbh->prepare("INSERT INTO artista(perfil, nombre_Fotografia, tipo_Fotografia, tamanio_Fotografia) VALUES (:PERFIL, :NOMBRE_FOTO, :TIPO_FOTO, :TAMANIO_FOTO)");

            //Se vinculan los valores de las sentencias preparadas, stmt es una abreviatura de statement
            $stmt->bindParam(':PERFIL', $Perfil);
            $stmt->bindParam(':NOMBRE_FOTO', $nombre_Fotografia);
            $stmt->bindParam(':TIPO_FOTO', $tipo_Fotografia);
            $stmt->bindParam(':TAMANIO_FOTO', $tamanio_Fotografia);
            
            //Se ejecuta la inserción de los datos en la tabla(ejecuta una sentencia preparada )
            if($stmt->execute()){
                // se recupera el ID del registro insertado
                return true;
            }
            else{
                return false;
            }
        }
    


// ********************************************************************************************************
// ********************************************************************************************************
        //SELECT del perfil 
        public function consultarPerfilSalomon(){
            $stmt = $this->dbh->query("SELECT perfil, nombre_Fotografia FROM artista ORDER BY ID_Artista DESC
            LIMIT 1");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        // SELECT de las colecciones existentes
        public function consultarColeccionSalomon(){
            $stmt = $this->dbh->query("SELECT ID_Coleccion, nombre_coleccion FROM colecciones");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //SELECT de los ponchos
        public function consultarPonchosSalomon(){
            $stmt = $this->dbh->query("SELECT ID_Poncho, nombrePoncho, nombre_ImgPoncho FROM ponchos ORDER BY ID_Poncho");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //SELECT de las pinturas
        public function consultarPinturasSalomon(){
            $stmt = $this->dbh->query("SELECT ID_Pintura, nombre_pintura, nombre_ImgPintura FROM pinturas ORDER BY ID_Pintura");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }