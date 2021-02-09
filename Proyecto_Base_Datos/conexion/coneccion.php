<?php
class conexion{

    private $user = "root";
    private $pass = "";

    function conectar(){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=U_T_Base' , $this->user; $this->pass);
            echo "Conectado"
        }catch(PDOception $error){
            echo "No conectado" . $error->getMessage();
        }
    }
}


$nuevaconexion = new conexion();
$nuevaconexion->conectar();
?>