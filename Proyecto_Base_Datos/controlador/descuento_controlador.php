<?php
class tbl_sescuento{
					public $Id_Descuento;
					public $Dias_Descuento;
                    public $Tipo_Descuento;
                    public $Descripcion_Descuento;
                    public $Valor_Descuento;
               
		
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_Descuento WHERE Id_Descuento,Dias_Descuento,Tipo_Descuento,Descripcion_Descuento,Valor_Descuento, = '$this->Id_Descuento','$this->Dias_Descuento','$this->Tipo_Descuento','$this->Descripcion_Descuento','$this->Valor_Descuento';
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Descuento ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into Departamento values('$this->Id_Descuento','$this->Dias_Descuento','$this->Tipo_Descuento','$this->Descripcion_Descuento','$this->Valor_Descuento')";
											mysqli_query($con,$guardar);
											echo "<script>alert('Descuento Fue Creado en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Descuento,Dias_Descuento,Tipo_Descuento,Descripcion_Descuento,Valor_Descuento FROM tbl_Descuento where Id_Descuento,Dias_Descuento,Tipo_Descuento,Descripcion_Descuento,Valor_Descuento = ''$this->Id_Descuento','$this->Dias_Descuento','$this->Tipo_Descuento','$this->Descripcion_Descuento','$this->Valor_Descuento'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Descuento = $arreglo['Id_Descuento'];
	                                        $this->Dias_Descuento = $arreglo['Dias_Descuento'];
											$this->Tipo_Descuento = $arreglo['Tipo_Descuento'];
                                            $this->Tipo_Descripcion_Descuento = $arreglo['Descripcion_Descuento'];
                                            $this->Tipo_Valor_Descuento = $arreglo['Valor_Descuento'];
										}else{
											echo"<script>alert('El Descuento consultado no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_Descuento WHERE Id_Descuento,Dias_Descuento,Tipo_Descuento,Descripcion_Descuento,Valor_Descuento = '$this->Id_Descuento','$this->Dias_Descuento','$this->Tipo_Descuento','$this->Descripcion_Descuento','$this->Valor_Descuento'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('El Descuento ya existe en el sistema')</script>";
										}else{
											$mod ="update ciudad set Id_Descuento='$this->Id_Descuento',
                                            Dias_Descuento='$this->Dias_Descuento'
                                            Tipo_Descuento='$this->Tipo_Descuento'
                                            Descripcion_Descuento='$this-> Descripcion_Descuento'
                                            Valor_Descuento='$this->Valor_Descuento;
																			where Id_Descuento='$this->Id_Descuento'";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('El descuento fue modificado en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_Descuento WHERE Id_Descuento,Dias_Descuento,Tipo_Descuento,Descripcion_Descuento,Valor_Descuento = $this->Id_Descuento','$this->Dias_Descuento','$this->Tipo_Descuento','$this->Descripcion_Descuento','$this->Valor_Descuento'";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('El descuento fue eliminado del sistema')</script>";
										}else{
											echo"<script>alert('El descuento no fue eliminado en el sistema por que tiene registros asociados')</script>";
										}
					}
					
			


                  }

        ?>



                 

            