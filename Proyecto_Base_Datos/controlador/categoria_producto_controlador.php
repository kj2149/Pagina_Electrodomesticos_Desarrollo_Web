<?php
class tbl_categoria_producto{
					public $Id_Categ_Produc ;
					public $Nombre_Categ_Produc ;
					public $Tipo_Categ_Produc ;
										
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_categoria_producto WHERE Nombre_Categ_Produc = '$this->Nombre_Categ_Produc '";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('La categoria del Producto ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_categoria_producto values('$this->Tipo_Categ_Produc ','$this->Nombre_Categ_Produc ','$this->Tipo_Categ_Produc ')";
											mysqli_query($con,$guardar);
											echo "<script>alert('La categoria del Producto Fue Creada en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Tipo_Categ_Produc , Nombre_Categ_Produc , Tipo_Categ_Produc   FROM tbl_categoria_producto where Nombre_Categ_Produc  = '$this->Nombre_Categ_Produc '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Tipo_Categ_Produc  = $arreglo['Tipo_Categ_Produc '];
	                                        $this->Nombre_Categ_Produc  = $arreglo['Nombre_Categ_Produc '];
											$this->Tipo_Categ_Produc  = $arreglo['Tipo_Categ_Produc '];
					
										}else{
											echo"<script>alert('La categoria del Producto consultada no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_categoria_producto WHERE Nombre_Categ_Produc  = '$this->Nombre_Categ_Produc '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('La categoria del Producto ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_categoria_producto set
											                                Tipo_Categ_Produc ='$this->Tipo_Categ_Produc ',
											                                Nombre_Categ_Produc ='$this->Nombre_Categ_Produc '
																			Tipo_Categ_Produc ='$this->Tipo_Categ_Produc '
																			where Tipo_Categ_Produc ='$this->Tipo_Categ_Produc '";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('La categoria del Producto fue modificada en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_categoria_producto WHERE Tipo_Categ_Produc  = '$this->Tipo_Categ_Produc '";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('La categoria del Producto fue eliminada del sistema')</script>";
										}else{
											echo"<script>alert('La categoria del Producto no fue eliminado en el sistema por que tiene registros asociados')</script>";
										}
					}
				


                  }

            
?>