<?php
class tbl_edad{
					public $Id_Edad ;
					public $Fech_Nac_Edad;
					public $Id_Usuario ;

	
					
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_edad WHERE Id_Edad ,Fech_Nac_Edad,Id_Usuario = '$this->Id_Edad ',$this->Fech_Nac_Edad,$this->Id_Usuario '";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('La edad ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_edad values($this->Id_Edad ',$this->Fech_Nac_Edad,$this->Id_Usuario ')";
											mysqli_query($con,$guardar);
											echo "<script>alert('La edad Fue Creada en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Edad ,Fech_Nac_Edad,Id_Usuario FROM tbl_edad where Id_Edad ,Fech_Nac_Edad,Id_Usuario  = '$this->Id_Edad ',$this->Fech_Nac_Edad,$this->Id_Usuario '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Edad  = $arreglo['Id_Edad '];
	                                        $this->Fech_Nac_Edad = $arreglo['Fech_Nac_Edad'];
											$this->Id_Usuario  = $arreglo['Id_Usuario '];
										}else{
											echo"<script>alert('La edad consultada no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_edad WHERE Id_Edad ,Fech_Nac_Edad,Id_Usuario  = '$this->Id_Edad ',$this->Fech_Nac_Edad,$this->Id_Usuario '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('La edad ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_edad set Id_contacto='$this->Id_contacto',
											Id_Edad ='$this->Id_Edad '
											Fech_Nac_Edad='$this->Fech_Nac_Edad'
											Id_Usuario ='$this->Id_Usuario '";
																								
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('La edad fue modificada en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM Envio WHERE Id_Edad ,Fech_Nac_Edad,Id_Usuario  = $this->Id_Edad ',$this->Fech_Nac_Edad,$this->Id_Usuario '";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('La edad fue eliminada en el sistema')</script>";
										}else{
											echo"<script>alert('La edad no fue eliminada en el sistema por que tiene registros asociados')</script>";
										}
					}
					
					




                  }

            
?>