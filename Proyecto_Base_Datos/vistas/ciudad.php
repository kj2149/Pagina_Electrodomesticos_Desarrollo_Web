
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Ciudad</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="ciudad" class="contenedor_registro"  action="" method="POST">
		<h1>Ciudad</h1>
		<div>
		<label for="Id_Ciudad">Codigo de la ciudad</label>
		<input type="text" id="Id_Ciudad" name="Id_Ciudad"  placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Nombre_ciudad">Nombre de la ciudad</label>
		<input type="text" id="Nombre_ciudad" name="Nombre_ciudad"  placeholder="Digite el nombre de la ciudad"></input>
		<label for="Localidad_Ciudad">locaidad</label>
		<input type="text" id="Localidad_Ciudad" name="Localidad_Ciudad" placeholder="Digite la Localidad_Ciudad"></input>
		

			
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
		    <td><b>Localidad_Ciudad<b></td>
		    
		</tr>
		
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
