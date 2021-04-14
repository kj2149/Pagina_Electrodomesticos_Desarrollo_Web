<?php
class tbl_Departamento{
					public $Id_Departamento;
					public $Nombre_Departamento;
                    public $Id_Ciudad;
               
		
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_Departamento WHERE Id_Departamento,Nombre_Departamento,Id_Ciudad = '$this->Id_Departamento','$this->Id_Departamento','$this->Id_Ciudad';
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Departamento ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into Departamento values('$this->Id_Departamento','$this->Id_Departamento','$this->Id_Ciudad')";
											mysqli_query($con,$guardar);
											echo "<script>alert('Departamento Fue Creado en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Departamento,Nombre_Departamento,Id_Ciudad FROM tbl_Departamento where Id_Departamento,Nombre_Departamento,Id_Ciudad = ''$this->Id_Departamento','$this->Id_Departamento','$this->Id_Ciudad'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Departamento = $arreglo['Id_Departamento'];
	                                        $this->Nombre_Departamento = $arreglo['Nombre_Departamento'];
											$this->Id_Ciudad = $arreglo['Id_Ciudad'];
										}else{
											echo"<script>alert('El Departamento consultado no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_Departamento WHERE Id_Departamento,Nombre_Departamento,Id_Ciudad = '$this->Id_Departamento','$this->Id_Departamento','$this->Id_Ciudad'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('El Departamento ya existe en el sistema')</script>";
										}else{
											$mod ="update ciudad set codigoCiudad='$this->Id_Departamento',
                                                                            Nombre_Departamento='$this->Nombre_Departamento'
                                                                            Id_Ciudad='$this->Id_Ciudad'
																			where Id_Departamento='$this->Id_Departamento'";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('El departamento fue modificado en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_Departamento WHERE Id_Departamento,Nombre_Departamento,Id_Ciudad = '$this->Id_Departamento','$this->Id_Departamento','$this->Id_Ciudad'";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('El departamento fue eliminado del sistema')</script>";
										}else{
											echo"<script>alert('El departamento no fue eliminado en el sistema por que tiene registros asociados')</script>";
										}
					}
					
			


                  }

        ?>



                 

            