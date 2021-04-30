
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Pago</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos3.css">
		<link rel="stylesheet" href="../css/estilos5.css">
		<link rel="stylesheet" href="../css/css.pie.css" type="text/css" />
	</head>
	<body>

	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="Pago" class="contenedor_registro"  action="" method="POST">
		<h1>Pago</h1>
		<div>
		<label for="Id_Pago">Codigo de Pago</label>
		<input type="text" id="Id_Pago" name="Id_Pago" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Metodo_Pago">Metodo de Pago</label>
		<input type="text" id="Metodo_Pago" name="Metodo_Pago" placeholder="Digite el Metodo de Pago"></input>
		<label for="Tipo_Pago">Tipo de Pago</label>
		<input type="text" id="Tipo_Pago" name="Tipo_Pago" placeholder="Digite el Tipo de Pago"></input>
		<label for="Id_Factu">Codigo de Factura</label>
        <input type="text" id="Id_Factu" name="Id_Factu" placeholder="Digite Codigo de Factura"></input>
		<div> 

			
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
            <td><b>Metodo<b></td>
		    <td><b>Tipo<b></td>
		    <td><b>Codigo de Factura<b></td>
		</tr>
		
				</table>
	</center>
		
		
		</form>-->
		</section>

			
	</body>
</html>