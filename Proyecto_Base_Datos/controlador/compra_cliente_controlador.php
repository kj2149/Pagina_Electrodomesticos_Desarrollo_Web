<?php
class tbl_compra_cliente{
					public $Id_Comp_Cli ;
					public $Cantidad_Comp_cli ;
					public $Descuento_Comp_Cli ;
					public $Iva_Comp_Cli ;
					public $Garantia_Comp_Cli ;
					public $Precio_Total_Comp_Cli ;
					public $Fech_Comp_Cli ;
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_compra_cliente WHERE Cantidad_Comp_cli = '$this->Cantidad_Comp_cli '";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('La compra ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_compra_cliente values('$this->Id_Comp_Cli ','$this->Cantidad_Comp_cli ','$this->Descuento_Comp_Cli ','$this->Iva_Comp_Cli ','$this->Garantia_Comp_Cli ','$this->Precio_Total_Comp_Cli ','$this->Fech_Comp_Cli ')";
											mysqli_query($con,$guardar);
											echo "<script>alert('La compra del cliente Fue Creada en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Comp_Cli , Cantidad_Comp_cli , Descuento_Comp_Cli , Iva_Comp_Cli , Garantia_Comp_Cli , Precio_Total_Comp_Cli , Fech_Comp_Cli   FROM tbl_compra_cliente where Cantidad_Comp_cli  = '$this->Cantidad_Comp_cli '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Comp_Cli  = $arreglo['Id_Comp_Cli '];
	                                        $this->Cantidad_Comp_cli  = $arreglo['Cantidad_Comp_cli '];
											$this->Descuento_Comp_Cli  = $arreglo['Descuento_Comp_Cli '];
											$this->Iva_Comp_Cli  = $arreglo['Iva_Comp_Cli '];
											$this->Garantia_Comp_Cli  = $arreglo['Garantia_Comp_Cli '];
											$this->Precio_Total_Comp_Cli  = $arreglo['Precio_Total_Comp_Cli '];
											$this->Fech_Comp_Cli  = $arreglo['Fech_Comp_Cli '];

										}else{
											echo"<script>alert('La compra del cliente consultada no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_compra_cliente WHERE Cantidad_Comp_cli  = '$this->Cantidad_Comp_cli '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('La compra del cliente ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_compra_cliente set Id_Comp_Cli ='$this->Id_Comp_Cli ',
											                                Cantidad_Comp_cli ='$this->Cantidad_Comp_cli '
																			Descuento_Comp_Cli ='$this->Descuento_Comp_Cli '
																			Iva_Comp_Cli '$this->Iva_Comp_Cli '
																			Garantia_Comp_Cli '$this->Garantia_Comp_Cli '
																			Precio_Total_Comp_Cli '$this->Precio_Total_Comp_Cli '
																			Fech_Comp_Cli '$this->Fech_Comp_Cli '
																			where Id_Comp_Cli ='$this->Id_Comp_Cli '";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('La compra del cliente fue modificada en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_compra_cliente WHERE Id_Comp_Cli  = '$this->Id_Comp_Cli '";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('La compra del cliente fue eliminada del sistema')</script>";
										}else{
											echo"<script>alert('La compra del cliente no fue eliminada en el sistema por que tiene registros asociados')</script>";
										}
					}	



                  }

            
?>