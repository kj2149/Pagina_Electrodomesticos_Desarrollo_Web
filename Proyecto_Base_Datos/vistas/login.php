<!DOCTYPE html>
<html lang="es">
    <head>
        <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/pie_pag_login.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
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
     <section>   
    <div class="boxe">
        
        <img id="img" src="../imagenes/user_icon.png" alt="icono-usiario">
        

    <center><h1>Iniciar Sesion</h1></center>
    <center><span>or <a href="registro.php">Registrarse</a></span></center>

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
