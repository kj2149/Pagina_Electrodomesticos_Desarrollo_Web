
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Compra Cliente</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="compra cliente" class="contenedor_registro"  action="" method="POST">
		<h1>Compra Cliente</h1>
		<div>
		<label for="Id_Comp_Cli">Codigo de compra del cliente</label>
		<input type="text" id="Id_Comp_Cli" name="Id_Comp_Cli"  placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Cantidad_Comp_cli">Cantidad de la compra cliente</label>
		<input type="text" id="Cantidad_Comp_cli" name="Cantidad_Comp_cli"  placeholder="Digite la Cantidad de la compra cliente"></input>
		<label for="Descuento_Comp_Cli">Descuento compra cliente</label>
		<input type="text" id="Descuento_Comp_Cli" name="Descuento_Comp_Cli"  placeholder="Digite el Descuento de la compra cliente "></input>
		<label for="Iva_Comp_Cli">Iva Compra</label>
		<input type="text" id="Iva_Comp_Cli" name="Iva_Comp_Cli"placeholder="Digite el Iva de la compra cliente"></input>
		<label for="Garantia_Comp_Cli">Garantia Compra</label>
		<input type="text" id="Garantia_Comp_Cli" name="Garantia_Comp_Cli"  placeholder="Digite la Garantia de la compra cliente"></input>
		<label for="Precio_Total_Comp_Cli">Precio total de la compra</label>
		<input type="text" id="precio Total" name="Precio_Total_Comp_Cli" placeholder="Digite el Precio Total de la compra"></input>
		<label for="Fech_Comp_Cli">Fecha de la Compra</label>
		<input type="text" id="Fech_Comp_Cli" name="Fech_Comp_Cli" placeholder="Digite la fecha de Compra"></input>1


			
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
            <td><b>Cantidad Compra clientr<b></td>
		    <td><b>Descuento compra Cliente<b></td>
		    <td><b>Iva Compra Cliente<b></td>
		    <td><b>Garantia Compra Cliente<b></td>
		    <td><b>Precio Total<b></td>
		    <td><b>Fecha de Compra<b></td>
		    

		</tr>
		
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>