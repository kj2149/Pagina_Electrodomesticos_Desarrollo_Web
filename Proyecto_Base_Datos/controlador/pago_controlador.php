<?php
class tbl_pago{
					public $Id_Pago ;
					public $Metodo_Pago ;
					public $Tipo_Pago ;
					public $Id_Factu;
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_pago WHERE Metodo_Pago = '$this->Metodo_Pago '";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Usuario ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_pago values('$this->Id_Pago ','$this->Metodo_Pago ','$this->Tipo_Pago ','$this->Id_Factu')";
											mysqli_query($con,$guardar);
											echo "<script>alert('El pago ya Fue Creado en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Pago , Metodo_Pago , Tipo_Pago , Id_Factu FROM tbl_pago where Metodo_Pago  = '$this->Metodo_Pago '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Pago  = $arreglo['Id_Pago '];
	                                        $this->Metodo_Pago  = $arreglo['Metodo_Pago '];
											$this->Tipo_Pago  = $arreglo['Tipo_Pago '];
											$this->Id_Factu = $arreglo['Id_Factu'];	
										}else{
											echo"<script>alert('El pago consultado no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_pago WHERE Metodo_Pago  = '$this->Metodo_Pago '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('El pago  ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_pago set Id_Pago ='$this->Id_Pago ',
											                                Metodo_Pago ='$this->Metodo_Pago '
																			Tipo_Pago ='$this->Tipo_Pago '
																			Id_Factu'$this->Id_Factu'
																			where Id_Pago ='$this->Id_Pago '";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('El pago fue modificado en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_pago WHERE Id_Pago  = '$this->Id_Pago '";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('El pago fue eliminado del sistema')</script>";
										}elseo
											echo"<script>alert('El pago no fue eliminado en el sistema por que tiene registros asociados')</script>";
										}
					}
									

                  }

            
?>