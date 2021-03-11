<!DOCTYPE html>
<html lang="es">
    <head>
        <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/css.pie.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
        <link rel="stylesheet" href="../css/iniciosecion.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keyswords" content="html5, css3">
        
            <!--IMPLEMENTANDO BOOTSTRAP - Ajax -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Unlimited Tecnhology-Iniciar Sesion</title>
    </head>
  <body id="fondo2">

  <div class="boxes">
    <center>
    <h1>Registrarse</h1>
    <span>or <a href="login.php">Iniciar Sesion</a></span>
    </center>

    <form action="signup.php" method="POST">
      <label for="nombre">Nombre :</label>
      <input class="field" type="text"name="nombre" id="nombre" placeholder="Nombre">

      <label for="apellido">Apellido :</label>
      <input class="field" type="text" name="apellido" id="apellido" placeholder="Apellido">

      <label for="correo" >Correo electronico :</label>
      <input class="field" name="email" type="text" placeholder="Correo electronico">

      <input class="field" name="password" type="password" placeholder="Contraseña">
      <input class="field" name="confirm_password" type="password" placeholder="Confirmar contraseña">

       <label for="dia">Fecha de nacimiento :</label>

                <select name="dia" id="dia" >
                    <option>dia</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                
                <select name="mes" id="mes">
                    <option>mes</option>
                    <option>enero</option>
                    <option>febrero</option>
                    <option>marzo</option>
                </select>

                <select name="anio" id="anio">
                    <option>año</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                </select>
      <center>
        <br><br>
      <input class="botones" type="submit" value="Registrarse"></center>
    </form>

    </div>

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