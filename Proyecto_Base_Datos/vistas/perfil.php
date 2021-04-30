
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Perfil</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="Perfil" class="contenedor_registro"  action="" method="POST">
		<h1>Perfil</h1>
		<div>
		<label for="Id_Perfil">Codigo de Perfil</label>
		<input type="text" id="Id_Perfil" name="Id_Perfil"  placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Nombre_Perfil">Nombre de perfil</label>
		<input type="text" id="Nombre_Perfil" name="Nombre_Perfil" placeholder="Digite el Nombre de perfil"></input>
		<label for="Tipo_Perfil">Tipo de perfil</label>
		<input type="text" id="Tipo_Perfil" name="Tipo_Perfil"placeholder="Digite el tipo de perfil"></input>
		<label for="Id_Usuario">Codigo de Usuario</label>
		<input type="text" id="Id_Usuario" name="Id_Usuario"  placeholder="Digite el Codigo de Usuario"></input>
		<label for="Id_Calificacion">Codigo de Calificacion</label>
		<input type="text" id="Id_Calificacion" name="Id_Usuario" placeholder="Digite el Codigo de Calificacion"></input>


			
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
            <td><b>Nombre<b></td>
		    <td><b>Tipo<b></td>
		    <td><b>Codigo Usuario<b></td>
		    <td><b>Codigo Calificacion<b></td>S
		</tr>
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>