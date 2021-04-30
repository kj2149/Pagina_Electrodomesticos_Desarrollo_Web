<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="keyswords" content="html5, css3">
	    <script src="https://use.fontawesome.com/56837f1421.js"></script>
		<meta name="viewport" content="css, php, html">
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	    <!--IMPLEMENTANDO BOOTSTRAP - Ajax -->
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<title>Administrador</title>
		<link rel="stylesheet" href="../css/estilos3.css">
		<link rel="stylesheet" href="../css/estilos5.css">
		<link rel="stylesheet" href="../css/css.pie.css" type="text/css" />
	</head>
	<body>

<!--***********************-------   HEADER  -----------*************************************************-->
	<header>
           <div class="container-head">
	  
      
     <!--LOGO DE LA EMPRESA-->
	  
		<a href="../vistas/index.php"class="logo"><img  src="../imagenes/2.png" alt="logoempresa">	</a>
	
     <!--TITULO ULIMITED TECNHOLOGY-->

	 	<a href="../vistas/index.php" class="titulo1"><img  src="../imagenes/titulo.png" alt="UNLIMITED TECNHOLOGY"></a>

     <!--BUSCADOR-BOTONES INICIO , REGISTRAR-->

	 <div class="buscar1">
			<div class=" barra-btn-buscar">
			  <input type="text" placeholder="Buscar" required>
			  <div class="btn">
				<i class="fas fa-search icon"></i>
			  </div>
		      </div>
		      <a class="iniciar1" href="../vistas/login.php" ><button type="button" class="bot-log-reg">Acceder</button></a> 
		      <a class="registrar1" href="#" > <button type="button" class="bot-log-reg">Registrarse</button></a>
        </div>
  
    <!--Menu Header-->
		<ul id="css3menu1" class="topmenu">
			<li class="topmenu"><a href="inicio.php" target="marco" style="height:28px;line-height:22px;">Inicio</a>
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
<!--LISTA DE CATEGORIAS-->
	<aside class="lista-cate">
		   

				
			<nav class="menu">

	            <label class="accordion_trigger" for="at1"><a href="../vistas/calificacion.php"> Calificacion </a></label>
	            <input class="ac_hide" type="checkbox" id="at1"  name="x1">
	            <div class="accordion_container">
	            		   

	            </div>

	            <label class="accordion_trigger" for="at2"><a href="../vistas/Categoria_producto.php"> Categoria Producto</a></label>
	            <input class="ac_hide" type="checkbox" id="at2" name="x2">
	            <div class="accordion_container2">

	    
	            </div>


	            <label class="accordion_trigger" for="at3"><a href="../vistas/ciudad.php"> Ciudad</a> </label>
	            <input class="ac_hide" type="checkbox" id="at3" name="x3">
	            <div class="accordion_container3">
	            </div>


                <label class="accordion_trigger" for="at4"><a href="../vistas/Compra_cliente.php"> Compra Cliente</a></label>
	            <input class="ac_hide" type="checkbox" id="at4" name="x4">
	            <div class="accordion_container4">
	            
	            </div>



	            <label class="accordion_trigger" for="at5"><a href="../vistas/compra_proveedor.php"> Compra Proveedor</a> </label>
	            <input class="ac_hide" type="checkbox" id="at5" name="x5">
	            <div class="accordion_container5">
             	
	            </div>


	            <label class="accordion_trigger" for="at6"><a href="../vistas/contacto.php"> Contacto</a></label>
	            <input class="ac_hide" type="checkbox" id="at6" name="x6">
	            <div class="accordion_container6">
	
	            </div>

	             <label class="accordion_trigger" for="at7"><a href="../vistas/departamento.php"> Departamento</a> </label>
	            <input class="ac_hide" type="checkbox" id="at7"  name="x7">
	            <div class="accordion_container7">

	            </div>

	            <label class="accordion_trigger" for="at8"><a href="../vistas/descuento.php"> Descuento</a> </label>
	            <input class="ac_hide" type="checkbox" id="at8" name="x8">
	            <div class="accordion_container8">
		 
	            </div>


	            <label class="accordion_trigger" for="at9"><a href="../vistas/detalles_Ventas.php"> Destalles Venta</a> </label>
	            <input class="ac_hide" type="checkbox" id="at9" name="x9">
	            <div class="accordion_container9">
		         
	            </div>
                

                <label class="accordion_trigger" for="at10"><a href="../vistas/edad.php"> Edad </a></label>
	            <input class="ac_hide" type="checkbox" id="at10" name="x10">
	            <div class="accordion_container10">
		         
	            </div>

                <label class="accordion_trigger " for="at11"><a href="../vistas/envio.php"> Envio</a></label>
	            <input class="ac_hide" type="checkbox" id="at11" name="x11">
	            <div class="accordion_container11">

	            </div>



	            <label class="accordion_trigger" for="at12"><a href="../vistas/factura.php"> Factura</a> </label>
	            <input class="ac_hide" type="checkbox" id="at12" name="x12">
	            <div class="accordion_container12">
             	
	            </div>


	            <label class="accordion_trigger" for="at13"><a href="../vistas/genero.php"> Genero</a></label>
	            <input class="ac_hide" type="checkbox" id="at13" name="x13">
	            <div class="accordion_container13">


                </div>

	            <label class="accordion_trigger" for="at14"><a href="../vistas/inventario.php"> Inventario </a></label>
	            <input class="ac_hide" type="checkbox" id="at14"  name="x14">
	            <div class="accordion_container14">

	            </div>

	            <label class="accordion_trigger" for="at15"><a href="../vistas/orden_compra.php">  Orden Compra</a></label>
	            <input class="ac_hide" type="checkbox" id="at15" name="x15">
	            <div class="accordion_container15">
		
	            </div>


	            <label class="accordion_trigger" for="at16"><a href="../vistas´pago.php"> Pago </a></label>
	            <input class="ac_hide" type="checkbox" id="at16" name="x16">
	            <div class="accordion_container16">
		         
	            </div>


                <label class="accordion_trigger" for="at17"><a href="../vistas/perfil.php"> Perfil</a></label>
	            <input class="ac_hide" type="checkbox" id="at17" name="x17">
	            <div class="accordion_container17">
               


		
	            </div>



	            <label class="accordion_trigger" for="at18"><a href="../vistas/producto.php"> Producto</a> </label>
	            <input class="ac_hide" type="checkbox" id="at18" name="x18">
	            <div class="accordion_container18">
             	
	            </div>


	            <label class="accordion_trigger" for="at19"><a href="../vistas/usuarios.php"> Usuario</a></label>
	            <input class="ac_hide" type="checkbox" id="at19" name="x19S">
	            <div class="accordion_container19">

	             
		            
		            
	            </div>
            </nav>
          				
</aside>	


   <!-- <footer>
    	<div class="box">
	        <div class="redes">
	             <p>Buscanos en</p><br>
	             <div><a><img id="face" src="../imagenes/facebook.png">UNLIMITED TECNOLOGY</a></div><br>
	             <div><a><img id="twit" src="../imagenes/twitter.png"><a href="../vistas/.php"> @UNLIMITED_TECNOLOGY</a></div><br>
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
		         <p><a href="../vista/terminos y condiciones.php">Terminos y Condiciones</a></p><br>
		         <p id="copyright">| © 2021 |  Todos los derechos reservados | Unlimited Tecnhology</p>
	        </div>
	 </div>
   </footer>-->
</body>
</html>