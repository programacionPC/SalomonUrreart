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
    


// ********************************************************************************************************
// ********************************************************************************************************
        

        //INSERT de colecciones
        public function insertarColecciones($Colecciones){ 
            for($i = 0; $i<count($Colecciones); $i++){
                $stmt = $this->dbh->prepare("INSERT INTO colecciones(nombre_coleccion, fecha_creacion) VALUES (:NOMBRE, CURDATE())");

                //Se vinculan los valores de las sentencias preparadas, stmt es una abreviatura de statement
                $stmt->bindParam(':NOMBRE', $Colecciones[$i]);

                //Se ejecuta la inserción de los datos en la tabla(ejecuta una sentencia preparada )
                $stmt->execute();
            }
        }   

        // INSERT de ponchos
        public function insertarPoncho($Nombre_Poncho, $Medidas_Poncho, $Tecnica_Poncho, $nombre_ImgPoncho, $tipo_ImgPoncho, $tamanio_ImgPoncho){
            $stmt = $this->dbh->prepare("INSERT INTO ponchos(nombrePoncho, medidaPoncho, tecnicaPoncho, nombre_ImgPoncho, tamanio_ImgPoncho, tipo_ImgPoncho, fecha) VALUES (:NOMBRE, :MEDIDAS, :TECNICA, :NOMBRE_IMG, :TAMANIO_IMG, :TIPO_IMG, CURDATE())");

            //Se vinculan los valores de las sentencias preparadas, stmt es una abreviatura de statement
            $stmt->bindParam(':NOMBRE', $Nombre_Poncho);
            $stmt->bindParam(':MEDIDAS', $Medidas_Poncho);
            $stmt->bindParam(':TECNICA', $Tecnica_Poncho);
            $stmt->bindParam(':NOMBRE_IMG', $nombre_ImgPoncho);
            $stmt->bindParam(':TAMANIO_IMG', $tamanio_ImgPoncho);
            $stmt->bindParam(':TIPO_IMG', $tipo_ImgPoncho);

            //Se ejecuta la inserción de los datos en la tabla(ejecuta una sentencia preparada )
            if($stmt->execute()){
                //se recupera el ID del registro insertado
                return true;
            }
            else{
                return false;
            }
        }
    


// ********************************************************************************************************
// ********************************************************************************************************


        // UODATE de datos de perfil
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
        
        // UODATE de datos de poncho
        public function actualizar_Poncho($ID_Poncho){            
            $stmt = $this->dbh->prepare("UPDATE poncho SET nombrePoncho = :NOMBRE_PONCHO WHERE ID_Poncho = :ID_PONCHO");

            // Se vinculan los valores de las sentencias preparadas
            $stmt->bindParam(':ID_PONCHO', $ID_Poncho);
            $stmt->bindParam(':NOMBRE_PONCHO', $ID_Poncho);
            
            //Se ejecuta la inserción de los datos en la tabla(ejecuta una sentencia preparada )
            if($stmt->execute()){
                // se recupera el ID del registro insertado
                return true;
            }
            else{
                return false;
            }
        }

        // UPDATE de fotografia de perfil
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

        //SELECT de los ponchos
        public function consultarponchos(){
            $stmt = $this->dbh->query("SELECT ID_Poncho, nombrePoncho, medidaPoncho, tecnicaPoncho, nombre_ImgPoncho FROM ponchos ORDER BY ID_Poncho DESC");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


// ********************************************************************************************************
// ********************************************************************************************************

       
        //DELETE de coleccion 
        public function eliminarColeccion($ID_Coleccion){
            $stmt = $this->dbh->prepare("DELETE FROM colecciones WHERE ID_Coleccion = :ID_COLECCION");
            $stmt->bindValue(':ID_COLECCION', $ID_Coleccion, PDO::PARAM_INT);
            $stmt->execute();          
        }

        //DELETE de ponchos 
        public function eliminar_Poncho($ID_Poncho){
            $stmt = $this->dbh->prepare("DELETE FROM ponchos WHERE ID_Poncho = :ID_PONCHO");
            $stmt->bindValue(':ID_PONCHO', $ID_Poncho, PDO::PARAM_INT);
            $stmt->execute();    
    }
}