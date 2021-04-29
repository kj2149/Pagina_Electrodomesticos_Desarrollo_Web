<?php
class tbl_genero{
					public $Id_Genero ;
					public $Nom_genero ;

		
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_genero WHERE Nom_genero = '$this->Nom_genero '";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Usuario ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into ciudad values('$this->Id_Genero ','$this->Nom_genero ')";
											mysqli_query($con,$guardar);
											echo "<script>alert('Genero Fue Creada en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Genero , Nom_genero  FROM tbl_genero where Nom_genero  = '$this->Nom_genero '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Genero  = $arreglo['Id_Genero '];
	                                        $this->Nom_genero  = $arreglo['Nom_genero '];
										
										}else{
											echo"<script>alert('El Genero consultado no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_genero WHERE Nom_genero  = '$this->Nom_genero '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('El Genero ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_genero set Id_Genero ='$this->Id_Genero ',
											                                Nom_genero ='$this->Nom_genero '
											
																			where Id_Genero ='$this->Id_Genero '";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('EL Genero fue modificado en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_genero WHERE Id_Genero  = '$this->Id_Genero '";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('El genero fue eliminado del sistema')</script>";
										}else{
											echo"<script>alert('El genero no fue eliminado en el sistema por que tiene registros asociados')</script>";
										}
					}
					
			


                  }

        ?>



                 

            