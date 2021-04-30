<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Orden de Compra</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="Orden de compra" class="contenedor_registro"  action="" method="POST">
		<h1>Orden de Compra</h1>
		<div>
		<label for="Id_Orden_Com">Codigo de Orden de Compra</label>
		<input type="text" id="Id_Orden_Com" name="Id_Orden_Com" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Cost_Productos_Orden_Com">Costos de Producto</label>
		<input type="text" id="Cost_Productos_Orden_Com" name="Cost_Productos_Orden_Com"  placeholder="Digite los Costos de Producto"></input>
		<label for="Precio_UnId_Orden_Com">Precio por Unidad</label>
		<input type="text" id="Precio_UnId_Orden_Com" name="Precio_UnId_Orden_Com" placeholder="Digite el Precio por Unidad<"></input>
		<label for="Uni_Vendidas_Orden_Com">Unidades vendidas</label>
		<input type="text" id="Uni_Vendidas_Orden_Com" name="Uni_Vendidas_Orden_Com"placeholder="Digite las Unidades vendidas"></input>
		<label for="Fecha_Ventas_Orden_Com">Fecha de ventas</label>
		<input type="text" id="Fecha_Ventas_Orden_Com" name="Uni_Vendidas_Orden_Com"placeholder="Digite Fecha de ventas"></input>
		<label for="Hora_Venta_Orden_Com">Hora de venta Orden de Compra</label>
		<input type="text" id="precio Total" name="Hora_Venta_Orden_Com" placeholder="Digite la Hora de venta"></input>
	
	
		<br>	
			
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
            <td><b>Costos de Producto<b></td>
		    <td><b>Precio por Unidad<b></td>
		    <td><b>Unidades vendidas <b></td>
		    <td><b>Fecha de ventas<b></td>
		    <td><b>Hora de venta Orden de Compra<b></td>

		</tr>
		
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>