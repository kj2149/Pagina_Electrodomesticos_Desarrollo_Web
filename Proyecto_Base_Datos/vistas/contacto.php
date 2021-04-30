
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Contacto</title>
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
		<h1>Contacto</h1>
		<div>
		<label for="Id_contacto">Codigo de contacto</label>
		<input type="text" id="Id_contacto" name="Id_contacto" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Direc_contacto">Direccion de contacto</label>
		<input type="text" id="Direc_contacto" name="Direc_contacto" placeholder="Digite la Direccion de contacto"></input>
		<label for="Telefono_contacto">Telefono de contacto</label>
		<input type="text" id="Telefono_contacto" name="Telefono_contacto" placeholder="Digite el Telefono de contacto"></input>
		<label for="Correo_contacto">Correo de contacto</label>
		<input type="text" id="Correo_contacto" name="Correo_contacto"  placeholder="Digite el Correo de contacto"></input>
		<label for="Fech_Nac_Edad">Fecha de Nacimiento Edad</label>
		<input type="text" id="Fech_Nac_Edad" name="Correo_contacto"  placeholder="Digite la Fecha de Nacimiento"></input>

		
			
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
		    <td><b>Fecha de Nacacimiento Edad<b></td>S
		</tr>
		
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>