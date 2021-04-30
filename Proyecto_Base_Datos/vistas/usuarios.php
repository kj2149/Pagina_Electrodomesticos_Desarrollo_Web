
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>usuarios</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="usuarios" class="contenedor_registro"  action="" method="POST">
		<h1>Usuarios</h1>
		<div>
		<label for="codigoUsuario">Codigo de usuario</label>
		<input type="text" id="codigoUsuario" name="codigoUsuario" ></input>
		<label for="nombreUsuario">Nombre de usuario</label>
		<input type="text" id="nombreUsuario" name="nombreUsuario" ></input>
		<label for="telefonoUsuariosuario">Telefono de usuario</label>
		<input type="text" id="telefonoUsuario" name="telefonoUsuario" ></input>
		<label for="codigoRol">Codigo de rol</label>

		
			
		<center>
		<input type="submit" name="limpiar" value="Nuevo" ></input>
		<input type="submit" name="guardar" value="Guardar" onClick="return validar(this.form)"></input>
		<input type="submit" name="modifica" value="Modificar" onClick="return validar(this.form)"></input>
		<input type="submit" name="elimina" value="Eliminar" onClick="return validar(this.form)"></input>
		<input type="submit" name="consulta" value="Consultar" onClick="return validar(this.form)"></input>
		<input type="submit" name="ver" value="Mostrar" ></input>
		<input type="button" name="salir" value="x" ></input>
		
    <table width="544" border="0">
        <tr>
            <td><b>Código<b></td>
            <td><b>Nombre<b></td>
		    <td><b>Telefono<b></td>
		    <td><b>Rol<b></td>
		</tr>
	
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>