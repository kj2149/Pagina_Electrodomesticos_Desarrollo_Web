<?php
class tbl_compra_proveedor{
					public $Id_Comp_Proveedor ;
					public $Cant_Comp_Proveedor;
					public $Precio_Total_Comp_Proveedor ;
					public $Fecha_Compra_Proveedor ;
	
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_compra_proveedor WHERE Id_Comp_Proveedor = '$this->Id_Comp_Proveedor '";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Usuario ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_compra_proveedor values('$this->Id_Comp_Proveedor ','$this->Id_Comp_Proveedor ','$this->Precio_Total_Comp_Proveedor ','$this->Fecha_Compra_Proveedor ')";
											mysqli_query($con,$guardar);
											echo "<script>alert('La compra proveedor Fue Creada en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Comp_Proveedor , Id_Comp_Proveedor , Precio_Total_Comp_Proveedor , Fecha_Compra_Proveedor  FROM tbl_compra_proveedor where Id_Comp_Proveedor  = '$this->Id_Comp_Proveedor '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Comp_Proveedor  = $arreglo['Id_Comp_Proveedor '];
	                                        $this->Id_Comp_Proveedor  = $arreglo['Id_Comp_Proveedor '];
											$this->Precio_Total_Comp_Proveedor  = $arreglo['Precio_Total_Comp_Proveedor '];
											$this->Fecha_Compra_Proveedor  = $arreglo['Fecha_Compra_Proveedor '];	
										}else{
											echo"<script>alert('La compra proveedor consultada no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_compra_proveedor WHERE Id_Comp_Proveedor  = '$this->Id_Comp_Proveedor '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('La compra proveedor  ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_compra_proveedor set Id_Comp_Proveedor ='$this->Id_Comp_Proveedor ',
											                                Id_Comp_Proveedor ='$this->Id_Comp_Proveedor '
																			Precio_Total_Comp_Proveedor ='$this->Precio_Total_Comp_Proveedor '
																			Fecha_Compra_Proveedor '$this->Fecha_Compra_Proveedor '
																			where Id_Comp_Proveedor ='$this->Id_Comp_Proveedor '";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('La compra proveedor fue modificada en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_compra_proveedor WHERE Id_Comp_Proveedor  = '$this->Id_Comp_Proveedor '";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('La compra proveedor fue eliminada del sistema')</script>";
										}else{
											echo"<script>alert('La compra proveedor no fue eliminada en el sistema por que tiene registros asociados')</script>";
										}
					}
									

                  }

            
?>