<?php
class tbl_contacto{
					public $Id_contacto;
					public $Direc_contacto;
					public $Telefono_contacto;
					public $Correo_contacto;
					public $Fech_Nac_Edad;
	
					
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_contacto WHERE Id_contacto,Direc_contacto,Telefono_contacto,Correo_contacto,Fech_Nac_Edad= '$this->Id_contacto',$this->Direc_contacto,$this->telefono_contacto,$this->correo_contacto,$this->Fech_Nac_Edad'";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Contacto ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_contacto values('$this->Id_contacto','$this->Direc_contacto','$this->Telefono_contacto','$this->Correo_contacto','$this->Fech_Nac_Edad')";
											mysqli_query($con,$guardar);
											echo "<script>alert('El Contacto Fue Creado en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_contacto,Direc_contacto,telefono_contacto,correo_contacto,Fech_Nac_Edad FROM tbl_Contacto where Id_contacto,Direc_contacto,telefono_contacto,correo_contacto,Fech_Nac_Edad = '$this->Id_contacto,$this->Direc_contacto,$this->telefono_contacto,$this->correo_contacto,$this->Fech_Nac_Edad'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_contacto = $arreglo['Id_contacto'];
	                                        $this->Direc_contacto = $arreglo['Direc_contacto'];
											$this->telefono_contacto = $arreglo['telefono_contacto'];
											$this->correo_contacto = $arreglo['correo_contacto'];
											$this->Fech_Nac_Edad = $arreglo['Fech_Nac_Edad'];
										}else{
											echo"<script>alert('El Contacto consultado no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_contacto WHERE Id_contacto,Direc_contacto,telefono_contacto,correo_contacto,Fech_Nac_Edad = '$this->Id_contacto,$this->Direc_contacto,$this->telefono_contacto,$this->correo_contacto,$this->Fech_Nac_Edad'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('El contacto ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_contacto set Id_contacto='$this->Id_contacto',
											Direc_contacto='$this->Direc_contacto'
											telefono_contacto='$this->telefono_contacto'
											correo_contacto='$this->correo_contacto'
											Fech_Nac_Edad='$this->Fech_Nac_Edad'";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('El Contacto fue modificado en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM Contacto WHERE Id_contacto,Direc_contacto,telefono_contacto,correo_contacto,Fech_Nac_Edad = '$this->Id_contacto,$this->Direc_contacto,$this->telefono_contacto,$this->correo_contacto,$this->Fech_Nac_Edad'";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('el Contacto fue eliminado en el sistema')</script>";
										}else{
											echo"<script>alert('el depatamento no fue eliminado en el sistema por que tiene registros asociados')</script>";
										}
					}
					
					




                  }

            
?>