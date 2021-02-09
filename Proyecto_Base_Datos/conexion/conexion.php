<?php 
class conexion{

    private $usuario = "root";
    private $contraseña = "";
    private $host= "localhost";
    private $db= "u_t_base";

    function conectar(){

        try{

            $pdo = new PDO ( "mysql:host=$this->host;dbname=$this->db", $this->usuario, $this->contraseña);

            echo "Conectado XD";
        }catch(PDOException $error ){
            echo "No se puedo conectar" . $error->getMessage();
        }
    }
}

$nuevaconexion = new conexion;
$nuevaconexion->conectar();
?>