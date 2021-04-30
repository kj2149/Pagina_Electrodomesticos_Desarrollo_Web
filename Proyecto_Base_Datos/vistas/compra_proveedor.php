
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title> Compra Proveedor</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="compra_proveedor" class="contenedor_registro"  action="" method="POST">
		<h1> Compra Proveedor</h1>
		<div>
		<label for="Id_Comp_Proveedor">Codigo de compra del cliente</label>
		<input type="text" id="Id_Comp_Proveedor" name="Id_Comp_Proveedor" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Cant_Comp_Proveedor">Cantidad Compra Proveedor</label>
		<input type="text" id="Cant_Comp_Proveedor" name="Cant_Comp_Proveedor" placeholder="Digite la cantidad Compra proveedor"></input>
		<label for="Precio_Total_Comp_Proveedor">Precio Total</label>
		<input type="text" id="Precio_Total_Comp_Proveedor" name="Precio_Total_Comp_Proveedor"  placeholder="Digite el precio Total"></input>
		<label for="Fecha_Compra_Proveedor">Fecha de Compra Proveedor</label>
		<input type="text" id="Fecha_Compra_Proveedor" name="Fecha_Compra_Proveedor" placeholder="Digite el fecha Compra Proveedor"></input>
		
		

	
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
            <td><b>Cantidad Compra del Proveedor<b></td>
		    <td><b>Precio Total<b></td>
		    <td><b>Fecha de Compra Proveedor<b></td>
		    
		</tr>
	
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>