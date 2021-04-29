<?php
    include("../conexion/conexion.php");
	include("../controlador/compra_proveedor_controlador.php");	
?>
<?php 
$objeto = new Usuario();
if($_POST){
	$objeto->codigoCompraprovedor = $_POST['codigoCompraprovedor'];
	$objeto->cantidadCompraProveedor = $_POST['cantidadCompraProveedor'];
	$objeto->precioTotal = $_POST['precioTotal'];
	$objeto->fechaCompraProveedor = $_POST['fechaCompraProveedor'];
}
?>
<?php
$correrPagina = $_SERVER["PHP_SELF"];
$maximoDatos = 5;
$paginaNumero = 0;

if(isset($_GET['paginaNumero'])){
   $paginaNumero = $_GET['paginaNumero'];
}
$inicia = $paginaNumero * $maximoDatos;

?>
<?php
if(isset($_POST['guardar'])){
	$objeto->agregar();
}
if(isset($_POST['consulta'])){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$c = "select codigoCompraprovedor, cantidadCompraProveedor, precioTotal, fechaCompraProveedor from tbl_compra_proveedor where codigoCompraprovedor='$obj->codigoCompraprovedor' ";
										$limite =sprintf("%s limit %d, %d",$c, $inicia, $maximoDatos);
										$resultado = mysqli_query($con,$limite);
										$arreglo=mysqli_fetch_row($resultado);	
	
										$objeto->consultas();
} else{

										$c = new Conexion();
										$con = $c->conectarServidor();
										$c ="select codigoCompraprovedor, cantidadCompraProveedor, precioTotal, fechaCompraProveedor from tbl_compra_proveedor ";
										$limite =sprintf("%s limit %d, %d",$c, $inicia, $maximoDatos);
										$resultado = mysqli_query($con,$limite);
										$arreglo=mysqli_fetch_row($resultado);


}
if(isset($_POST['modifica'])){
	$objeto->actualizar();
}
if(isset($_POST['elimina'])){
	$objeto->eliminacion();
}
if(isset($_POST['nuevo'])){
	$objeto->limpiar();
}
if(isset($_POST['ver'])){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$c ="select codigoCompraprovedor, cantidadCompraProveedor, precioTotal, fechaCompraProveedor from tbl_compra_proveedor ";
										$limite =sprintf("%s limit %d, %d",$c, $inicia, $maximoDatos);
										$resultado = mysqli_query($con,$limite);
										$arreglo=mysqli_fetch_row($resultado);
}

?>
<?php
if(isset($_GET['totalArreglo'])){
	$totalArreglo = $_GET['totalArreglo'];
	
}
	else{
		$lista = mysqli_query($con,$c);
		$totalArreglo = mysqli_num_rows($lista);
	}
$totalPagina = ceil($totalArreglo/$maximoDatos)-1;

?>
<?php
$cargarPagina = "";
if(!empty($_SERVER['QUERY_STRING'])){
	$parametro1 = explode("&", $_SERVER['QUERY_STRING']);
	$nuevoParametro = array();
	foreach($parametro1 as $parametro2){
			if(stristr($parametro2, "paginaNumero")==false && stristr($parametro2, "totalArreglo")==false){
				 array_push($nuevoParametro, $parametro2);
			}
	}
	if(count($nuevoParametro)!=0){
		$cargarPagina = "&". htmlentities(implode("&", $nuevoParametro));
	}
}
$cargarPagina = sprintf("&totalArreglo=%d%s", $totalArreglo, $cargarPagina);


?>
<?php
    $c = new Conexion();
    $con = $c->conectarServidor();
    $consulta ="SELECT * FROM roles";
	$resultado = mysqli_query($con,$consulta);
	$arreglo= mysqli_fetch_assoc($resultado);
?>
<script language="javascript">
function validar(form){
	
 if(form.cantidadCompraProveedor.value.length==0)
   	{
    alert("Digite la cantidad Compra Proveedor");
    form.cantidadCompraProveedor.focus();
    return(false);
	}
	var letra="abcdefeghijklmnopqrstuvwxyz@-_*/ + ABCDEFGHIJKLMNOPQRSTUVWX@-_*/";
    var cadena=form.cantidadCompraProveedor.value;
    var valida=true;

    for(i=0;i<cadena.length; i++)
     {
     	ch=cadena.charAt(i);
     	for(j=0; j<letra.length; j++)
     	if(ch==letra.charAt(j))
     	break;
     	if(j==letra.length)
       		{
       		valida = false;
        	break;
        	break;
        	}
   	}
   if(!valida)
      {
	  alert("Digite una cantida de Compra del Proveedor");
	  form.cantidadCompraProveedor.focus();
	  return (false);
	  }
	
	if(form.precioTotal.value.length==0)
   	{
    alert("Digite El precioTotal");
    form.precioTotal.focus();
    return(false);
	}
	var letra="1234567890";
    var cadena=form.precioTotal.value;
    var valida=true;

    for(i=0;i<cadena.length; i++)
     {
     	ch=cadena.charAt(i);
     	for(j=0; j<letra.length; j++)
     	if(ch==letra.charAt(j))
     	break;
     	if(j==letra.length)
       		{
       		valida = false;
        	break;
        	break;
        	}
   	}
   if(!valida)
      {
	  alert("Digite el precioTotal");
	  form.precioTotal.focus();
	  return (false);
	  }
	
	if(form.codigoRol.value.length==0)
   	{
    alert("Seleccione el Rol del Usuario");
    form.codigoRol.focus();
    return(false);
	} 
	
	var confirmar=confirm("Desea Realizar Los Cambios [Aceptar] o [Cancelar]");
	if(confirmar==false)
		  {
		  return(false);
		   }
  	return (true);
	
	
}
</script>
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title> Compra Proveedor</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="compra_proveedor" class="contenedor_registro"  action="" method="POST">
		<h1> Compra Proveedor</h1>
		<div>
		<label for="codigoCompraprovedor">Codigo de compra del cliente</label>
		<input type="text" id="codigoCompraprovedor" name="codigoCompraprovedor" value="<?php echo $objeto->codigoCompraprovedor?>" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="cantidadCompraProveedor">Cantidad Compra Proveedor</label>
		<input type="text" id="cantidadCompraProveedor" name="cantidadCompraProveedor" value="<?php echo $objeto->cantidadCompraProveedor?>" placeholder="Digite la cantidad Compra proveedor"></input>
		<label for="precioTotal">Precio Total</label>
		<input type="text" id="precioTotal" name="precioTotal" value="<?php echo $objeto->precioTotal?>" placeholder="Digite el precio Total"></input>
		<label for="fechaCompraProveedor">Fecha de Compra Proveedor</label>
		<input type="text" id="fechaCompraProveedor" name="fechaCompraProveedor" value="<?php echo $objeto->fechaCompraProveedor?>" placeholder="Digite el fecha Compra Proveedor"></input>
		<label for="garantia">Garantia</label>
		<input type="text" id="garantia" name="fechaCompraProveedor" value="<?php echo $objeto->garantia?>" placeholder="Digite la garantia"></input>
		<label for="precioTotal">Precio total de la compra</label>
		<input type="text" id="precioTotal" name="fechaCompraProveedor" value="<?php echo $objeto->precioTotal?>" placeholder="Digite el precioTotal"></input>
		<label for="fechaCompra">Fecha de la Compra</label>
		<input type="text" id="fechaCompra" name="fechaCompra" value="<?php echo $objeto->fechaCompra?>" placeholder="Digite la fecha de Compra"></input>
		

		<div>
		    <select name="codigoRol" id="$objeto->codigoRol">
			<option>
					 <?php
						$s4 = "select nombreRol from roles where codigoRol ='$objeto->codigoRol'";
							$r4 = mysqli_query($con,$s4)or die(mysql_error());
							$res4 = mysqli_fetch_array($r4);
							echo $res4[0];
					

					?>
					</option>
			<?php
			do{
			    $cadena = $arreglo['codigoRol'];
				$arre = $arreglo['nombreRol'];
				if($cadena == $objeto->codigoRol){
					echo"<option value= $cadena=>$arre";
				}else{
					echo"<option value= $cadena>$arre";
				}
			}while($arreglo = mysqli_fetch_assoc($resultado));

            $row= mysqli_num_rows($resultado);
            $rows=0;
            if($rows>0){
				mysqli_data_seek($resultado,0);
				$arreglo=mysqli_fetch_assoc($resultado);
			}
			?>
			
			</select>
		</div>	
		</div>	
		<br>	
			
		<center>
		<input type="submit" name="limpiar" value="Nuevo" ></input>
		<input type="submit" name="guardar" value="Guardar" onClick="return validar(this.form)"></input>
		<input type="submit" name="modifica" value="Modificar" onClick="return validar(this.form)"></input>
		<input type="submit" name="elimina" value="Eliminar" onClick="return validar(this.form)"></input>
		<input type="submit" name="consulta" value="Consultar" onClick="return validar(this.form)"></input>
		<input type="submit" name="ver" value="Mostrar" ></input>

    <table width="544" border="0">
        <tr>
            <td><b>Código<b></td>
            <td><b>Cantidad Compra del Proveedor<b></td>
		    <td><b>Precio Total<b></td>
		    <td><b>Fecha de Compra Proveedor<b></td>
		    
		</tr>
		<?php
		                            $c = new Conexion();
		                            $con = $c->conectarServidor();
		                            $c1 = "select codigoCompraprovedor, cantidadCompraProveedor, precioTotal, fechaCompraProveedor from tbl_compra_proveedor  ";
		                            $resultado1 = mysqli_query($con, $limite);
		                            $arreglo= mysqli_fetch_row ($resultado1);
		do{
		?>
		<tr>
		    <td><?php echo $arreglo[0]?></td>
			<td><?php echo $arreglo[1]?></td>
			<td><?php echo $arreglo[2]?></td>
			<td><?php echo $arreglo[3]?></td>

		</tr>
		<?php
		}while($arreglo=mysqli_fetch_row($resultado1));
		?>
	</table>
	<br>
						<h5><?php printf("Total de Registros Encontrados %d", $totalArreglo) ?></h5>
						<br>
						<hr>
						<table border=0>
                         	
                
                <tr>
                <td><?php  
                    if($paginaNumero > 0){
                ?> <a href="<?php printf("%s?paginaNumero=%d%s",$correrPagina,0,$cargarPagina) ?>" id="paginador"> < Incio </a> <?php }?></td>
                <td><?php  
                    if($paginaNumero > 0){
                ?> <a href="<?php printf("%s?paginaNumero=%d%s",$correrPagina, max(0,$paginaNumero-1),$cargarPagina) ?>" id="paginador" > << Atras </a> <?php }?></td>
                <td><?php 
                    if($paginaNumero < $totalPagina ){
                ?> <a href="<?php printf("%s?paginaNumero=%d%s",$correrPagina, min($totalPagina,$paginaNumero+1),$cargarPagina) ?>" id="paginador">  Siguiente >> </a> <?php }?></td>
                <td><?php 
                    if($paginaNumero < $totalPagina ){
                ?> <a href="<?php printf("%s?paginaNumero=%d%s",$correrPagina, $totalPagina,$cargarPagina) ?>" id="paginador"> Final ></a> <?php } ?></td>
            
                </tr>
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>