<?php
    include("../conexion/conexion.php");
	/*include("../controlador/ususarios.class.php");	*/
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/estilos3.css" type="text/css" />
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
	<link rel="stylesheet" type="text/css" href="../css/estilos3.css">
	<!--IMPLEMENTANDO BOOTSTRAP - Ajax -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>unlimited tecnhology</title>
</head>

<body id="parallax" class="text-white">

	<header class="">
		<img class="logo" src="../imagenes/2.jpg" alt="logoempresa">

		<h1 class="titulo1">UNLIMITED TECNHOLOGY</h1>

		<div class="buscar1">
			<input type="text" placeholder="Buscar" required>
			<div class="btn">
				<i class="fas fa-search icon"></i>
			</div>
		</div>

		<a class="iniciar1" href="../vista/login.html">iniciar sesion</a>
		<a class="registrar1" href="#">registrarse</a>



		<input type="checkbox" id="css3menu-switcher" class="c3m-switch-input">
		<ul id="css3menu1" class="topmenu">
			<li class="switch"><label onclick="" for="css3menu-switcher"></label></li>
			<li class="topmenu"><a href="../vistas/index.php" target="marco" style="height:28px;line-height:22px;">inicio</a></li>
			<li class="toproot"><a href="#" target="marco"
					style="height:28px;line-height:22px;"><span>productos</span></a>
					<ul>
					<li><a href="../vistas/celulares.php" target="marco">Celulares</a></li>
					<li><a href="../vistas/computadores.php" target="marco">Computadores</a>

					    <ul style="left:190px;">
							
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
			

					<ul style="left:190px;">	
					    <li><a href="../vistas/componentes.php">Componentes</a></li>
						<li><a href="../vistas/repuestos.php">Repuestos</a></li>
						<li><a href="../vistas/cableado.php">Cableado</a></li>
                        </ul>
						</li>
				</ul>
			</li>
			<li class="toproot"><a href="#" target="marco"
					style="height:28px;line-height:22px;"><span>servicios</span></a>
				<ul>
					<li><a href="#" target="marco">instalaciones</a></li>
					<li><a href="#" target="marco">mantenimiento</a></li>
					<li><a href="#" target="marco">proyectos</a></li>
				</ul>
			</li>
			<li class="toproot"><a href="#" target="marco" style="height:28px;line-height:22px;"><span>Quienes
						somos?</span></a>
				<ul>
					<li><a href="#" target="marco">vision y mision</a></li>
					<li><a href="#" target="marco">valores calidad</a></li>
					<li><a href="#" target="marco">Que hacemos?</a></li>
				</ul>
			</li>
			<li class="toplast"><a href="#" target="marco" style="height:26px;line-height:22px;">contactenos</a></li>
		</ul>
		<p class="_css3m"><a href="http://css3menu.com/">drop down menu html</a> by Css3Menu.com</p>

	</header>


	<div>
		<div class="slider">
			<ul>
				<li><img src="../imagenes/s1.png" alt=""></li>
				<li><img src="../imagenes/s2.jpg" alt=""></li>
				<li><img src="../imagenes/s3.jpg" alt=""></li>
				<li><img src="../imagenes/s4.jpg" alt=""></li>
			</ul>
		</div>
		<aside class="aside" style="height:1210px;">
			<div class="filtro">

				<h3 class="text-white">Celulares</h3>
				<p>36.744 resultados</p>

				<h4 class="text-white">Tiendas oficiales</h4>
				<a href="#"><span>Solo tiendas oficiales</span>
					<span>(200)</span></a>

				<h4 class="text-white">Marcas</h4>

				<ul>
					<li><a href="#">Iphone <span>(10.400)</span></a></li>
					<li><a href="#">Redmi <span>(5.200)</span></a></li>
					<li><a href="#">Galaxy A <span>(1.200)</span></a></li>
					<li><a href="#">Galaxy <span>(1.800)</span></a></li>
					<li><a href="#">P Series <span>(950)</span></a></li>
					<li><a href="#">Y Series <span>(875)</span></a></li>
					<li><a href="#">Galaxy S <span>(800)</span></a></li>
					<li><a href="#">Galaxy J <span>(450)</span></a></li>
					<li><a href="#">Moto <span>(1.500)</span></a></li>

					<li><a href="#" data-toggle="modal" data-target="#myModal">Ver todos</a></li>
				</ul>

				<h4 class="text-white">Modelos</h4>

				<ul>
					<li><a href="#">Iphone 7 <span>(500)</span></a></li>
					<li><a href="#">Iphone 7 Plus<span>(546)</span></a></li>
					<li><a href="#">Iphone 8 Plus <span>(300)</span></a></li>
					<li><a href="#">Iphone 11 <span>(400)</span></a></li>
					<li><a href="#">Iphone X <span>(950)</span></a></li>

					<li><a href="#">Ver todos</a></li>
				</ul>

				<h4 class="text-white">Capacidades</h4>

				<ul>

					<li><a href="#">16GB RAM / 256GB ROM <span>(800)</span></a></li>
					<li><a href="#">8GB RAM / 128GB ROM <span>(750)</span></a></li>
					<li><a href="#">4GB RAM / 64GB ROM <span>(340)</span></a></li>
					<li><a href="#">2GB RAM / 32GB ROM<span>(750)</span></a></li>
					<li><a href="#">1GB RAM / 16GB ROM <span>(100)</span></a></li>

					<li><a href="#">Ver todos</a></li>
				</ul>

				<h4 class="text-white">Descuentos</h4>

				<ul>

					<li><a href="#">Desde 5% OFF  <span>(137)</span></a></li>
					<li><a href="#">Desde 10% OFF <span>(50)</span></a></li>
					<li><a href="#">Desde 15% OFF <span>(140)</span></a></li>
					<li><a href="#">Desde 20% OFF <span>(250)</span></a></li>
					<li><a href="#">Desde 25% OFF <span>(160)</span></a></li>
					<li><a href="#">Desde 30% OFF <span>(161)</span></a></li>

					<li><a href="#">Ver todos</a></li>
				</ul>

                <h4 class="text-white">Otras caracteristicas</h4>

				<ul>

					<li><a href="#">Es Dual SIM <span>(139)</span></a></li>
					<li><a href="#">Resistente al agua <span>(80)</span></a></li>
					<li><a href="#">Reconocimiento facial <span>(540)</span></a></li>
					<li><a href="#">Lector de huella digital <span>(50)</span></a></li>

					<li><a href="#">Ver todos</a></li>
				</ul>				


				<h4 class="text-white">Red</h4>

				<ul>
					<li><a href="#">2G <span>(10.400)</span></a></li>
					<li><a href="#">3G <span>(5.200)</span></a></li>
					<li><a href="#">4G <span>(1.200)</span></a></li>
					<li><a href="#">5G <span>(1.800)</span></a></li>
					<li><a href="#">4G/LTE <span>(950)</span></a></li>

					<li><a href="#" data-toggle="modal" data-target="#myModal">Ver todos</a></li>
				</ul>

			</div> 

		</aside>
<!--Fin del div antes de aside-->
  
<!--/////////////          HEAD           //////////////-->

	<section>
		<article>
		    <h1 class="til">CABLEADO</h1>
	            <P>
			         <ul>
                     <li class="col col-sm-2"><img class="img-fluid" id="imagen" src="../imagenes/imagen41.jpg">	
							<h3>Propack 3 Rollos de Alambre N12 X 100M Blanco</h3>
								<h4>$366.900</h4></li>
						<li class="col col-sm-2"><img class="img-fluid" id="imagen" src="../imagenes/imagen42.jpg">	
							<h3>Alambre N10 100M Negro Nexans</h3>
								<h4>$210.900</h4></li>
						<li class="col col-sm-2"><img class="img-fluid" id="imagen" src="../imagenes/imagen43.jpg">	
							<h3>Nexans Alambre #10 100m Color Rojo</h3>
								<h4>$210.900</h4></li>
						<li class="col col-sm-2"><img class="img-fluid" id="imagen" src="../imagenes/imagen44.jpg">	
							<h3>Alambre #12 100 metros negro Conectores y Cables</h3>
								<h4>$124.900</h4></li>
						<li class="col col-sm-2"><img class="img-fluid" id="imagen" src="../imagenes/imagen45.jpg">	
							<h3>Nexans Alambre #14 100m Color Verde</h3>
								<h4>$89,000</h4></li>
						<li class="col col-sm-2"><img class="img-fluid" id="imagen" src="../imagenes/imagen46.jpg">	
							<h3>Procables Alambre N12 100mt Propack 4und (1AMAR 1BCO 1RJO 1VDE)</h3>
								<h4>$489,000</h4></li>
						<li class="col col-sm-2"><img class="img-fluid" id="imagen" src="../imagenes/imagen47.jpg">	
							<h3>Procables Alambre N12 100mt Propack 4und (1NEG 1BCO 1VDE 1AZUL)</h3>
								<h4>$460,000</h4></li>
						<li class="col col-sm-2"><img class="img-fluid" id="imagen" src="../imagenes/imagen48.jpg">	
							<h3>Alambre #14 100 metros amarillo Conectores y Cables</h3>
								<h4>$88.900</h4></li>
                            
		
		</article>
	</section>
	

    <!-- FOOTER DE LA PAGINA -->

 
    <footer>
	   <div class="redes">
	   	<br></br>
		   <p>Buscanos en</p><br>
	     <lu>
	          <div><a><img id="face" src="../imagenes/facebook.png">UNLIMITED TECNOLOGY</a></div><br>
	          <div><a><img id="twit" src="../imagenes/twitter.png"> @UNLIMITED_TECNOLOGY</a></div><br>
			  <div><a><img id="gml" src="../imagenes/gmail.png">unlimited.tec2021@gmail.com</a></div>
		</div>

		<div class="contactenos">
		  <div><img id="phon" src="../imagenes/Phone.png">Contactenos</div><br>
			<ul>
			<div id="contac">
             <li>Ingeniero de Sistemas: editoz@hotmail.com - editozz@gmail.com</li><br>
			 <li>Celular: 310 619 91 97</li><br>
			 <li>Servicios a domicilio de mantenimiento y soporte:<br></br>316 514 0646 – 301 366 7023</li><br>
			</div>
			 </lu>
		<img id="pin" src="../imagenes/pin.png">Calle 167 C No. 54C-36 Piso 3 - Bogotá D. C. - Colombia<br>
		</div>
           <div id="copyright"> 
			<p>| © 2021 todos los derechos reservados |</p>
		   </div>

	     <div id="terminos">
		  <p><a href="../vista/terminos y condiciones.html">Terminos y Condiciones</a></p><br>
		  
	    </div>
   </footer>


</body>
</html>
<?php
    include("../conexion/conexion.php");
	/*include("../controlador/ususarios.class.php");	*/
?>