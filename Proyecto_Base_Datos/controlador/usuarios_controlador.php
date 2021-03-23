<?php
class Usuario{
					public $codigoUsuario;
					public $nombreUsuario;
					public $telefonoUsuario;
					public $codigoRol;
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM usuarios WHERE nombreUsuario= '$this->nombreUsuario'";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Usuario ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into usuarios values('$this->codigoUsuario','$this->nombreUsuario','$this->telefonoUsuario')";
											mysqli_query($con,$guardar);
											echo "<script>alert('El usuario Fue Creado en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT codigoUsuario, nombreUsuario, telefonoUsuario FROM Usuarios where nombreUsuario = '$this->nombreUsuario'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->codigoUsuario = $arreglo['codigoUsuario'];
	                                        $this->nombreUsuario = $arreglo['nombreUsuario'];
											$this->telefonoUsuario = $arreglo['telefonoUsuario'];
										}else{
											echo"<script>alert('El Usuario consultado no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM usuarios WHERE nombreUsuario = '$this->nombreUsuario'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('El Usuario ya existe en el sistema')</script>";
										}else{
											$mod ="update usuarios set codigoUsuario='$this->codigoUsuario',
											                                nombreUsuario='$this->nombreUsuario'
																			telefonoUsuario='$this->telefonoUsuario'
																			where codigoUsuario='$this->codigoUsuario'";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('El Usuario fue modificado en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM Usuarios WHERE codigoUsuario = '$this->codigoUsuario'";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('el Usuario fue eliminado en el sistema')</script>";
										}else{
											echo"<script>alert('el depatamento no fue eliminado en el sistema por que tiene registros asociados')</script>";
										}
					}
					
					
					function limpiar(){
						                $this->codigoUsuario = Null;
										$this->nombreUsuario = Null;
										$this->telefonoUsuario = Null;
					}



                  }

            
?>