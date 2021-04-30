
<!DOCTYPE html>
<html lang="es">
    <head>
	    <meta charset="uft-8">
		<meta name="viewport" content="css, php, html">
		<title>Inventario</title>
		<link rel="stylesheet" href="../css/estilos.css">
		<link rel="stylesheet" href="../css/estilos5.css">
	</head>
	<body>
	<section class="contenedor">
	    <section class="contenedor_info">
		<section class="titulo_info">
		</section>
	    </section>

	
	    <form name="Inventario" class="contenedor_registro"  action="" method="POST">
		<h1>Inventario</h1>
		<div>
		<label for="Id_Inventario">Codigo de compra del cliente</label>
		<input type="text" id="Id_Inventario" name="Id_Inventario" placeholder="El Codigo es Asignado por el Sistema" readOnly></input>
		<label for="Fech_Entrada_Inventario">Fecha de Entrada al Inventario</label>
		<input type="text" id="Fech_Entrada_Inventario" name="Fech_Entrada_Inventario" placeholder="Digite la Fecha de Entrada al Inventario"></input>
		<label for="Fech_Salida_Inventario">Fecha de Salida al Inventario</label>
		<input type="text" id="Fech_Salida_Inventario" name="Fech_Salida_Inventario" placeholder="Digite Fecha de Salida al Inventario"></input>
		<label for="Hora_Entrada_Inventario">Hora de Entrada al Inventario</label>
		<input type="text" id="Hora_Entrada_Inventario" name="Hora_Entrada_Inventario" placeholder="Digite la Hora Entrada al Inventario"></input>
		<label for="Hora_salida_Inventario">Hora de salida del Inventario</label>
		<input type="text" id="Hora_salida_Inventario" name="Hora_salida_Inventario" placeholder="Digite la Hora de salida del Inventario"></input>
		<label for="Canti_Inicial_Dia_Inventario">Cantidad inicial del dia inventario</label>
		<input type="text" id="precio Total" name="Canti_Inicial_Dia_Inventario"placeholder="Digite Cantidad inicial del inventario"></input>
		<label for="Canti_Vendida_Dia_Inventario"> Cantidad vendida por dia</label>
		<input type="text" id="precio Total" name="Canti_Vendida_Dia_Inventario" placeholder="Digite Cantidad vendida por dia"></input>
		<label for="Canti_Disponible_Dia_Inventario"> Cantidad disponible por dia</label>
		<input type="text" id="precio Total" name="Canti_Disponible_Dia_Inventario" placeholder="Digite Cantidad disponible por dia"></input>
	


		
			
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
            <td><b>Fecha de Entrada al Inventario<b></td>
		    <td><b>Fecha de Salida al Inventario<b></td>
		    <td><b>Hora de Entrada al Inventario<b></td>
		    <td><b>Hora de salida del Inventario<b></td>
		    <td><b>Cantidad inicial del dia inventario<b></td>
		     <td><b>Cantidad vendida por dia<b></td>
		    <td><b>Cantidad disponible por dia<b></td>
		   

		</tr>
		
				</table>
	</center>
		
		
		</form>
		</section>
	</body>
</html>