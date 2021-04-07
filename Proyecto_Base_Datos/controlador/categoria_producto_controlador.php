<?php
class tbl_CategoriaProducto{
					public $codigoCategoriaProducto;
					public $nombreCategoria;
					public $tipoCategoria;
										
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_categoriaProductos WHERE nombreCategoria= '$this->nombreCategoria'";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('La categoria del Producto ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into categoriaProductos values('$this->codigoCategoriaProducto','$this->nombreCategoria','$this->tipoCategoria')";
											mysqli_query($con,$guardar);
											echo "<script>alert('La categoria del Producto Fue Creada en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT codigoCategoriaProducto, nombreCategoria, tipoCategoria  FROM tbl_categoriaProductos where nombreCategoria = '$this->nombreCategoria'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->codigoCategoriaProducto = $arreglo['codigoCategoriaProducto'];
	                                        $this->nombreCategoria = $arreglo['nombreCategoria'];
											$this->tipoCategoria = $arreglo['tipoCategoria'];
					
										}else{
											echo"<script>alert('La categoria del Producto consultada no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_categoriaProductos WHERE nombreCategoria = '$this->nombreCategoria'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('La categoria del Producto ya existe en el sistema')</script>";
										}else{
											$mod ="update categoriaProductos set codigoCategoriaProducto='$this->codigoCategoriaProducto',
											                                nombreCategoria='$this->nombreCategoria'
																			tipoCategoria='$this->tipoCategoria'
																			where codigoCategoriaProducto='$this->codigoCategoriaProducto'";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('La categoria del Producto fue modificada en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_categoriaProductos WHERE codigoCategoriaProducto = '$this->codigoCategoriaProducto'";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('La categoria del Producto fue eliminada del sistema')</script>";
										}else{
											echo"<script>alert('el depatamento no fue eliminado en el sistema por que tiene registros asociados')</script>";
										}
					}
				


                  }

            
?>