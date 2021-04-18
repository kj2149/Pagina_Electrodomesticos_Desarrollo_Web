<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="../imagenes/mifavicon.png"/>

	<script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../css/css.pie.css" type="text/css" />
	<style type="text/css">
		._css3m {
			display: none
		}

	</style>
	<link rel="stylesheet" href="../css/estilos_pago.css" type="text/css" />
	<style type="text/css">
		._css3m {
			display: none
		}
		
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
	<meta name="keyswords" content="html5, css3">
	<script src="https://use.fontawesome.com/56837f1421.js"></script>
   <!-- <link rel="stylesheet" type="text/css" href="../css/icono.css">  -->   
        <!--tipografia Josefin Sans-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

	<!--IMPLEMENTANDO BOOTSTRAP - Ajax -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Haz tu Pago - Unlimited Tecnhology</title>
</head>
<body>
	<!----------- Header ----------->
 <header>

  	<div class="content-til">
         
          <a href="../vista/index.php" class="logo"> <img  src="../imagenes/2.png" alt="logoempresa"></a>
  		  <h1> Realiza tu Pago</h1>
  		
  	</div>

  
 </header>
<!--antes-->
    <div class="til-formulario"> <h2>Pago seguro</h2> <img class="imag-pago" src="../imagenes/proteger.png" alt="ima-empresa"></div>
	
 <!------------------- FORMULARIO  ------------------------>
    <div class="content-for-pago">

        <h3>Opciones de pago</h3>

        <div class="btn-opc-pago">
           <input type="radio" name="Tipopago" value="i" id="Tarjeta">
           <label for="Tarjeta">Tarjeta de credito</label>  
 	       <img  for="Tarjeta" class="ima-opc-pago" src="../imagenes/tarjeta.png" alt="ima-empresa">
 	 
             <form action="" class="content-formulario">
 	    	    <p>Numero de tarjeta*:</p> <input type="text" name="Numero de Tarjeta"required class="casilla-for" placeholder="Inserte su numero de tarjeta"><br>
        	    <p>Fecha de vencimiento*:</p> <input type="date" name="Fecha de vencimiento"required class="casilla-for" ><br>
        	    <p>Codigo cvv*:</p> <input type="text" name="Codigo-tarjeta"required class="casilla-for"><br>
                <p>Direccion*:</p> <input type="text" name="Direccion"required class="casilla-for" placeholder="Inserte su Direccion"><br>
        		<p>Nombre*:</p> <input type="text" name="nombre"required class="casilla-for" placeholder="Nombre"><br>
        		<p>Apellido*:</p> <input type="text" name="Apellido"required class="casilla-for" placeholder="Apellido"><br>
        		<p>Telefono*:</p> <input type="Telefono" name="Telefono"required class="casilla-for" placeholder="Inserte su numero telefonico"><br>
        		<p>Celular:</p> <input type="text" name="Celular" class="casilla-for" placeholder="Inserte su Celular"><br>
        		<p>email:</p> <input type="email" name="correo" class="casilla-for" placeholder="email@example.com"><br>
        		<p>Cedula*:</p> <input type="text" name="Cedula"required class="casilla-for" placeholder="Inserte su Cedula"><br>
        		<p>Codigo postal:</p> <input type="text" name="Codigo postal" class="casilla-for" placeholder="Su Codigo postal ejm(111111)"><br>

        	    <input type="submit" name="ENVIAR" class="btn-enviar">
        	</form>	
        </div>
         

        <div class="btn-opc-pago">
            <input type="radio" name="Tipopago" value="i" id="Paypal">
            <label for="Paypal">PayPal</label>
            <img for="Paypal" class="ima-opc-pago" src="../imagenes/paypal.png" alt="ima-empresa">
      
        
     
        	<form action="" class="content-formulario2">
                
            
        		<p>Email*:</p> <input type="email" name="correo"required class="casilla-for"><br>
        		<p>Codigo postal:</p> <input type="text" name="Codigo postal"required class="casilla-for"><br>


        	    <input type="submit" name="ENVIAR"class="btn-enviar">
        	</form>	
        </div>

        <div class="btn-opc-pago">
            <input type="radio" name="Tipopago" value="i" id="Transferencia-bancaria">
            <label for="Transferencia-bancaria">Transferencia bancaria</label>
            <img  for="Transferencia-bancaria" class="ima-opc-pago" src="../imagenes/transferencia-bancaria.png" alt="ima-empresa">

        	<form action="" class="content-formulario3"> 

                <p>Apellido*:</p> <input type="text" name="Apellido"required class="casilla-for"><br>
        		<p>Nombre*:</p> <input type="text" name="nombre"required class="casilla-for"><br>
                
                <div class="con-tipo-doc">
                    <h6>Tipo de documento:</h6>
                    <p><input type="radio" name="Tipo de documento"required> NIT</p>
                    <p><input type="radio" name="Tipo de documento"required> Pasaporte</p>
                    <p><input type="radio" name="Tipo de documento"required> C.C.</p>
                    <p><input type="radio" name="Tipo de documento"required> Canet de Extranjeria</p>
                </div>
                <p>Numero de documento*:</p><input type="text" name="Cedula"required class="casilla-for" placeholder="1234567899"><br> 
        		<p>Email:</p> <input type="email" name="correo" class="casilla-for" placeholder="email@example.com"><br>
        		<p>Direccion*:</p> <input type="text" name="Direccion"required class="casilla-for" placeholder="Ingrese Direccion"><br>
        		<p>Codigo bancario:</p> <input type="text" name="Codigo bancario" class="casilla-for" placeholder="p.ej. 002"><br>

        	    <input type="submit" name="ENVIAR" class="btn-enviar">
        	</form>	
        </div>

     </div>
	<!------------------- FOOTER DE LA PAGINA  ------------------------>
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
    
<!----------- Evento JavaScript ----------->
  <script type="text/javascript">
	$(function(){

    $('.content-formulario').hide();
    $('.content-formulario2').hide();
    $('.content-formulario3').hide();
     

    $('#Tarjeta').click(function(){
        $('.content-formulario').show();
        $('.content-formulario2').hide();
        $('.content-formulario3').hide();

    });
    $('#Paypal').click(function(){
        $('.content-formulario').hide();
        $('.content-formulario2').show();
        $('.content-formulario3').hide();

    });

    $('#Transferencia-bancaria').click(function(){
        $('.content-formulario').hide();
        $('.content-formulario2').hide();
        $('.content-formulario3').show();

    });
    
 } );
</script>


</body>
</html>
