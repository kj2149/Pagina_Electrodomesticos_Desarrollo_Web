<?php
class tbl_Ciudad{
					public $codigoCiudad;
					public $nombreCiudad;
					public $localidad;
		
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_ciudad WHERE nombreCiudad= '$this->nombreCiudad'";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Usuario ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into ciudad values('$this->codigoCiudad','$this->nombreCiudad','$this->localidad')";
											mysqli_query($con,$guardar);
											echo "<script>alert('Ciudad Fue Creado en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT codigoCiudad, nombreCiudad, localidad FROM tbl_Ciudad where nombreCiudad = '$this->nombreCiudad'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->codigoCiudad = $arreglo['codigoCiudad'];
	                                        $this->nombreCiudad = $arreglo['nombreCiudad'];
											$this->localidad = $arreglo['localidad'];
										}else{
											echo"<script>alert('La ciudad consultada no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_ciudad WHERE nombreCiudad = '$this->nombreCiudad'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('La ciudad ya existe en el sistema')</script>";
										}else{
											$mod ="update ciudad set codigoCiudad='$this->codigoCiudad',
											                                nombreCiudad='$this->nombreCiudad'
																			localidad='$this->localidad'
																			where codigoCiudad='$this->codigoCiudad'";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('La ciudad fue modificada en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_ciudad WHERE codigoCiudad = '$this->codigoCiudad'";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('La ciudad fue eliminada del sistema')</script>";
										}else{
											echo"<script>alert('La ciudad no fue eliminada en el sistema por que tiene registros asociados')</script>";
										}
					}
					
			


                  }

        ?>



                 

            