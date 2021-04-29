<?php
class tbl_calificacion{
					public $Id_Calificacion ;
					public $Tipo_Calificacion ;
					public $Fech_Calificacion ;
					public $Comentario_Calificacion ;
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_calificacion WHERE Tipo_Calificacion = '$this->Tipo_Calificacion '";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Usuario ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_calificacion values('$this->Id_Calificacion ','$this->Tipo_Calificacion ','$this->Fech_Calificacion ','$this->Comentario_Calificacion ')";
											mysqli_query($con,$guardar);
											echo "<script>alert('La calificacion Fue Creada en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Calificacion , Tipo_Calificacion , Fech_Calificacion , Comentario_Calificacion  FROM tbl_calificacion where Tipo_Calificacion  = '$this->Tipo_Calificacion '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Calificacion  = $arreglo['Id_Calificacion '];
	                                        $this->Tipo_Calificacion  = $arreglo['Tipo_Calificacion '];
											$this->Fech_Calificacion  = $arreglo['Fech_Calificacion '];
											$this->Comentario_Calificacion  = $arreglo['Comentario_Calificacion '];
										}else{
											echo"<script>alert('La calificacion consultada no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_calificacion WHERE Tipo_Calificacion  = '$this->Tipo_Calificacion '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('La calificacion ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_calificacion set Id_Calificacion ='$this->Id_Calificacion ',
											                                Tipo_Calificacion ='$this->Tipo_Calificacion '
																			Fech_Calificacion ='$this->Fech_Calificacion '
																			Comentario_Calificacion '$this->Comentario_Calificacion '
																			where Id_Calificacion ='$this->Id_Calificacion '";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('La calificacion fue modificada en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_calificacion WHERE Id_Calificacion  = '$this->Id_Calificacion '";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('La calificacion fue eliminada del sistema')</script>";
										}else{
											echo"<script>alert('La calificacion no fue eliminada en el sistema por que tiene registros asociados')</script>";
										}
					}		

                 }

            
?>