		$arreglo=mysqli_fetch_row($resultado);


<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Genero</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="Genero" class="contenedor_registro"  action="" method="POST">
		<h1>Genero</h1>
		<div>
		<label for="Id_Genero">Codigo de genero</label>
		<input type="text" id="Id_Genero" name="Id_Genero" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Nom_genero">Nombre de genero</label>
		<input type="text" id="Nom_genero" name="Nom_genero"  placeholder="Digite EL Nombre de Genero"></input>

	
			
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
            <td><b>Nombre de Genero<b></td>
		</tr>
	
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>