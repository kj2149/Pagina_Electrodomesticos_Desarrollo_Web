Cantidad de la compra cl<?php
    include("../conexion/conexion.php");
	include("../controlador/compra_cliente_controlador.php");	
?>
<?php 
$objeto = new Usuario();
if($_POST){
	$objeto->Id_Comp_Cli = $_POST['Id_Comp_Cli'];
	$objeto->Cantidad_Comp_cli = $_POST['Cantidad_Comp_cli'];
	$objeto->Descuento_Comp_Cli = $_POST['Descuento_Comp_Cli'];
	$objeto->Iva_Comp_Cli = $_POST['Iva_Comp_Cli'];
	$objeto->Garantia_Comp_Cli = $_POST['Garantia_Comp_Cli'];
	$objeto->Precio_Total_Comp_Cli = $_POST['Precio_Total_Comp_Cli'];
	$objeto->Fech_Comp_Cli = $_POST['Fech_Comp_Cli'];
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
										$c = "select Id_Comp_Cli, Cantidad_Comp_cli, Descuento_Comp_Cli, Iva_Comp_Cli, Garantia_Comp_Cli, Precio_Total_Comp_Cli, Fech_Comp_Cli from tbl_compra_cliente where Id_Comp_Cli='$obj->Id_Comp_Cli' ";
										$limite =sprintf("%s limit %d, %d",$c, $inicia, $maximoDatos);
										$resultado = mysqli_query($con,$limite);
										$arreglo=mysqli_fetch_row($resultado);	
	
										$objeto->consultas();
} else{

										$c = new Conexion();
										$con = $c->conectarServidor();
										$c ="select Id_Comp_Cli, Cantidad_Comp_cli, Descuento_Comp_Cli, Iva_Comp_Cli, Garantia_Comp_Cli, Precio_Total_Comp_Cli, Fech_Comp_Cli from tbl_compra_cliente ";
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
										$c ="select Id_Comp_Cli, Cantidad_Comp_cli, Descuento_Comp_Cli, Iva_Comp_Cli, Garantia_Comp_Cli, Precio_Total_Comp_Cli, Fech_Comp_Cli from tbl_compra_cliente ";
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
	
 if(form.Cantidad_Comp_cli.value.length==0)
   	{
    alert("Digite la Cantidad_Comp_cli de compra");
    form.Cantidad_Comp_cli.focus();
    return(false);
	}
	var letra="abcdefeghijklmnopqrstuvwxyz@-_*/ + ABCDEFGHIJKLMNOPQRSTUVWX@-_*/";
    var cadena=form.Cantidad_Comp_cli.value;
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
	  alert("Digite una Cantidad_Comp_cli");
	  form.Cantidad_Comp_cli.focus();
	  return (false);
	  }
	
	if(form.Descuento_Comp_Cli.value.length==0)
   	{
    alert("Digite El Descuento_Comp_Cli");
    form.Descuento_Comp_Cli.focus();
    return(false);
	}
	var letra="1234567890";
    var cadena=form.Descuento_Comp_Cli.value;
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
	  alert("Digite el Descuento_Comp_Cli");
	  form.Descuento_Comp_Cli.focus();
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
		<title>Compra Cliente</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="compra cliente" class="contenedor_registro"  action="" method="POST">
		<h1>Compra Cliente</h1>
		<div>
		<label for="Id_Comp_Cli">Codigo de compra del cliente</label>
		<input type="text" id="Id_Comp_Cli" name="Id_Comp_Cli" value="<?php echo $objeto->Id_Comp_Cli?>" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Cantidad_Comp_cli">Cantidad de la compra cliente</label>
		<input type="text" id="Cantidad_Comp_cli" name="Cantidad_Comp_cli" value="<?php echo $objeto->Cantidad_Comp_cli?>" placeholder="Digite la Cantidad de la compra cliente"></input>
		<label for="Descuento_Comp_Cli">Descuento compra cliente</label>
		<input type="text" id="Descuento_Comp_Cli" name="Descuento_Comp_Cli" value="<?php echo $objeto->Descuento_Comp_Cli?>" placeholder="Digite el Descuento de la compra cliente "></input>
		<label for="Iva_Comp_Cli">Iva Compra</label>
		<input type="text" id="Iva_Comp_Cli" name="Iva_Comp_Cli" value="<?php echo $objeto->Iva_Comp_Cli?>" placeholder="Digite el Iva de la compra cliente"></input>
		<label for="Garantia_Comp_Cli">Garantia Compra</label>
		<input type="text" id="Garantia_Comp_Cli" name="Garantia_Comp_Cli" value="<?php echo $objeto->Garantia_Comp_Cli?>" placeholder="Digite la Garantia de la compra cliente"></input>
		<label for="Precio_Total_Comp_Cli">Precio total de la compra</label>
		<input type="text" id="precio Total" name="Precio_Total_Comp_Cli" value="<?php echo $objeto->Precio_Total_Comp_Cli?>" placeholder="Digite el Precio Total de la compra"></input>
		<label for="Fech_Comp_Cli">Fecha de la Compra</label>
		<input type="text" id="Fech_Comp_Cli" name="Fech_Comp_Cli" value="<?php echo $objeto->Fech_Comp_Cli?>" placeholder="Digite la fecha de Compra"></input>1


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
            <td><b>Cantidad Compra clientr<b></td>
		    <td><b>Descuento compra Cliente<b></td>
		    <td><b>Iva Compra Cliente<b></td>
		    <td><b>Garantia Compra Cliente<b></td>
		    <td><b>Precio Total<b></td>
		    <td><b>Fecha de Compra<b></td>
		    

		</tr>
		<?php
		                            $c = new Conexion();
		                            $con = $c->conectarServidor();
		                            $c1 = "select Id_Comp_Cli, Cantidad_Comp_cli, Descuento_Comp_Cli, Iva_Comp_Cli, Garantia_Comp_Cli, Precio_Total_Comp_Cli, Fech_Comp_Cli from tbl_compra_cliente  ";
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