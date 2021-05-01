<!DOCTYPE html>
<html lang="es">

<head>
        <link rel="shortcut icon" href="../imagenes/mifavicon.png"/>

	<script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/estilos4.css" type="text/css" />
	<style type="text/css">
		._css3m {
			display: none
		}
	 </style>
	<link rel="stylesheet" href="../css/css.pie.css" type="text/css" />
	<style type="text/css">
		._css3m {
			display: none
		}
	</style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keyswords" content="html5, css3">
	<link rel="stylesheet" type="text/css" href="../css/estilos4.css">
	<link rel="stylesheet" type="text/css" href="../css/menu_desplegable_filtro.css">
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
	<title>Boards - Unlimited Tecnhology</title>
</head>

<body id="parallax" class="text-white">
	
<!--***********************-------   HEADER  -----------*************************************************-->
	<header>
           <div class="container-head">
	  
      
     <!--LOGO DE LA EMPRESA-->
	  
		<a href="../vistas/index.php"class="logo"> <img  src="../imagenes/2.png" alt="logoempresa">	</a>
	
     <!--TITULO ULIMITED TECNHOLOGY-->

	 	<a href="../vistas/index.php" class="titulo1"> <img  src="../imagenes/titulo.png" alt="UNLIMITED TECNHOLOGY"> </a>

     <!--BUSCADOR-BOTONES INICIO , REGISTRAR-->

	    <div class="buscar1">
			<div class=" barra-btn-buscar">
			   <input type="text" placeholder="Buscar" required>
			    <div class="btn">
				    <i class="fas fa-search icon"></i>
			    </div>
		    </div>
		    <a class="iniciar1" href="../vistas/login.php" ><button type="button" class="bot-log-reg">Acceder</button></a> 
		    <a class="registrar1" href="../vistas/registro.php" > <button type="button" class="bot-log-reg">Registrarse</button></a>
        </div>

<!--Menu Header-->
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
			<li class="toproot"><a href=""../vistas/servicio.php" target="marco"style="height:28px;line-height:22px;"><span>Servicios</span></a></li>
			
			<li class="toproot"><a href=""../vistas/quienes_somos.php" target="marco" style="height:28px;line-height:22px;"><span>Quienes somos?</span></a>
			</li>
			<li class="toplast"><a href=""../vistas/contactenos.php" target="marco" style="height:26px;line-height:22px;">Contactenos</a></li>
		</ul>
		
	   </div>
	</header>
<!--**************************** FIN ---- HEADER    *************************************************-->
	
<!--LISTA DE CATEGORIAS-->
<aside class="lista-cate">
		   	
		<input type="checkbox" id="menu_bar">
		<label class="fa fa-bars fa-2x"  for="menu_bar" id="menu_bar_label"></label>
				
		<nav class="menu">

	            <label class="accordion_trigger" for="at1">
		            Marcas
	            </label>
	            <input class="ac_hide" type="checkbox" id="at1"  name="x1">
	            <div class="accordion_container">
		           <ul>
    				     <li><a href="#">Iphone <span>(10.400)</span></a></li>
					     <li><a href="#">Redmi <span>(5.200)</span></a></li>
		                 <li><a href="#">Galaxy A <span>(1.200)</span></a></li>
					     <li><a href="#">Galaxy <span>(1.800)</span></a></li>
					     <li><a href="#">P Series <span>(950)</span></a></li>
					     <li><a href="#">Y Series <span>(875)</span></a></li>
					     <li><a href="#">Galaxy S <span>(800)</span></a></li>
					     <li><a href="#">Galaxy J <span>(450)</span></a></li>
					     <li><a href="#">Moto <span>(1.500)</span></a></li><br>
					     <li><a href="#">Ver todos</a></li>  
    	           </ul>
	            </div>

	            <label class="accordion_trigger" for="at2">
		            Modelos
	            </label>
	            <input class="ac_hide" type="checkbox" id="at2" name="x2">
	            <div class="accordion_container2">
		            <ul>
					   <li><a href="#">Iphone 7 <span>(500)</span></a></li>
					   <li><a href="#">Iphone 7 Plus<span>(546)</span></a></li>
					   <li><a href="#">Iphone 8 Plus <span>(300)</span></a></li>
					   <li><a href="#">Iphone 11 <span>(400)</span></a></li>
					   <li><a href="#">Iphone X <span>(950)</span></a></li><br>
					   <li><a href="#">Ver todos</a></li>  
    	            </ul>
	            </div>


	            <label class="accordion_trigger" for="at3">
		            Capacidades
	            </label>
	            <input class="ac_hide" type="checkbox" id="at3" name="x3">
	            <div class="accordion_container3">
		            <ul>
    				   <li><a href="#">16GB RAM / 256GB ROM <span>(800)</span></a></li>
					   <li><a href="#">8GB RAM / 128GB ROM <span>(750)</span></a></li>
					   <li><a href="#">4GB RAM / 64GB ROM <span>(340)</span></a></li>
					   <li><a href="#">2GB RAM / 32GB ROM<span>(750)</span></a></li>
					   <li><a href="#">1GB RAM / 16GB ROM <span>(100)</span></a></li><br>
		
					   <li><a href="#">Ver todos</a></li>
    	            </ul>
	            </div>


                <label class="accordion_trigger" for="at4">
		            Descuentos
	            </label>
	            <input class="ac_hide" type="checkbox" id="at4" name="x4">
	            <div class="accordion_container4">
		            <ul>
                       <li><a href="#">Desde 5% OFF  <span>(137)</span></a></li>
				       <li><a href="#">Desde 10% OFF <span>(50)</span></a></li>
				       <li><a href="#">Desde 15% OFF <span>(140)</span></a></li>
				       <li><a href="#">Desde 20% OFF <span>(250)</span></a></li>
				       <li><a href="#">Desde 25% OFF <span>(160)</span></a></li>
				       <li><a href="#">Desde 30% OFF <span>(161)</span></a></li><br>
		
				       <li><a href="#">Ver todos</a></li>   				
    			    </ul>
	            </div>



	            <label class="accordion_trigger" for="at5" >
		            Otras caracteristicas
	            </label>
	            <input class="ac_hide" type="checkbox" id="at5" name="x5">
	            <div class="accordion_container5">
		            <ul>
                        <li><a href="#">Es Dual SIM <span>(139)</span></a></li>
					    <li><a href="#">Resistente al agua <span>(80)</span></a></li>
					    <li><a href="#">Reconocimiento facial <span>(540)</span></a></li>
					    <li><a href="#">Lector de huella digital <span>(50)</span></a></li><br>
		
					    <li><a href="#">Ver todos</a></li>
    	            </ul>	
	            </div>


	            <label class="accordion_trigger" for="at6">
		            Red
	            </label>
	            <input class="ac_hide" type="checkbox" id="at6" name="x6">
	            <div class="accordion_container6">
		            <ul>
                        <li><a href="#">2G <span>(10.400)</span></a></li>
					    <li><a href="#">3G <span>(5.200)</span></a></li>
					    <li><a href="#">4G <span>(1.200)</span></a></li>
					    <li><a href="#">5G <span>(1.800)</span></a></li>
					    <li><a href="#">4G/LTE <span>(950)</span></a></li><br>
					    <li><a href="#" data-toggle="modal" data-target="#myModal">Ver todos</</li>  			
    	            </ul>	
	            </div>
        </nav>				
</aside>	 
      
<!--Fin del div antes de aside-->

<!--/////////////    Contenido       //////////////-->
	<section class="container-contenido">
		<article>
		    <img id="til" src="../imagenes/tit-boa.png" alt="Boards">

				<ul>
						
                   <a href="../vistas/vista_producto_50.php" class="colimag"><img id="imagen" src="../imagenes/imagen50.png">
					    <p>Board Gigabyte A320m<br><br>
					    $280,000</p>
					</li></a>

					<a href="../vistas/vista_producto_53.php" class="colimag"><img id="imagen" src="../imagenes/imagen53.png">
					    <p>Board Asus Rog Strix B450 F Gaming Amd<br>
					    $640,000</p>
					</li></a>
					<a href="../vista/vista_producto_54.php" class="colimag"><img id="imagen" src="../imagenes/imagen54.png">
					    <p> Board Asus Rog Strix B450-f Gaming<br>
					    $620,000</p>
					</li></a>
                    <a href="../vistas/vista_producto_55.php" class="colimag"><img id="imagen" src="../imagenes/imagen55.png">
					    <p>Combo Intel 10th Gen I3 10100 + Board B460 <br>
					    $1,450,000</p>
					</li></a>
					<li class="colimag"><img id="imagen" src="../imagenes/imagen52.png">
					    <p>Tarjeta Madre G41 Socket 775 Ddr3 4usb Vga Nueva Garantia<br>
					    $184,000</p>
                    </li>
                    <li class="colimag"><img id="imagen" src="../imagenes/imagen56.png">
					    <p>Combo Amd Ryzen 7 3700x + Board B550 + Memoria Ram 32gb<br>
					    $3,100,000</p>
					</li>
					<li class="colimag"><img id="imagen" src="../imagenes/imagen49.png">
					    <p>Board Gigabyte A520M DS3H<br><br>
					    $339,500</p>
				    </li>
					<li class="colimag"><img id="imagen" src="../imagenes/imagen51.png">
					    <p>Board Gigabyte B450 M Ds3h Para Ryzen<br><br>
					    $325,000</p>
				    </li>
				</ul>
		   
		</article>
	</section>
	

    <!-- FOOTER DE LA PAGINA -->

 
   <footer>
        <div class="box">
	        <div class="redes">
	            <p>Buscanos en</p><br>
	            <div><a><img id="face" src="../imagenes/facebook.png">UNLIMITED TECNOLOGY</a></div><br>
	            <div><a><img id="twit" src="../imagenes/twitter.png"> @UNLIMITED_TECNOLOGY</a></div><br>
	            <div><a><img id="gml" src="../imagenes/gmail.png">unlimited.tec2021@gmail.com</a></div>
	        </div>

	        <div class="contactenos">
		        <div><img id="phon" src="../imagenes/Phone.png">Contactenos</div> <br>	
			    <ul>
                    <li> Ingeniero de Sistemas: editoz@hotmail.com - editozz@gmail.com </li> <br>
			        <li> Celular: 310 619 91 97 </li><br>
			        <li> Servicios a domicilio de mantenimiento y soporte:<br><br>316 514 0646 – 301 366 7023 </li> 
			        <br>
		            <img id="pin" src="../imagenes/pin.png">Calle 167 C No. 54C-36 Piso 3 - Bogotá D. C. - Colombia
		            <br>
		        </ul>
		    </div>

            <div class="terminos">
		        <p><a href="../vistas/terminos y condiciones.php">Terminos y Condiciones</a></p><br>
		        <p id="copyright">| © 2021 |  Todos los derechos reservados | Unlimited Tecnhology</p>
	        </div>
	    </div>
    </footer>
</body>
</html>
