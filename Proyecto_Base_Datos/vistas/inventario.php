<?php
    include("../conexion/conexion.php");
	include("../controlador/inventario_controlador.php");	
?>
<?php 
$objeto = new Usuario();
if($_POST){
	$objeto->Id_Inventario = $_POST['Id_Inventario'];
	$objeto->Fech_Entrada_Inventario = $_POST['Fech_Entrada_Inventario'];
	$objeto->Fech_Salida_Inventario = $_POST['Fech_Salida_Inventario'];
	$objeto->Hora_Entrada_Inventario = $_POST['Hora_Entrada_Inventario'];
	$objeto->Hora_salida_Inventario = $_POST['Hora_salida_Inventario'];
	$objeto->Canti_Inicial_Dia_Inventario = $_POST['Canti_Inicial_Dia_Inventario'];
	$objeto->Canti_Vendida_Dia_Inventario = $_POST['Canti_Vendida_Dia_Inventario'];
	$objeto->Canti_Disponible_Dia_Inventario = $_POST['Canti_Disponible_Dia_Inventario'];
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
										$c = "select Id_Inventario, Fech_Entrada_Inventario, Fech_Salida_Inventario, Hora_Entrada_Inventario, Hora_salida_Inventario, Canti_Inicial_Dia_Inventario, Canti_Vendida_Dia_Inventario,Canti_Disponible_Dia_Inventario from tbl_inventario where Id_Inventario='$obj->Id_Inventario' ";
										$limite =sprintf("%s limit %d, %d",$c, $inicia, $maximoDatos);
										$resultado = mysqli_query($con,$limite);
										$arreglo=mysqli_fetch_row($resultado);	
	
										$objeto->consultas();
} else{

										$c = new Conexion();
										$con = $c->conectarServidor();
										$c ="select Id_Inventario, Fech_Entrada_Inventario, Fech_Salida_Inventario, Hora_Entrada_Inventario, Hora_salida_Inventario, Canti_Inicial_Dia_Inventario, Canti_Vendida_Dia_Inventario, Canti_Disponible_Dia_Inventario from tbl_inventario ";
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
										$c ="select Id_Inventario, Fech_Entrada_Inventario, Fech_Salida_Inventario, Hora_Entrada_Inventario, Hora_salida_Inventario, Canti_Inicial_Dia_Inventario, Canti_Vendida_Dia_Inventario, Canti_Disponible_Dia_Inventario from tbl_inventario ";
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
	
 if(form.Fech_Entrada_Inventario.value.length==0)
   	{
    alert("Digite la Fech_Entrada_Inventario de compra");
    form.Fech_Entrada_Inventario.focus();
    return(false);
	}
	var letra="abcdefeghijklmnopqrstuvwxyz@-_*/ + ABCDEFGHIJKLMNOPQRSTUVWX@-_*/";
    var cadena=form.Fech_Entrada_Inventario.value;
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
	  alert("Digite una Fech_Entrada_Inventario");
	  form.Fech_Entrada_Inventario.focus();
	  return (false);
	  }
	
	if(form.Fech_Salida_Inventario.value.length==0)
   	{
    alert("Digite El Fech_Salida_Inventario");
    form.Fech_Salida_Inventario.focus();
    return(false);
	}
	var letra="1234567890";
    var cadena=form.Fech_Salida_Inventario.value;
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
	  alert("Digite el Fech_Salida_Inventario");
	  form.Fech_Salida_Inventario.focus();
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
		<title>Inventario</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="Inventario" class="contenedor_registro"  action="" method="POST">
		<h1>Inventario</h1>
		<div>
		<label for="Id_Inventario">Codigo de compra del cliente</label>
		<input type="text" id="Id_Inventario" name="Id_Inventario" value="<?php echo $objeto->Id_Inventario?>" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Fech_Entrada_Inventario">Fecha de Entrada al Inventario</label>
		<input type="text" id="Fech_Entrada_Inventario" name="Fech_Entrada_Inventario" value="<?php echo $objeto->Fech_Entrada_Inventario?>" placeholder="Digite la Fecha de Entrada al Inventario"></input>
		<label for="Fech_Salida_Inventario">Fecha de Salida al Inventario</label>
		<input type="text" id="Fech_Salida_Inventario" name="Fech_Salida_Inventario" value="<?php echo $objeto->Fech_Salida_Inventario?>" placeholder="Digite Fecha de Salida al Inventario"></input>
		<label for="Hora_Entrada_Inventario">Hora de Entrada al Inventario</label>
		<input type="text" id="Hora_Entrada_Inventario" name="Hora_Entrada_Inventario" value="<?php echo $objeto->Hora_Entrada_Inventario?>" placeholder="Digite la Hora Entrada al Inventario"></input>
		<label for="Hora_salida_Inventario">Hora de salida del Inventario</label>
		<input type="text" id="Hora_salida_Inventario" name="Hora_salida_Inventario" value="<?php echo $objeto->Hora_salida_Inventario?>" placeholder="Digite la Hora de salida del Inventario"></input>
		<label for="Canti_Inicial_Dia_Inventario">Cantidad inicial del dia inventario</label>
		<input type="text" id="precio Total" name="Canti_Inicial_Dia_Inventario" value="<?php echo $objeto->Canti_Inicial_Dia_Inventario?>" placeholder="Digite Cantidad inicial del inventario"></input>
		<label for="Canti_Vendida_Dia_Inventario"> Cantidad vendida por dia</label>
		<input type="text" id="precio Total" name="Canti_Vendida_Dia_Inventario" value="<?php echo $objeto->Canti_Vendida_Dia_Inventario?>" placeholder="Digite Cantidad vendida por dia"></input>
		<label for="Canti_Disponible_Dia_Inventario"> Cantidad disponible por dia</label>
		<input type="text" id="precio Total" name="Canti_Disponible_Dia_Inventario" value="<?php echo $objeto->Canti_Disponible_Dia_Inventario?>" placeholder="Digite Cantidad disponible por dia"></input>
	


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
            <td><b>Fecha de Entrada al Inventario<b></td>
		    <td><b>Fecha de Salida al Inventario<b></td>
		    <td><b>Hora de Entrada al Inventario<b></td>
		    <td><b>Hora de salida del Inventario<b></td>
		    <td><b>Cantidad inicial del dia inventario<b></td>
		     <td><b>Cantidad vendida por dia<b></td>
		    <td><b>Cantidad disponible por dia<b></td>
		   

		</tr>
		<?php
		                            $c = new Conexion();
		                            $con = $c->conectarServidor();
		                            $c1 = "select Id_Inventario, Fech_Entrada_Inventario, Fech_Salida_Inventario, Hora_Entrada_Inventario, Hora_salida_Inventario, Canti_Inicial_Dia_Inventario, Canti_Vendida_Dia_Inventario, Canti_Disponible_Dia_Inventario from tbl_inventario  ";
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