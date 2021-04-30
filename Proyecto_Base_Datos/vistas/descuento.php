
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Descuento</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="descuento" class="contenedor_registro"  action="" method="POST">
		<h1>Descuento</h1>
		<div>
		<label for="Id_Descuento">Codigo de compre del cliente</label>
		<input type="text" id="Id_Descuento" name="Id_Descuento" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Dias_Descuento">Dias de Descuento</label>
		<input type="text" id="Dias_Descuento" name="Dias_Descuento" placeholder="Digite lOA Dias de Descuento"></input>
		<label for="Tipo_Descuento">Tipo de Descuento</label>
		<input type="text" id="Tipo_Descuento" name="Tipo_Descuento" placeholder="Digite el Tipo de Descuento"></input>
		<label for="Descripcion_Descuento">Descripcion del Descuento</label>
		<input type="text" id="Descripcion_Descuento" name="Descripcion_Descuento" placeholder="Digite la Descripcion del Descuento"></input>
		<label for="Valor_Descuento">Valor del Descuento</label>
		<input type="text" id="Valor_Descuento" name="Valor_Descuento"  placeholder="Digite el Valor del Descuento"></input>

		
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
            <td><b>Dias de Descuento<b></td>
		    <td><b>Tipo de Descuento<b></td>
		    <td><b>Descripcion del Descuento<b></td>
		    <td><b>Valor del descuento<b></td>
		</tr>
		
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>