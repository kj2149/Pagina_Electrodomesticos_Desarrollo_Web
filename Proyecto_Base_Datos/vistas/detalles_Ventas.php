
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Detalles de Venta</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="Detalles de Venta" class="contenedor_registro"  action="" method="POST">
		<h1>Detalles de Venta</h1>
		<div>
		<label for="Id_Deta_Venta">Codigo de detalles ventas</label>
		<input type="text" id="Id_Deta_Venta" name="Id_Deta_Venta" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Unid_Ventdida_Deta_Venta">Unidades Ventdidas, Detalles de Venta</label>
		<input type="text" id="Unid_Ventdida_Deta_Venta" name="Unid_Ventdida_Deta_Venta" placeholder="Digite la Unidades Ventdidas, Detalles Venta"></input>
		<label for="Precio_Unid_Deta_Venta">Precio de Unid, Detalles de Venta</label>
		<input type="text" id="Precio_Unid_Deta_Venta" name="Precio_Unid_Deta_Venta" placeholder="Digite el Precio Unid Detalles de Venta<"></input>
		<label for="Cost_Total_Venta_Deta_Venta">Costo Total de Ventas, Detalles Venta</label>
		<input type="text" id="Cost_Total_Venta_Deta_Venta" name="Cost_Total_Venta_Deta_Venta" placeholder="Digite el Costo Total de Ventas"></input>
		<label for="Id_Factu">codigo de Factura</label>
		<input type="text" id="Id_Factu" name="Id_Factu" placeholder="Digite el codigo de Factura"></input>
		<label for="Id_Inventario">codigo de Inventario </label>
		<input type="text" id="Id_Inventario" name="Id_Inventario" placeholder="Digite el codigo del Inventario"></input>
		<label for="Id_Descuento">codigo de descuento</label>
		<input type="text" id="Id_Descuento" name="Id_Descuento" placeholder="Digite el codigo de descuento"></input>

		
			
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
            <td><b>UnidadesVentdidas, Detalles de Venta<b></td>
		    <td><b>Precio Unid Detalles de Venta<b></td>
		    <td><b>Costo Total de Venta,Detalles de Venta<b></td>
		    <td><b>Codigo de Factura<b></td>
		    <td><b>codigo de Inventario<b></td>
		    <td><b>codigo de descuento<b></td>
		</tr>
		
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>