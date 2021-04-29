<?php
    include("../conexion/conexion.php");
	include("../controlador/detalles_venta_controlador.php");	
?>
<?php 
$objeto = new Usuario();
if($_POST){
	$objeto->Id_Factu = $_POST['Id_Factu'];
	$objeto->Total_IVA_Factu = $_POST['Total_IVA_Factu'];
	$objeto->Precio_Total_Comp_Factu = $_POST['Precio_Total_Comp_Factu'];
	$objeto->Fech_Facturacion_Factu = $_POST['Fech_Facturacion_Factu'];
	$objeto->Hora_Fact = $_POST['Hora_Fact'];
	$objeto->Sub_Total_Factu = $_POST['Sub_Total_Factu'];
	$objeto->Id_Produc = $_POST['Id_Produc'];
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
										$c = "select Id_Factu, Total_IVA_Factu, Precio_Total_Comp_Factu, Fech_Facturacion_Factu, Hora_Fact, Sub_Total_Factu, Id_Produc from tbl_factura where Id_Factu='$obj->Id_Factu' ";
										$limite =sprintf("%s limit %d, %d",$c, $inicia, $maximoDatos);
										$resultado = mysqli_query($con,$limite);
										$arreglo=mysqli_fetch_row($resultado);	
	
										$objeto->consultas();
} else{

										$c = new Conexion();
										$con = $c->conectarServidor();
										$c ="select Id_Factu, Total_IVA_Factu, Precio_Total_Comp_Factu, Fech_Facturacion_Factu, Hora_Fact, Sub_Total_Factu, Id_Produc from detalles_Venta ";
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
										$c ="select Id_Factu, Total_IVA_Factu, Precio_Total_Comp_Factu, Fech_Facturacion_Factu, Hora_Fact, Sub_Total_Factu, Id_Produc from tbl_factura ";
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
	
 if(form.Total_IVA_Factu.value.length==0)
   	{
    alert("Digite la Unidades Ventdidas, Detalles de Venta");
    form.Total_IVA_Factu.focus();
    return(false);
	}
	var letra="1234567890";
    var cadena=form.Total_IVA_Factu.value;
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
	  form.Total_IVA_Factu.focus();
	  return (false);
	  }
	
	if(form.Precio_Total_Comp_Factu.value.length==0)
   	{
    alert("Digite El Precio de Unid, Detalles de Venta");
    form.Precio_Total_Comp_Factu.focus();
    return(false);
	}
	var letra="1234567890";
    var cadena=form.Precio_Total_Comp_Factu.value;
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
	  form.Precio_Total_Comp_Factu.focus();
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
		<title>Factura</title>
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
		<h1>Factura</h1>
		<div>
		<label for="Id_Factu">Codigo de Factura</label>
		<input type="text" id="Id_Factu" name="Id_Factu" value="<?php echo $objeto->Id_Factu?>" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Total_IVA_Factu">Total de IVA Factura</label>
		<input type="text" id="Total_IVA_Factu" name="Total_IVA_Factu" value="<?php echo $objeto->Total_IVA_Factu?>" placeholder="Digite el total de IVA Factura"></input>
		<label for="Precio_Total_Comp_Factu">Precio total de IVA Factura</label>
		<input type="text" id="Precio_Total_Comp_Factu" name="Precio_Total_Comp_Factu" value="<?php echo $objeto->Precio_Total_Comp_Factu?>" placeholder="Digite el Preciototal de IVA Factura <"></input>
		<label for="Fech_Facturacion_Factu">Fecha de facturacion</label>
		<input type="text" id="Fech_Facturacion_Factu" name="Fech_Facturacion_Factu" value="<?php echo $objeto->Fech_Facturacion_Factu?>" placeholder="Digite la Fecha de facturacion"></input>
		<label for="Hora_Fact">Hora de Facturacion</label>
		<input type="text" id="Hora_Fact" name="Fech_Facturacion_Factu" value="<?php echo $objeto->Hora_Fact?>" placeholder="Digite la hora de Factura"></input>
		<label for="Sub_Total_Factu">Sub total de factura</label>
		<input type="text" id="precio Total" name="Fech_Facturacion_Factu" value="<?php echo $objeto->Sub_Total_Factu?>" placeholder="Digite el sud total de Factura"></input>
		<label for="Id_Produc">codigo de producto</label>
		<input type="text" id="Id_Produc" name="Id_Produc" value="<?php echo $objeto->Id_Produc?>" placeholder="Digite el codigo de producto"></input>

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
            <td><b>Total de IVA Factura<b></td>
		    <td><b>Precio total de IVA Factura<b></td>
		    <td><b>Fecha de facturacion <b></td>
		    <td><b>Hora de Facturacion<b></td>
		    <td><b>Sub total de factura<b></td>
		    <td><b>Codigo de producto<b></td>
		</tr>
		<?php
		                            $c = new Conexion();
		                            $con = $c->conectarServidor();
		                            $c1 = "select Id_Factu, Total_IVA_Factu, Precio_Total_Comp_Factu, Fech_Facturacion_Factu, Hora_Fact, Sub_Total_Factu, Id_Produc from tbl_factura  ";
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