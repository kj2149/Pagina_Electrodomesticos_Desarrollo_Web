
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Factura</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="Factura" class="contenedor_registro"  action="" method="POST">
		<h1>Factura</h1>
		<div>
		<label for="Id_Factu">Codigo de Factura</label>
		<input type="text" id="Id_Factu" name="Id_Factu" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Total_IVA_Factu">Total de IVA Factura</label>
		<input type="text" id="Total_IVA_Factu" name="Total_IVA_Factu" placeholder="Digite el total de IVA Factura"></input>
		<label for="Precio_Total_Comp_Factu">Precio total de IVA Factura</label>
		<input type="text" id="Precio_Total_Comp_Factu" name="Precio_Total_Comp_Factu" placeholder="Digite el Precio total Factura <"></input>
		<label for="Fech_Facturacion_Factu">Fecha de facturacion</label>
		<input type="text" id="Fech_Facturacion_Factu" name="Fech_Facturacion_Factu" placeholder="Digite la Fecha de facturacion"></input>
		<label for="Hora_Fact">Hora de Facturacion</label>
		<input type="text" id="Hora_Fact" name="Fech_Facturacion_Factu" placeholder="Digite la hora de Factura"></input>
		<label for="Sub_Total_Factu">Sub total de factura</label>
		<input type="text" id="precio Total" name="Fech_Facturacion_Factu"placeholder="Digite el sud total de Factura"></input>
		<label for="Id_Produc">Codigo de producto</label>
		<input type="text" id="Id_Produc" name="Id_Produc"placeholder="Digite el codigo de producto"></input>

		
			
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
            <td><b>Total de IVA Factura<b></td>
		    <td><b>Precio total de IVA Factura<b></td>
		    <td><b>Fecha de facturacion <b></td>
		    <td><b>Hora de Facturacion<b></td>
		    <td><b>Sub total de factura<b></td>
		    <td><b>Codigo de producto<b></td>
		</tr>
		
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>