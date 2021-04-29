<?php
    include("../conexion/conexion.php");
	include("../controlador/producto_controlador.php");	
?>
<?php 
$objeto = new Usuario();
if($_POST){
	$objeto->Id_Produc = $_POST['Id_Produc'];
	$objeto->Nombre_Produc = $_POST['Nombre_Produc'];
	$objeto->Tipo_Produc = $_POST['Tipo_Produc'];
	$objeto->Precio_Produc = $_POST['Precio_Produc'];
	$objeto->Img_Produc = $_POST['Img_Produc'];
	$objeto->Especificaciones_Producto = $_POST['Especificaciones_Producto'];
	$objeto->Descrp_Produc = $_POST['Descrp_Produc'];
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
										$c = "select Id_Produc, Nombre_Produc, Tipo_Produc, Precio_Produc, Img_Produc, Especificaciones_Producto, Descrp_Produc from tbl_producto where Id_Produc='$obj->Id_Produc' ";
										$limite =sprintf("%s limit %d, %d",$c, $inicia, $maximoDatos);
										$resultado = mysqli_query($con,$limite);
										$arreglo=mysqli_fetch_row($resultado);	
	
										$objeto->consultas();
} else{

										$c = new Conexion();
										$con = $c->conectarServidor();
										$c ="select Id_Produc, Nombre_Produc, Tipo_Produc, Precio_Produc, Img_Produc, Especificaciones_Producto, Descrp_Produc from tbl_producto ";
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
										$c ="select Id_Produc, Nombre_Produc, Tipo_Produc, Precio_Produc, Img_Produc, Especificaciones_Producto, Descrp_Produc from tbl_tbl_producto ";
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
	
 if(form.Nombre_Produc.value.length==0)
   	{
    alert("Digite la Unidades Ventdidas, Producto");
    form.Nombre_Produc.focus();
    return(false);
	}
	var letra="1234567890";
    var cadena=form.Nombre_Produc.value;
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
	  alert("Digite nombre producto");
	  form.Nombre_Produc.focus();
	  return (false);
	  }
	
	if(form.Tipo_Produc.value.length==0)
   	{
    alert("Digite el tipo de producto");
    form.Tipo_Produc.focus();
    return(false);
	}
	var letra="1234567890";
    var cadena=form.Tipo_Produc.value;
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
	  alert("Digite el tipo de producto");
	  form.Tipo_Produc.focus();
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
		<title>Producto</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="Producto" class="contenedor_registro"  action="" method="POST">
		<h1>Producto</h1>
		<div>
		<label for="Id_Produc">Codigo de producto</label>
		<input type="text" id="Id_Produc" name="Id_Produc" value="<?php echo $objeto->Id_Produc?>" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Nombre_Produc">Nombre Producto</label>
		<input type="text" id="Nombre_Produc" name="Nombre_Produc" value="<?php echo $objeto->Nombre_Produc?>" placeholder="Digite el nombre del producto"></input>
		<label for="Tipo_Produc">Tipo Producto</label>
		<input type="text" id="Tipo_Produc" name="Tipo_Produc" value="<?php echo $objeto->Tipo_Produc?>" placeholder="Digite el tipo de Producto<"></input>
		<label for="Precio_Produc">Precio Producto</label>
		<input type="text" id="Precio_Produc" name="Precio_Produc" value="<?php echo $objeto->Precio_Produc?>" placeholder="Digite el Precio del Producto"></input>
		<label for="Img_Produc">Imagen</label>
		<input type="text" id="Img_Produc" name="Img_Produc" value="<?php echo $objeto->Img_Produc?>" placeholder="Insertar Imagen"></input>
		<label for="Especificaciones_Producto">Especificaciones del producto</label>
		<input type="text" id="Especificaciones_Producto" name="Especificaciones_Producto" value="<?php echo $objeto->Especificaciones_Producto?>" placeholder="Digite las Especificaciones del producto"></input>
		<label for="Descrp_Produc">Descripcion del producto</label>
		<input type="text" id="Descrp_Produc" name="Descrp_Produc" value="<?php echo $objeto->Descrp_Produc?>" placeholder="Digite la Descripcion del producto"></input>

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
            <td><b>Nombre<b></td>
		    <td><b>Tipo<b></td>
		    <td><b>Precio<b></td>
		    <td><b>Imagen<b></td>
		    <td><b>Especificaciones<b></td>
		    <td><b>Descripcion<b></td>
		</tr>
		<?php
		                            $c = new Conexion();
		                            $con = $c->conectarServidor();
		                            $c1 = "select Id_Produc, Nombre_Produc, Tipo_Produc, Precio_Produc, Img_Produc, Especificaciones_Producto, Descrp_Produc from tbl_producto  ";
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