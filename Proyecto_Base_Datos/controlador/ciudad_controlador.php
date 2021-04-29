<?php
class tbl_Ciudad{
					public $Id_Ciudad ;
					public $Nombre_ciudad ;
					public $Localidad_Ciudad ;
		
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_ciudad WHERE Nombre_ciudad = '$this->Nombre_ciudad '";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Usuario ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_Ciudad values('$this->Id_Ciudad ','$this->Nombre_ciudad ','$this->Localidad_Ciudad ')";
											mysqli_query($con,$guardar);
											echo "<script>alert('Ciudad Fue Creado en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Ciudad , Nombre_ciudad , Localidad_Ciudad  FROM tbl_Ciudad where Nombre_ciudad  = '$this->Nombre_ciudad '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Ciudad  = $arreglo['Id_Ciudad '];
	                                        $this->Nombre_ciudad  = $arreglo['Nombre_ciudad '];
											$this->Localidad_Ciudad  = $arreglo['Localidad_Ciudad '];
										}else{
											echo"<script>alert('La ciudad consultada no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_ciudad WHERE Nombre_ciudad  = '$this->Nombre_ciudad '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('La ciudad ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_ciudad set Id_Ciudad ='$this->Id_Ciudad ',
											                                Nombre_ciudad ='$this->Nombre_ciudad '
																			Localidad_Ciudad ='$this->Localidad_Ciudad '
																			where Id_Ciudad ='$this->Id_Ciudad '";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('La ciudad fue modificada en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_ciudad WHERE Id_Ciudad  = '$this->Id_Ciudad '";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('La ciudad fue eliminada del sistema')</script>";
										}else{
											echo"<script>alert('La ciudad no fue eliminada en el sistema por que tiene registros asociados')</script>";
										}
					}
					
			


                  }

        ?>



                 

            