<?php
class tbl_inventario{
					public $Id_Inventario ;
					public $Fech_Entrada_Inventario  ;
					public $Fech_Salida_Inventario ;
					public $Hora_Entrada_Inventario ;
					public $Hora_salida_Inventario ;
					public $Canti_Inicial_Dia_Inventario  ;
					public $Canti_Vendida_Dia_Inventario  ;
					public $Canti_Disponible_Dia_Inventario   ;

					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_inventario WHERE Fech_Entrada_Inventario  = '$this->Fech_Entrada_Inventario  '";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Usuario ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_inventario values('$this->Id_Inventario ','$this->Fech_Entrada_Inventario  ','$this->Fech_Salida_Inventario ','$this->Hora_Entrada_Inventario ','$this->Hora_salida_Inventario ','$this->Canti_Inicial_Dia_Inventario  ','$this->Canti_Vendida_Dia_Inventario','$this->Canti_Disponible_Dia_Inventario')";
											mysqli_query($con,$guardar);
											echo "<script>alert('El inventario Fue Creado en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Inventario , Fech_Entrada_Inventario  , Fech_Salida_Inventario , Hora_Entrada_Inventario , Hora_salida_Inventario , Canti_Inicial_Dia_Inventario  , Canti_Vendida_Dia_Inventario, Canti_Disponible_Dia_Inventario      FROM tbl_inventario where Fech_Entrada_Inventario   = '$this->Fech_Entrada_Inventario  '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Inventario  = $arreglo['Id_Inventario '];
	                                        $this->Fech_Entrada_Inventario   = $arreglo['Fech_Entrada_Inventario  '];
											$this->Fech_Salida_Inventario  = $arreglo['Fech_Salida_Inventario '];
											$this->Hora_Entrada_Inventario  = $arreglo['Hora_Entrada_Inventario '];
											$this->Hora_salida_Inventario  = $arreglo['Hora_salida_Inventario '];
											$this->Canti_Inicial_Dia_Inventario   = $arreglo['Canti_Inicial_Dia_Inventario  '];
											$this->Canti_Vendida_Dia_Inventario    = $arreglo['Canti_Vendida_Dia_Inventario   '];
											$this->Canti_Disponible_Dia_Inventario    = $arreglo['Canti_Disponible_Dia_Inventario   '];


										}else{
											echo"<script>alert('El inventario consultado no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_inventario WHERE Fech_Entrada_Inventario   = '$this->Fech_Entrada_Inventario  '";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('El inventario ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_inventario set Id_Inventario ='$this->Id_Inventario ',
											                                Fech_Entrada_Inventario  ='$this->Fech_Entrada_Inventario  '
																			Fech_Salida_Inventario ='$this->Fech_Salida_Inventario '
																			Hora_Entrada_Inventario '$this->Hora_Entrada_Inventario '
																			Hora_salida_Inventario '$this->Hora_salida_Inventario '
																			Canti_Inicial_Dia_Inventario  '$this->Canti_Inicial_Dia_Inventario  '
																			Canti_Vendida_Dia_Inventario   '$this->Canti_Vendida_Dia_Inventario  
																			Canti_Disponible_Dia_Inventario   '$this->Canti_Disponible_Dia_Inventario   '
																			where Id_Inventario ='$this->Id_Inventario '";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('El inventario fue modificado en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_inventario WHERE Id_Inventario  = '$this->Id_Inventario '";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('El inventario fue eliminado del sistema')</script>";
										}else{
											echo"<script>alert('El inventariono fue eliminado en el sistema por que tiene registros asociados')</script>";
										}
					}	



                  }

            
?>