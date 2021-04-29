<?php
class tbl_detalles_venta{
					public $Id_Deta_Venta;
					public $Unid_Ventdida_Deta_Venta;
                    public $Precio_Unid_Deta_Venta;
                    public $Cost_Total_Venta_Deta_Venta;
                    public $Id_Factu;
                    public $Id_Inventario;
                    public $Id_Descuento;
               
		
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_Detalles_Venta WHERE Id_Deta_Venta, Unid_Ventdida_Deta_Venta,Precio_Unid_Deta_Venta,Cost_Total_Venta_Deta_Venta,Id_Factu,Id_Inventario,Id_Descuento = '$this->Id_Deta_Venta','$this->Unid_Ventdida_Deta_Venta','$this->Precio_Unid_Deta_Venta','$this->Cost_Total_Venta_Deta_Venta','$this->Id_Factu','$this->Id_Inventario','$this->Dias_Descuento','$this->Id_Descuento'";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Detalle venta ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_detalles_venta values('$this->Id_Deta_Venta','$this->Unid_Ventdida_Deta_Venta','$this->Precio_Unid_Deta_Venta','$this->Cost_Total_Venta_Deta_Venta','$this->Id_Factu','$this->Id_Inventario','$this->Dias_Descuento','$this->Id_Descuento')";
											mysqli_query($con,$guardar);
											echo "<script>alert('El detlle venta Fue Creado en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Deta_Venta,Unid_Ventdida_Deta_Venta,Precio_Unid_Deta_Venta,Cost_Total_Venta_Deta_Venta,Id_Factu,Id_Inventario,Id_Descuento FROM tbl_Detalles_Venta where Id_Deta_Venta,Unid_Ventdida_Deta_Venta,Precio_Unid_Deta_Venta,Cost_Total_Venta_Deta_Venta,Id_Factu,Id_Inventario,Id_Descuento = ''$this->Id_Descuento','$this->Dias_Descuento','$this->Tipo_Descuento','$this->Descripcion_Descuento','$this->Valor_Descuento'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Deta_Venta = $arreglo['Id_Deta_Venta'];
	                                        $this->Unid_Ventdida_Deta_Venta = $arreglo['Unid_Ventdida_Deta_Venta'];
											$this->Precio_Unid_Deta_Venta = $arreglo['Precio_Unid_Deta_Venta'];
                                            $this->Cost_Total_Venta_Deta_Venta = $arreglo['Cost_Total_Venta_Deta_Venta'];
                                            $this->Id_Factu = $arreglo['Id_Factu'];
                                            $this->Id_Inventario = $arreglo['Id_Inventario'];
                                            $this->Id_Descuento = $arreglo['Id_Descuento'];
										}else{
											echo"<script>alert('El detalle venta  consultado no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_Detalles_Venta WHERE Id_Deta_Venta,Unid_Ventdida_Deta_Venta,Precio_Unid_Deta_Venta,Cost_Total_Venta_Deta_Venta,Id_Factu,Id_Inventario,Id_Descuento = '$this->Id_Descuento','$this->Dias_Descuento','$this->Tipo_Descuento','$this->Descripcion_Descuento','$this->Valor_Descuento'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('El Detalle venta ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_detalles_venta set Id_Deta_Venta='$this->Id_Deta_Venta',
                                            Unid_Ventdida_Deta_Venta='$this->Unid_Ventdida_Deta_Venta'
                                            Precio_Unid_Deta_Venta='$this->Precio_Unid_Deta_Venta'
                                            Cost_Total_Venta_Deta_Venta='$this-> Cost_Total_Venta_Deta_Venta'
                                            Id_Factu='$this->Id_Factu'
                                            Id_Inventario='$this->Id_Inventario'
                                            Id_Descuento='$this->Id_Descuento;
																			where Id_Deta_Venta='$Id_Deta_Venta'";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('El detalle venta fue modificado en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_Detalles_Venta WHERE Id_Deta_Venta,Unid_Ventdida_Deta_Venta,Precio_Unid_Deta_Venta,Cost_Total_Venta_Deta_Venta,Id_Factu,Id_Inventario,Id_Descuento = $this->Id_Descuento','$this->Dias_Descuento','$this->Tipo_Descuento','$this->Descripcion_Descuento','$this->Valor_Descuento'";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('El detalle venta fue eliminado del sistema')</script>";
										}else{
											echo"<script>alert('El detalle venta no fue eliminado en el sistema por que tiene registros asociados')</script>";
										}
					}
					
			


                  }

        ?>