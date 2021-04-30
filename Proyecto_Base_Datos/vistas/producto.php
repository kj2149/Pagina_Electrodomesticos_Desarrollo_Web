
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Producto</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="Producto" class="contenedor_registro"  action="" method="POST">
		<h1>Producto</h1>
		<div>
		<label for="Id_Produc">Codigo de producto</label>
		<input type="text" id="Id_Produc" name="Id_Produc"></input>
		<label for="Nombre_Produc">Nombre Producto</label>
		<input type="text" id="Nombre_Produc" name="Nombre_Produc"></input>
		<label for="Tipo_Produc">Tipo Producto</label>
		<input type="text" id="Tipo_Produc" name="Tipo_Produc" ></input>
		<label for="Precio_Produc">Precio Producto</label>
		<input type="text" id="Precio_Produc" name="Precio_Produc" ></input>
		<label for="Img_Produc">Imagen</label>
		<input type="text" id="Img_Produc" name="Img_Produc"></input>
		<label for="Especificaciones_Producto">Especificaciones del producto</label>
		<input type="text" id="Especificaciones_Producto" name="Especificaciones_Producto" ></input>
		<label for="Descrp_Produc">Descripcion del producto</label>
		<input type="text" id="Descrp_Produc" name="Descrp_Produc"></input>

			
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
		    <td><b>Precio<b></td>
		    <td><b>Imagen<b></td>
		    <td><b>Especificaciones<b></td>
		    <td><b>Descripcion<b></td>
		</tr>
		
		
	</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>