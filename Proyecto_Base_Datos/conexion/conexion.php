<?php /*
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
?>*/


	
	$mysqli=new mysqli("localhost","root","","u_t_base"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>

