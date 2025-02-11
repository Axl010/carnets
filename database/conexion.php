<?php
    class Conexion {
        private const SERVIDOR = "localhost";  
        private const NOMBRE_BD = "carnets"; 
        private const USUARIO = "root";  
        private const PASSWORD = ""; 

        public static function Conectar(){
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

            try {
                $conexion = new PDO("mysql:host=". self::SERVIDOR . ";dbname=" . self::NOMBRE_BD, self::USUARIO, self::PASSWORD, $opciones);
                return $conexion;
            } catch(Exception $e) {
                die("El error de conexion es: ".$e->getMessage());
            }
        }
    }
?>