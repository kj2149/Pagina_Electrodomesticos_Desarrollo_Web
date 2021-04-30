<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Edad</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="Edad" class="contenedor_registro"  action="" method="POST">
		<h1>Edad</h1>
		<div>
		<label for="Id_Edad">Codigo de Edad</label>
		<input type="text" id="Id_Edad" name="Id_Edad" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Tipo_Edad">Fecha de Nacimiento</label>
		<input type="text" id="Tipo_Edad" name="Tipo_Edad"  placeholder="Digite la Fecha de Nacimiento"></input>
		<label for="Fech_Edad"> Codigo de Usuario</label>
		<input type="text" id="Fech_Edad" name="Fech_Edad"  placeholder="Codigo de Usuario"></input>
	
		
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
            <td><b>Fecha de Nacimiento<b></td>
		    <td><b>Codigo de Edad<b></td>

		</tr>
	
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>