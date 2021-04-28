<?php
    include("../conexion/conexion.php");
	include("../controlador/detalles_Venta_controlador.php");	
?>
<?php 
$objeto = new Usuario();
if($_POST){
	$objeto->Id_Deta_Venta = $_POST['Id_Deta_Venta'];
	$objeto->Unid_Ventdida_Deta_Venta = $_POST['Unid_Ventdida_Deta_Venta'];
	$objeto->Precio_Unid_Deta_Venta = $_POST['Precio_Unid_Deta_Venta'];
	$objeto->Cost_Total_Venta_Deta_Venta = $_POST['Cost_Total_Venta_Deta_Venta'];
	$objeto->Id_Factu = $_POST['Id_Factu'];
	$objeto->Id_Inventario = $_POST['Id_Inventario'];
	$objeto->Id_Descuento = $_POST['Id_Descuento'];
	$objeto->codigoRol = $_POST['codigoRol'];
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
										$c = "select Id_Deta_Venta, Unid_Ventdida_Deta_Venta, Precio_Unid_Deta_Venta, Cost_Total_Venta_Deta_Venta, Id_Factu, Id_Inventario, Id_Descuento, codigoRol from detalles_Venta where Id_Deta_Venta='$obj->Id_Deta_Venta' ";
										$limite =sprintf("%s limit %d, %d",$c, $inicia, $maximoDatos);
										$resultado = mysqli_query($con,$limite);
										$arreglo=mysqli_fetch_row($resultado);	
	
										$objeto->consultas();
} else{

										$c = new Conexion();
										$con = $c->conectarServidor();
										$c ="select Id_Deta_Venta, Unid_Ventdida_Deta_Venta, Precio_Unid_Deta_Venta, Cost_Total_Venta_Deta_Venta, Id_Factu, Id_Inventario, Id_Descuento, codigoRol from detalles_Venta ";
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
										$c ="select Id_Deta_Venta, Unid_Ventdida_Deta_Venta, Precio_Unid_Deta_Venta, Cost_Total_Venta_Deta_Venta, Id_Factu, Id_Inventario, Id_Descuento, codigoRol from detalles_Venta ";
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
	
 if(form.Unid_Ventdida_Deta_Venta.value.length==0)
   	{
    alert("Digite la Unidades Ventdidas, Detalles de Venta");
    form.Unid_Ventdida_Deta_Venta.focus();
    return(false);
	}
	var letra="1234567890";
    var cadena=form.Unid_Ventdida_Deta_Venta.value;
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
	  alert("Digite las Unidades Ventdidas, Detalles de Venta");
	  form.Unid_Ventdida_Deta_Venta.focus();
	  return (false);
	  }
	
	if(form.Precio_Unid_Deta_Venta.value.length==0)
   	{
    alert("Digite El Precio de Unid, Detalles de Venta");
    form.Precio_Unid_Deta_Venta.focus();
    return(false);
	}
	var letra="1234567890";
    var cadena=form.Precio_Unid_Deta_Venta.value;
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
	  alert("Digite el Precio de Unid, Detalles de Venta");
	  form.Precio_Unid_Deta_Venta.focus();
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
		<title>detalles_Venta</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="detalles_Venta" class="contenedor_registro"  action="" method="POST">
		<h1>detalles_Venta</h1>
		<div>
		<label for="Id_Deta_Venta">Codigo de detalles ventas</label>
		<input type="text" id="Id_Deta_Venta" name="Id_Deta_Venta" value="<?php echo $objeto->Id_Deta_Venta?>" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Unid_Ventdida_Deta_Venta">Unidades Ventdidas, Detalles de Venta</label>
		<input type="text" id="Unid_Ventdida_Deta_Venta" name="Unid_Ventdida_Deta_Venta" value="<?php echo $objeto->Unid_Ventdida_Deta_Venta?>" placeholder="Digite la Unidades Ventdidas, Detalles Venta"></input>
		<label for="Precio_Unid_Deta_Venta">Precio de Unid, Detalles de Venta</label>
		<input type="text" id="Precio_Unid_Deta_Venta" name="Precio_Unid_Deta_Venta" value="<?php echo $objeto->Precio_Unid_Deta_Venta?>" placeholder="Digite el Precio Unid Detalles de Venta<"></input>
		<label for="Cost_Total_Venta_Deta_Venta">Costo Total de Ventas, Detalles Venta</label>
		<input type="text" id="Cost_Total_Venta_Deta_Venta" name="Cost_Total_Venta_Deta_Venta" value="<?php echo $objeto->Cost_Total_Venta_Deta_Venta?>" placeholder="Digite el Costo Total de Ventas"></input>
		<label for="Id_Factu">codigo de Factura</label>
		<input type="text" id="Id_Factu" name="Cost_Total_Venta_Deta_Venta" value="<?php echo $objeto->Id_Factu?>" placeholder="Digite el codigo de Factura"></input>
		<label for="Id_Inventario">codigo de Inventario </label>
		<input type="text" id="precio Total" name="Cost_Total_Venta_Deta_Venta" value="<?php echo $objeto->Id_Inventario?>" placeholder="Digite el Id_Inventario"></input>
		<label for="Id_Descuento">codigo de descuento</label>
		<input type="text" id="Id_Descuento" name="Id_Descuento" value="<?php echo $objeto->Id_Descuento?>" placeholder="Digite el codigo de descuento"></input>
		<label for="codigoRol">Codigo de rol</label>

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
            <td><b>UnidadesVentdidas, Detalles de Venta<b></td>
		    <td><b>Precio Unid Detalles de Venta<b></td>
		    <td><b>Costo Total deVenta,Detalles de Venta<b></td>
		    <td><b>Codigo de Factura<b></td>
		    <td><b>codigo de Inventario<b></td>
		    <td><b>codigo de descuento<b></td>
		    <td><b>Rol<b></td>
		</tr>
		<?php
		                            $c = new Conexion();
		                            $con = $c->conectarServidor();
		                            $c1 = "select Id_Deta_Venta, Unid_Ventdida_Deta_Venta, Precio_Unid_Deta_Venta, Cost_Total_Venta_Deta_Venta, Id_Factu, Id_Inventario, Id_Descuento, codigoRol from detalles_Venta  ";
		                            $resultado1 = mysqli_query($con, $limite);
		                            $arreglo= mysqli_fetch_row ($resultado1);
		do{
		?>
		<tr>
		    <td><?php echo $arreglo[0]?></td>
			<td><?php echo $arreglo[1]?></td>
			<td><?php echo $arreglo[2]?></td>
			<td><?php echo $arreglo[3]?></td>
			<td><?php echo $arreglo[4]?></td>
			<td><?php echo $arreglo[5]?></td>
			<td><?php echo $arreglo[6]?></td>
			<td><?php echo $arreglo[7] ?></td>
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