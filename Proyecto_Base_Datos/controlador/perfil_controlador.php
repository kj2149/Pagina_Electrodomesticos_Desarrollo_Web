<?php
class tbl_Perfil{
					public $Id_Perfil ;
					public $Nombre_Perfil ;
					public $Tipo_Perfil ;
					public $Id_Usuario;
					public $Id_Calificacion ;
	
					
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_Perfil WHERE Id_Perfil ,Nombre_Perfil ,Tipo_Perfil ,Id_Usuario,Id_Calificacion = '$this->Id_Perfil ',$this->Nombre_Perfil ,$this->Tipo_Perfil ,$this->Id_Usuario,$this->Id_Calificacion '";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El perfil ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_Perfil values($this->Id_Perfil ',$this->Nombre_Perfil ,$this->Tipo_Perfil ,$this->Id_Usuario,$this->Id_Calificacion ')";
											mysqli_query($con,$guardar);
											echo "<script>alert('El perfil Fue Creado en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Perfil ,Nombre_Perfil ,Tipo_Perfil ,Id_Usuario,Id_Calificacion  FROM tbl_Perfil where Id_Perfil ,Nombre_Perfil ,Tipo_Perfil ,Id_Usuario,Id_Calificacion  = '$this->Id_Perfil ',$this->Nombre_Perfil ,$this->Tipo_Perfil ,$this->Id_Usuario,$this->Id_Calificacion '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Perfil  = $arreglo['Id_Perfil '];
	                                        $this->Nombre_Perfil  = $arreglo['Nombre_Perfil '];
											$this->Tipo_Perfil  = $arreglo['Tipo_Perfil '];
											$this->Id_Usuario= $arreglo['Id_Usuario'];
											$this->Id_Calificacion  = $arreglo['Id_Calificacion '];
										}else{
											echo"<script>alert('El perfil consultado no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_Perfil WHERE Id_Perfil ,Nombre_Perfil ,Tipo_Perfil ,Id_Usuario,Id_Calificacion  = '$this->Id_Perfil ',$this->Nombre_Perfil ,$this->Tipo_Perfil ,$this->Id_Usuario,$this->Id_Calificacion '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('El perfil ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_Perfil set Id_contacto='$this->Id_contacto',
											Id_Perfil ='$this->Id_Perfil '
											Nombre_Perfil ='$this->Nombre_Perfil '
											Tipo_Perfil ='$this->Tipo_Perfil '
											Id_Usuario='$this->Id_Usuario'";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('El perfil fue modificado en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM perfil WHERE Id_Perfil ,Nombre_Perfil ,Tipo_Perfil ,Id_Usuario,Id_Calificacion  = $this->Id_Perfil ',$this->Nombre_Perfil ,$this->Tipo_Perfil ,$this->Id_Usuario,$this->Id_Calificacion '";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('el perfil fue eliminado en el sistema')</script>";
										}else{
											echo"<script>alert('el perfil no fue eliminado en el sistema por que tiene registros asociados')</script>";
										}
					}
					
					




                  }

            
?>