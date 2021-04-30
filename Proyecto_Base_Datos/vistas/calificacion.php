
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>calificacion</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="calificacion" class="contenedor_registro"  action="" method="POST">
		<h1>Calificacion</h1>
		<div>
		<label for="Id_Calificacion">Codigo de calificacion</label>
		<input type="text" id="Id_Calificacion" name="Id_Calificacion" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Tipo_Calificacion">Tipo de calificacion</label>
		<input type="text" id="Tipo_Calificacion" name="Tipo_Calificacion"  placeholder="Digite el tipo de calificacion"></input>
		<label for="Fech_Calificacion"> Fecha de calificacion</label>
		<input type="text" id="Fech_Calificacion" name="Fech_Calificacion"  placeholder="Digite fecha de calificacion"></input>
		<label for="Comentario_Calificacion">Comentario</label>
        <input type="text" id="Comentario_Calificacion" name="Comentario_Calificacion"  placeholder="Digite comentario"></input>
		
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
            <td><b>Tipo<b></td>
		    <td><b>Fecha<b></td>
		    <td><b>Comentario<b></td>
		</tr>
	
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>