<?php
class tbl_calificacion{
					public $codigoCalificacion;
					public $tipoCalificacion;
					public $fechaCalificacion;
					public $comentarioCalificacion;
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_calificacion WHERE tipoCalificacion= '$this->tipoCalificacion'";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Usuario ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into calificacion values('$this->codigoCalificacion','$this->tipoCalificacion','$this->fechaCalificacion','$this->comentarioCalificacion')";
											mysqli_query($con,$guardar);
											echo "<script>alert('La calificacion Fue Creada en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT codigoCalificacion, tipoCalificacion, fechaCalificacion, comentarioCalificacion FROM tbl_calificacion where tipoCalificacion = '$this->tipoCalificacion'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->codigoCalificacion = $arreglo['codigoCalificacion'];
	                                        $this->tipoCalificacion = $arreglo['tipoCalificacion'];
											$this->fechaCalificacion = $arreglo['fechaCalificacion'];
											$this->comentarioCalificacion = $arreglo['comentarioCalificacion'];
										}else{
											echo"<script>alert('La calificacion consultada no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_calificacion WHERE tipoCalificacion = '$this->tipoCalificacion'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('La calificacion ya existe en el sistema')</script>";
										}else{
											$mod ="update calificacion set codigoCalificacion='$this->codigoCalificacion',
											                                tipoCalificacion='$this->tipoCalificacion'
																			fechaCalificacion='$this->fechaCalificacion'
																			comentarioCalificacion'$this->comentarioCalificacion'
																			where codigoCalificacion='$this->codigoCalificacion'";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('La calificacion fue modificada en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_calificacion WHERE codigoCalificacion = '$this->codigoCalificacion'";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('La calificacion fue eliminada del sistema')</script>";
										}else{
											echo"<script>alert('La calificacion no fue eliminada en el sistema por que tiene registros asociados')</script>";
										}
					}		

                 }

            
?>