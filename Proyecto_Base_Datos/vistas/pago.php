<?php
    include("../conexion/conexion.php");
	include("../controlador/pago_controlador.php");	
?>
<?php 
$objeto = new Usuario();
if($_POST){
	$objeto->Id_Pago = $_POST['Id_Pago'];
	$objeto->Metodo_Pago = $_POST['Metodo_Pago'];
	$objeto->Tipo_Pago = $_POST['Tipo_Pago'];
	$objeto->Id_Factu = $_POST['Id_Factu'];

}
?>
<?php
$correrPagina = $_SERVER["PHP_SELF"];gf
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
										$c = "select Id_Pago, Metodo_Pago, Tipo_Pago, Id_Factu from tbl_pago where Id_Pago='$obj->Id_Pago'";
										$limite =sprintf("%s limit %d, %d",$c, $inicia, $maximoDatos);
										$resultado = mysqli_query($con,$limite);
										$arreglo=mysqli_fetch_row($resultado);	
	
										$objeto->consultas();
} else{

										$c = new Conexion();
										$con = $c->conectarServidor();
										$c ="select Id_Pago, Metodo_Pago, Tipo_Pago, Id_Factu from tbl_pago ";
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
										$c ="select Id_Pago, Metodo_Pago, Id_Factu from tbl_pago ";
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
	
 if(form.Metodo_Pago.value.length==0)
   	{
    alert("Digite tipo de calificacion");
    form.Metodo_Pago.focus();
    return(false);
	}
	var letra="abcdefeghijklmnopqrstuvwxyz@-_*/ + ABCDEFGHIJKLMNOPQRSTUVWX@-_*/";
    var cadena=form.Metodo_Pago.value;
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
	  alert("Digite el Metodo de pago");
	  form.Metodo_Pago.focus();
	  return (false);
	  }
	
	if(form.Tipo_Pago.value.length==0)
   	{
    alert("Digite el tipo de pago");
    form.Tipo_Pago.focus();
    return(false);
	}
	var letra="abcdefeghijklmnopqrstuvwxyz@-_*/ + ABCDEFGHIJKLMNOPQRSTUVWX@-_*/";
    var cadena=form.Tipo_Pago.value;
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
	  alert("Digite tipo de pago");
	  form.Tipo_Pago.focus();
	  return (false);
	  }
	
	if(form.Id_Factu.value.length==0)
   	{
    alert("Seleccione el Rol del Usuario");
    form.Id_Factu.focus();
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
		<title>Pago</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="Pago" class="contenedor_registro"  action="" method="POST">
		<h1>Pago</h1>
		<div>
		<label for="Id_Pago">Codigo de Pago</label>
		<input type="text" id="Id_Pago" name="Id_Pago" value="<?php echo $objeto->Id_Pago?>" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Metodo_Pago">Metodo de Pago</label>
		<input type="text" id="Metodo_Pago" name="Metodo_Pago" value="<?php echo $objeto->Metodo_Pago?>" placeholder="Digite el Metodo de Pago"></input>
		<label for="Tipo_Pago">Tipo de Pago</label>
		<input type="text" id="Tipo_Pago" name="Tipo_Pago" value="<?php echo $objeto->Tipo_Pago?>" placeholder="Digite el Tipo de Pago"></input>
		<label for="Id_Factu">Codigo de Factura</label>
        <input type="text" id="Id_Factu" name="Id_Factu" value="<?php echo $objeto->Id_Factu?>" placeholder="Digite Codigo de Factura"></input>
		<div> 



		    <select name="Id_Factu" id="$objeto->Id_Factu">
			<option>
					 <?php
						$s4 = "select nombreRol from roles where Id_Factu ='$objeto->Id_Factu'";
							$r4 = mysqli_query($con,$s4)or die(mysql_error());
							$res4 = mysqli_fetch_array($r4);
							echo $res4[0];
					

					?>
					</option>
			<?php
			do{
			    $cadena = $arreglo['Id_Factu'];
				$arre = $arreglo['nombreRol'];
				if($cadena == $objeto->Id_Factu){
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
            <td><b>Metodo<b></td>
		    <td><b>Tipo<b></td>
		    <td><b>Codigo de Factura<b></td>
		</tr>
		<?php
		                            $c = new Conexion();
		                            $con = $c->conectarServidor();
		                            $c1 = "select Id_Pago, Metodo_Pago, Tipo_Pago, Id_Factu from tbl_pago  ";
		                            $resultado1 = mysqli_query($con, $limite);
		                            $arreglo= mysqli_fetch_row ($resultado1);
		do{
		?>
		<tr>
		    <td><?php echo $arreglo[0]?></td>
			<td><?php echo $arreglo[1]?></td>
			<td><?php echo $arreglo[2]?></td>
			<td><?php echo $arreglo[3] ?></td>
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