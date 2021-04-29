<?php
class tbl_factura{
					public $Id_Factu ;
					public $Total_IVA_Factu ;
                    public $Precio_Total_Comp_Factu ;
                    public $Fech_Facturacion_Factu ;
                    public $Hora_Fact ;
                    public $Sub_Total_Factu ;
                    public $Id_Produc ;
               
		
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_factura WHERE Id_Factu , Total_IVA_Factu ,Precio_Total_Comp_Factu ,Fech_Facturacion_Factu ,Hora_Fact ,Sub_Total_Factu ,Id_Produc  = '$this->Id_Factu ','$this->Total_IVA_Factu ','$this->Precio_Total_Comp_Factu ','$this->Fech_Facturacion_Factu ','$this->Hora_Fact ','$this->Sub_Total_Factu ','$this->Dias_Descuento','$this->Id_Produc '";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('La Factura ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_factura values('$this->Id_Factu ','$this->Total_IVA_Factu ','$this->Precio_Total_Comp_Factu ','$this->Fech_Facturacion_Factu ','$this->Hora_Fact ','$this->Sub_Total_Factu ','$this->Dias_Descuento','$this->Id_Produc ')";
											mysqli_query($con,$guardar);
											echo "<script>alert(La Factura Fue Creada en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Factu ,Total_IVA_Factu ,Precio_Total_Comp_Factu ,Fech_Facturacion_Factu ,Hora_Fact ,Sub_Total_Factu ,Id_Produc  FROM tbl_factura where Id_Factu ,Total_IVA_Factu ,Precio_Total_Comp_Factu ,Fech_Facturacion_Factu ,Hora_Fact ,Sub_Total_Factu ,Id_Produc  = ''$this->Id_Produc ','$this->Dias_Descuento','$this->Tipo_Descuento','$this->Descripcion_Descuento','$this->Valor_Descuento'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Factu  = $arreglo['Id_Factu '];
	                                        $this->Total_IVA_Factu  = $arreglo['Total_IVA_Factu '];
											$this->Precio_Total_Comp_Factu  = $arreglo['Precio_Total_Comp_Factu '];
                                            $this->Fech_Facturacion_Factu  = $arreglo['Fech_Facturacion_Factu '];
                                            $this->Hora_Fact  = $arreglo['Hora_Fact '];
                                            $this->Sub_Total_Factu  = $arreglo['Sub_Total_Factu '];
                                            $this->Id_Produc  = $arreglo['Id_Produc '];
										}else{
											echo"<script>alert('La Factura consultada no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_factura WHERE Id_Factu ,Total_IVA_Factu ,Precio_Total_Comp_Factu ,Fech_Facturacion_Factu ,Hora_Fact ,Sub_Total_Factu ,Id_Produc  = '$this->Id_Produc ','$this->Dias_Descuento','$this->Tipo_Descuento','$this->Descripcion_Descuento','$this->Valor_Descuento'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('La Factura ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_factura set Id_Factu ='$this->Id_Factu ',
                                            Total_IVA_Factu ='$this->Total_IVA_Factu '
                                            Precio_Total_Comp_Factu ='$this->Precio_Total_Comp_Factu '
                                            Fech_Facturacion_Factu ='$this-> Fech_Facturacion_Factu '
                                            Hora_Fact ='$this->Hora_Fact '
                                            Sub_Total_Factu ='$this->Sub_Total_Factu '
                                            Id_Produc ='$this->Id_Produc ;
																			where Id_Factu ='$Id_Factu '";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('La Factura fue modificada en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_factura WHERE Id_Factu ,Total_IVA_Factu ,Precio_Total_Comp_Factu ,Fech_Facturacion_Factu ,Hora_Fact ,Sub_Total_Factu ,Id_Produc  = $this->Id_Produc ','$this->Dias_Descuento','$this->Tipo_Descuento','$this->Descripcion_Descuento','$this->Valor_Descuento'";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('La Factura fue eliminada del sistema')</script>";
										}else{
											echo"<script>alert('La Factura no fue eliminada en el sistema por que tiene registros asociados')</script>";
										}
					}
					
			


                  }

        ?>