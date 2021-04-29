<?php 
 include("../conexion/conexion.php");
 include("../conexion/funcs.php");
?>
<?php
  $errors = array();

  if(!empty($_POST)){
	  
	$nombre = $mysqli->real_escape_string($_POST['nombre']);
	$apellido = $mysqli->real_escape_string($_POST['apellido']);
	$email = $mysqli->real_escape_string($_POST['email']);
	$password = $mysqli->real_escape_string($_POST['password']);
	$confirm_password = $mysqli->real_escape_string($_POST['confirm_password']);
	

	$activo = 0;
	$genero = 0;
	$perfil = 2;
	
	if(isNull($nombre, $apellido, $password, $confirm_password, $email))
	{
		$errors[] = "Debe llenar todos los campos";
	}

	if(!isEmail($email))
	{
		$errors[] = "Direccion de correo invalida";
	}

	if(!validaPassword($password, $confirm_password))
	{
		$errors[] = "Las contraseñas no coinciden";
	}

	if(emailExiste($email))
	{
		$errors[] = "El correo electronico $email ya existe";
	}

	if(count($errors) == 0)
	{
	 $pass_hash = hashPassword($password);
	 $token = generateToken();
	 
	 $registro = registraUsuario($nombre, $apellido, $pass_hash, $email, $activo, $token, $FK_Id_Genero);

	 if($registro > 0)
	 {
		 $url = 'http://'.$_SERVER["SERVER_NAME"].
		'/login/activar.php?id='.$registro.'&val='.$token;


		$asunto = 'Activar cuenta - Sistema de usuarios';
		$cuerpo = "Estimado $nombre: <br /><br />Para continuar con el
		proceso de registro, es indisepnsable de dar click
		en la siguiente  link <a href='$url'>Activar cuenta</a>";

		if(enviarEmail($email, $nombre, $asunto, $cuerpo)){

			echo "Para terminar el proceso de registro siga las
			instrucciones que le hemos enviado a la direccion de correo
			electronico: $email";

			echo"<br><a href='login.php'>Iniciar sesion</a>";
			exit;
		}


	 }else{
		 $errors[] = "Error al registrarse";
	 }

	}else{

	}

  }

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/css.pie.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
        <link rel="stylesheet" href="../css/iniciosecion.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
        <link rel="stylesheet" href="../css/estilos3.css" type="text/css" /><style type="text/css">._css3m {display: none;}}</style>
        <link rel="stylesheet" type="text/css" href="../css/estilos3.css">
        <link rel="stylesheet" type="text/css" href="../css/menu_desplegable_filtro.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keyswords" content="html5, css3">
         <!-- <link rel="stylesheet" type="text/css" href="../css/icono.css">  -->   
        <!--tipografia Josefin Sans-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
        
            <!--IMPLEMENTANDO BOOTSTRAP - Ajax -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Unlimited Tecnhology-Iniciar Sesion</title>
    </head>  
    <!--***********************-------   HEADER  -----------*************************************************-->
	<header>
           <div class="container-head">
	  
      
     <!--LOGO DE LA EMPRESA-->
	  
		<img class="logo" src="../imagenes/2.png" alt="logoempresa">	
	
     <!--TITULO ULIMITED TECNHOLOGY-->

		  <img class="titulo1" src="../imagenes/titulo.png" alt="UNLIMITED TECNHOLOGY">

     <!--BUSCADOR-BOTONES INICIO , REGISTRAR-->

	 <div class="buscar1">
			<div class=" barra-btn-buscar">
			   <input type="" placeholder="Buscar" required>
			   <div class="btn">
				<i class="fas fa-search icon"></i>
			  </div>
		      </div>
		     
        </div>

	<!--MENU-->	


		<ul id="css3menu1" class="topmenu">
			<li class="topmenu"><a href="index.php" target="marco" style="height:28px;line-height:22px;">Inicio</a>
			</li>
			<li class="toproot"><a href="#" target="marco"style="height:28px;line-height:22px;"><span>Productos</span></a>
				<ul>
					<li><a href="../vistas/celulares.php" target="marco">Celulares</a></li>
					<li><a href="../vistas/computadores.php" target="marco">Computadores</a>

					    <ul style="left:150px;">
							
					    <li><a href="../vistas/combo teclado + mouse.php">Combo teclado + Mouse</a></li>
						<li><a href="../vistas/portatiles.php">Portatiles</a></li>
						<li><a href="../vistas/equipos de escritorio.php">Equipos De Escritorio</a></li>
						<li><a href="../vistas/equipos todo en uno.php">Equipos Todo En Uno</a></li>
                        </ul>
						</li>
				
					<li><a href="../vistas/boards.php" target="marco">Boards</a></li>
					<li><a href="../vistas/tarjetas graficas.php" target="marco">Tarjetas Graficas</a></li>
					<li><a href="../vistas/procesadores.php" target="marco">Procesadores</a></li>
					<li><a href="../vistas/gabinetes.php" target="marco">Gabinetes</a></li>
					<li><a href="../vistas/fuentes de poder.php" target="marco">Fuentes De Poder</a></li>
					<li><a href="../vistas/impresoras.php" target="marco">Impresoras</a>
					<li><a href="../vistas/herramientas.php" target="marco">herramientas</a>
			

					<ul style="left:150px;">	
					    <li><a href="../vistas/componentes.php">Componentes</a></li>
						<li><a href="../vistas/repuestos.php">Repuestos</a></li>
						<li><a href="../vistas/cableado.php">Cableado</a></li>
                        </ul>
						</li>
				</ul>
			</li>
			<li class="toproot"><a href="servicio.php" target="marco"style="height:28px;line-height:22px;"><span>Servicios</span></a></li>
			
			<li class="toproot"><a href="quienes somos.php" target="marco" style="height:28px;line-height:22px;"><span>Quienes somos?</span></a>
			</li>
			<li class="toplast"><a href="contactenos.php" target="marco" style="height:26px;line-height:22px;">Contactenos</a></li>
		</ul>
		
	   </div>
	</header>
<!--**************************** FIN ---- HEADER    *************************************************-->

     <body id="fondo2">
     <section>   
    <div class="boxe">
        
        <img id="img" src="../imagenes/user_icon.png" alt="icono-usiario">
        

    <center><h1>Iniciar Sesion</h1></center>
    <center><span>ó <a href="registro.php">Registrarse</a></span></center>

        <form action="login.php" method="POST">
               <input name="email" type="text" class="field" placeholder="Correo Electronico" required>
               <input name="password" type="password" class="field" placeholder="Contraseña" required >
               <input type="checkbox" class="check-box" ><span>Recordar contraseña</span>
               <br><br><br><br>
        


        <div class="cajabotones">
            <input type="submit" value="Iniciar Sesion"  class="botones">
        </div>
       
            <p id="terminos-condiciones" ><a href="../vista/terminos y condiciones.html">Terminos y Condiciones</a></p>
            <br><br>
            <p><center>| © 2021 todos los derechos reservados |</center></p>



            
    
    </form>
    </div>
     </section>




    <!-- FOOTER DE LA PAGINA -->

 
    
    <footer>
    	<div class="box">
	    <div class="redes">
	       <p>Buscanos en</p><br>
	          <div><a><img id="face" src="../imagenes/facebook.png">UNLIMITED TECNOLOGY</a></div><br>
	          <div><a><img id="twit" src="../imagenes/twitter.png"> @UNLIMITED_TECNOLOGY</a></div><br>
	          <div><a><img id="gml" src="../imagenes/instagram.png">unlimited.tec2021</a></div>
	    </div>

	    <div class="contactenos">
		      <div><img id="phon" src="../imagenes/Phone.png">Contactenos</div> <br>	
			<ul>
                            <li> Ingeniero de Sistemas: editoz@hotmail.com - editozz@gmail.com </li> <br>
			    <li> Celular: 310 619 91 97 </li><br>
			    <li> Servicios a domicilio de mantenimiento y soporte:<br><br>316 514 0646 – 301 366 7023 </li> <br>
		            <img id="pin" src="../imagenes/pin.png">Calle 167 C No. 54C-36 Piso 3 - Bogotá D. C. - Colombia<br>
		        </ul>
		     </div>

             <div class="terminos">
		   <p><a href="../vista/terminos y condiciones.html">Terminos y Condiciones</a></p><br>
		   <p id="copyright">| © 2021 |  Todos los derechos reservados | Unlimited Tecnhology</p>
	      </div>
	</div>
   </footer>

   
     </body>
</html>
