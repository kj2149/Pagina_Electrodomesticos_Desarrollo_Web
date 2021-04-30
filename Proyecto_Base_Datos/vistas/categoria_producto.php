
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Categoria Producto</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="categoria_producto" class="contenedor_registro"  action="" method="POST">
		<h1>Categoria Producto</h1>
		<div>
		<label for="Id_Categ_Produc">Codigo de Categoria Producto</label>
		<input type="text" id="Id_Categ_Produc" name="Id_Categ_Produc"  placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Nombre_Categ_Produc">Nombre de la Categoria</label>
		<input type="text" id="Nombre_Categ_Produc" name="Nombre_Categ_Produc" placeholder="Digite el nombre de Catrgoria"></input>
		<label for="Tipo_Categ_Produc"> Tipo de Categoria </label>
		<input type="text" id="Tipo_Categ_Produc" name="Tipo_Categ_Produc" placeholder="Digite el tipo de categoria"></input>
		

	
			
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
		</tr>
		
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>