
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Departamento</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="departamento" class="contenedor_registro"  action="" method="POST">
		<h1>Departamento</h1>
		<div>
		<label for="Id_departamento">Codigo de departamento</label>
		<input type="text" id="Id_departamento" name="Id_departamento" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Direc_departamento">Direccion de departamento</label>
		<input type="text" id="Direc_departamento" name="Direc_departamento" placeholder="Digite la Direccion de departamento"></input>

		
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
            <td><b>Direccion de departamento<b></td>
		</tr>
		
                </tr>
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>