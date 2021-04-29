<?php
class tbl_Producto{
					public $Id_Produc;
					public $Nombre_Produc ;
					public $Tipo_Produc;
					public $Precio_Produc;
					public $Img_Produc;
					public $Especificaciones_Producto;
					public $Descrp_Produc;


					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_Producto WHERE Nombre_Produc   = '$this->Nombre_Produc   '";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Usuario ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_Producto values('$this->Id_Produc  ','$this->Nombre_Produc   ','$this->Tipo_Produc  ','$this->Precio_Produc   ','$this->Img_Produc   ','$this->Especificaciones_Producto   ','$this->Descrp_Produc ')";
											mysqli_query($con,$guardar);
											echo "<script>alert('El producto Fue Creado en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Produc  , Nombre_Produc   , Tipo_Produc  , Precio_Produc   , Img_Produc   , Especificaciones_Producto   , Descrp_Produc  FROM tbl_Producto where Nombre_Produc    = '$this->Nombre_Produc   '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Produc   = $arreglo['Id_Produc  '];
	                                        $this->Nombre_Produc    = $arreglo['Nombre_Produc   '];
											$this->Tipo_Produc   = $arreglo['Tipo_Produc  '];
											$this->Precio_Produc    = $arreglo['Precio_Produc   '];
											$this->Img_Produc    = $arreglo['Img_Produc   '];
											$this->Especificaciones_Producto    = $arreglo['Especificaciones_Producto   '];
											$this->Descrp_Produc     = $arreglo['Descrp_Produc    '];

										}else{
											echo"<script>alert('El producto consultado no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_Producto WHERE Nombre_Produc    = '$this->Nombre_Produc   '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('El producto ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_Producto set Id_Produc  ='$this->Id_Produc  ',
											                                Nombre_Produc   ='$this->Nombre_Produc   '
																			Tipo_Produc  ='$this->Tipo_Produc  '
																			Precio_Produc   '$this->Precio_Produc   '
																			Img_Produc   '$this->Img_Produc   '
																			Especificaciones_Producto   '$this->Especificaciones_Producto   '
																			Descrp_Produc    '$this->Descrp_Produc   
																			where Id_Produc  ='$this->Id_Produc  '";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('El producto fue modificado en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_Producto WHERE Id_Produc   = '$this->Id_Produc  '";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('El producto fue eliminado del sistema')</script>";
										}else{
											echo"<script>alert('El productono fue eliminado en el sistema por que tiene registros asociados')</script>";
										}
					}	



                  }

            
?>