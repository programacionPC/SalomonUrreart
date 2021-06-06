<?php
    class SalomonPanel_M extends CI_Model{

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
        
        //INSERT de colecciones
        public function insertarColecciones($Colecciones){ 
            for($i = 0; $i<count($Colecciones); $i++){
                // foreach($Colecciones[$i] as $key){
                //     $key;  
                // }
                $stmt = $this->dbh->prepare("INSERT INTO colecciones(nombre_coleccion, fecha_creacion) VALUES (:NOMBRE, CURDATE())");

                // insertar una fila
                // $Coleccion = $Colecciones['Nombre'];

                //Se vinculan los valores de las sentencias preparadas, stmt es una abreviatura de statement
                $stmt->bindParam(':NOMBRE', $Colecciones[$i]);

                //Se ejecuta la inserción de los datos en la tabla(ejecuta una sentencia preparada )
                $stmt->execute();
            }
        }



        // INSERT de datos de perfil
        public function actualizarPerfil($Perfil){            
            $stmt = $this->dbh->prepare("UPDATE artista SET perfil = :PERFIL");

            // Se vinculan los valores de las sentencias preparadas
            $stmt->bindParam(':PERFIL', $Perfil);
            
            //Se ejecuta la inserción de los datos en la tabla(ejecuta una sentencia preparada )
            if($stmt->execute()){
                // se recupera el ID del registro insertado
                return true;
            }
            else{
                return false;
            }
        }

        // INSERT de fotografia de perfil
        public function actualizarFotografia($nombre_Fotografia, $tipo_Fotografia, $tamanio_Fotografia){
            $stmt = $this->dbh->prepare("UPDATE artista SET nombre_Fotografia = :NOMBRE_FOTO, tipo_Fotografia = :TIPO_FOTO, tamanio_Fotografia = :TAMANIO_FOTO");

            //Se vinculan los valores de las sentencias preparadas, stmt es una abreviatura de statement
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



        //SELECT de las colecciones 
        public function consultarPerfilSalomon(){
            $stmt = $this->dbh->query("SELECT perfil, nombre_Fotografia FROM artista ORDER BY ID_Artista DESC
            LIMIT 1");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        // SELECT de las colecciones exitentes
        public function consultarcolecciones(){
            $stmt = $this->dbh->query("SELECT ID_Coleccion, nombre_coleccion FROM colecciones");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }