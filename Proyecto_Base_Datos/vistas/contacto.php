<?php
    include("../conexion/conexion.php");
	include("../controlador/contacto_controlador.php");	
?>
<?php 
$objeto = new Usuario();
if($_POST){
	$objeto->Id_contacto = $_POST['Id_contacto'];
	$objeto->Direc_contacto = $_POST['Direc_contacto'];
	$objeto->Telefono_contacto = $_POST['Telefono_contacto'];
	$objeto->Correo_contacto = $_POST['Correo_contacto'];
	$objeto->Fech_Nac_Edad = $_POST['Fech_Nac_Edad'];
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
										$c = "select Id_contacto, Direc_contacto, Telefono_contacto, Correo_contacto, Fech_Nac_Edad, codigoRol from contacto where Id_contacto='$obj->Id_contacto' ";
										$limite =sprintf("%s limit %d, %d",$c, $inicia, $maximoDatos);
										$resultado = mysqli_query($con,$limite);
										$arreglo=mysqli_fetch_row($resultado);	
	
										$objeto->consultas();
} else{

										$c = new Conexion();
										$con = $c->conectarServidor();
										$c ="select Id_contacto, Direc_contacto, Telefono_contacto, Correo_contacto, Fech_Nac_Edad, codigoRol from contacto ";
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
										$c ="select Id_contacto, Direc_contacto,Telefono_contacto, Correo_contacto, Fech_Nac_Edad, codigoRol from contacto ";
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
	
 if(form.Direc_contacto.value.length==0)
   	{
    alert("Digite la Direccion de contacto de compra");
    form.Direc_contacto.focus();
    return(false);
	}
	var letra="abcdefeghijklmnopqrstuvwxyz@-_*/ + ABCDEFGHIJKLMNOPQRSTUVWX@-_*/";
    var cadena=form.Direc_contacto.value;
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
	  alert("Digite una Direccion de contacto");
	  form.Direc_contacto.focus();
	  return (false);
	  }
	
	if(form.Telefono_contacto.value.length==0)
   	{
    alert("Digite El Telefono  de contacto");
    form.Telefono_contacto.focus();
    return(false);
	}
	var letra="1234567890";
    var cadena=form.Telefono_contacto.value;
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
	  alert("Digite el Telefono de contacto");
	  form.Telefono_contacto.focus();
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
		<title>contacto</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="contacto" class="contenedor_registro"  action="" method="POST">
		<h1>contacto</h1>
		<div>
		<label for="Id_contacto">Codigo de contacto</label>
		<input type="text" id="Id_contacto" name="Id_contacto" value="<?php echo $objeto->Id_contacto?>" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Direc_contacto">Direccion de contacto</label>
		<input type="text" id="Direc_contacto" name="Direc_contacto" value="<?php echo $objeto->Direc_contacto?>" placeholder="Digite la Direccion de contacto"></input>
		<label for="Telefono_contacto">Telefono de contacto</label>
		<input type="text" id="Telefono_contacto" name="Telefono_contacto" value="<?php echo $objeto->Telefono_contacto?>" placeholder="Digite el Telefono de contacto"></input>
		<label for="Correo_contacto">Correo de contacto</label>
		<input type="text" id="Correo_contacto" name="Correo_contacto" value="<?php echo $objeto->Correo_contacto?>" placeholder="Digite el Correo de contacto"></input>
		<label for="Fech_Nac_Edad">Fecha de Nacimiento Edad</label>
		<input type="text" id="Fech_Nac_Edad" name="Correo_contacto" value="<?php echo $objeto->Fech_Nac_Edad?>" placeholder="Digite la Fecha de Nacimiento"></input>
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
            <td><b>Direccion de contacto<b></td>
		    <td><b>Telefono de contacto<b></td>
		    <td><b>Correo de contacto<b></td>
		    <td><b>Fech_Nac_Edad<b></td>S
		    <td><b>Rol<b></td>
		</tr>
		<?php
		                            $c = new Conexion();
		                            $con = $c->conectarServidor();
		                            $c1 = "select Id_contacto, Direc_contacto, Telefono_contacto, Correo_contacto, Fech_Nac_Edad, codigoRol from contacto  ";
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