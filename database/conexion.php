<?php
    class Conexion {
        private const SERVIDOR = "localhost";  
        private const NOMBRE_BD = "carnets"; 
        private const USUARIO = "root";  
        private const PASSWORD_ENCRYPTED = "QXhsMjg0MzM="; 

        public static function Conectar(){
            $opciones = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            try {
                $conexion = new PDO(
                    "mysql:host=". self::SERVIDOR . ";dbname=". self::NOMBRE_BD,
                    self::USUARIO, 
                    base64_decode(self::PASSWORD_ENCRYPTED),
                    $opciones
                );
                return $conexion;
            } catch(PDOException $e) {
                error_log("Error de conexión: ".$e->getMessage());
                die("Ocurrió un error al conectar con la base de datos. Por favor, intente más tarde.");
            }
        }
    }
?>