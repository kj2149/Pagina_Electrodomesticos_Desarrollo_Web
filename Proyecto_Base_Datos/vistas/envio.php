
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Envio</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="envio" class="contenedor_registro"  action="" method="POST">
		<h1>Envio</h1>
		<div>
		<label for="Id_Envio">Codigo de envio</label>
		<input type="text" id="Id_Envio" name="Id_Envio" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Tipo_envio">Tipo de envio</label>
		<input type="text" id="Tipo_envio" name="Tipo_envio"placeholder="Digite el tipo de envio"></input>
		<label for="Dirección_Envio">Direccion de envio</label>
		<input type="text" id="Dirección_Envio" name="Dirección_Envio"  placeholder="Digite la Direccion de envio"></input>
		<label for="Id_Pago">Codigo de Pago</label>
		<input type="text" id="Id_Pago" name="Id_Pago" placeholder="Digite el Codigo de Pago"></input>
		<label for="Id_Ciudad">Codigo de la ciudad</label>
		<input type="text" id="Id_Ciudad" name="Id_Pago"placeholder="Digite el Codigo de la ciudad"></input>

		
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
            <td><b>Tipo de envio<b></td>
		    <td><b>Direccion de envio<b></td>
		    <td><b>Codigo de Pago<b></td>
		    <td><b>Codigo de la ciudad<b></td>S
		</tr>
		
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>