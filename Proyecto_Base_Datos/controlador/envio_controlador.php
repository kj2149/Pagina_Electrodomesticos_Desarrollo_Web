<?php
class tbl_envio{
					public $Id_Envio;
					public $Tipo_envio;
					public $Dirección_Envio;
					public $Id_Pago;
					public $Id_Ciudad;
	
					
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_envio WHERE Id_Envio,Tipo_envio,Dirección_Envio,Id_Pago,Id_Ciudad= '$this->Id_Envio',$this->Tipo_envio,$this->Dirección_Envio,$this->Id_Pago,$this->Id_Ciudad'";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Envio ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_envio values($this->Id_Envio',$this->Tipo_envio,$this->Dirección_Envio,$this->Id_Pago,$this->Id_Ciudad')";
											mysqli_query($con,$guardar);
											echo "<script>alert('El envio Fue Creado en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Envio,Tipo_envio,Dirección_Envio,Id_Pago,Id_Ciudad FROM tbl_envio where Id_Envio,Tipo_envio,Dirección_Envio,Id_Pago,Id_Ciudad = '$this->Id_Envio',$this->Tipo_envio,$this->Dirección_Envio,$this->Id_Pago,$this->Id_Ciudad'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Envio = $arreglo['Id_Envio'];
	                                        $this->Tipo_envio = $arreglo['Tipo_envio'];
											$this->Dirección_Envio = $arreglo['Dirección_Envio'];
											$this->Id_Pago= $arreglo['Id_Pago'];
											$this->Id_Ciudad = $arreglo['Id_Ciudad'];
										}else{
											echo"<script>alert('El Envio consultado no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_envio WHERE Id_Envio,Tipo_envio,Dirección_Envio,Id_Pago,Id_Ciudad = '$this->Id_Envio',$this->Tipo_envio,$this->Dirección_Envio,$this->Id_Pago,$this->Id_Ciudad'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('El Envio ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_envio set Id_contacto='$this->Id_contacto',
											Id_Envio='$this->Id_Envio'
											Tipo_envio='$this->Tipo_envio'
											Dirección_Envio='$this->Dirección_Envio'
											Id_Pago='$this->Id_Pago'";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('El Envio fue modificado en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM Envio WHERE Id_Envio,Tipo_envio,Dirección_Envio,Id_Pago,Id_Ciudad = $this->Id_Envio',$this->Tipo_envio,$this->Dirección_Envio,$this->Id_Pago,$this->Id_Ciudad'";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('el envio fue eliminado en el sistema')</script>";
										}else{
											echo"<script>alert('el envio no fue eliminado en el sistema por que tiene registros asociados')</script>";
										}
					}
					
					




                  }

            
?>