<?php
class tbl_Orden_Compra {
					public $Id_Orden_Com ;
					public $Cost_Productos_Orden_Com ;
                    public $Precio_UnId_Orden_Com ;
                    public $Uni_Vendidas_Orden_Com ;
                    public $Fecha_Ventas_Orden_Com ;
                    public $Hora_Venta_Orden_Com ;
               
		
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_Orden_Compra  WHERE Id_Orden_Com , Cost_Productos_Orden_Com ,Precio_UnId_Orden_Com ,Uni_Vendidas_Orden_Com ,Fecha_Ventas_Orden_Com ,Hora_Venta_Orden_Com  = '$this->Id_Orden_Com ','$this->Cost_Productos_Orden_Com ','$this->Precio_UnId_Orden_Com ','$this->Uni_Vendidas_Orden_Com ','$this->Fecha_Ventas_Orden_Com ','$this->Hora_Venta_Orden_Com ','$this->Dias_Descuento'";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('La orden de compra  ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into tbl_Orden_Compra values('$this->Id_Orden_Com ','$this->Cost_Productos_Orden_Com ','$this->Precio_UnId_Orden_Com ','$this->Uni_Vendidas_Orden_Com ','$this->Fecha_Ventas_Orden_Com ','$this->Hora_Venta_Orden_Com ','$this->Dias_Descuento')";
											mysqli_query($con,$guardar);
											echo "<script>alert('La orden de compra Fue Creada en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT Id_Orden_Com ,Cost_Productos_Orden_Com ,Precio_UnId_Orden_Com ,Uni_Vendidas_Orden_Com ,Fecha_Ventas_Orden_Com ,Hora_Venta_Orden_Com  FROM tbl_Orden_Compra  where Id_Orden_Com ,Cost_Productos_Orden_Com ,Precio_UnId_Orden_Com ,Uni_Vendidas_Orden_Com ,Fecha_Ventas_Orden_Com ,Hora_Venta_Orden_Com  = '$this->Dias_Descuento','$this->Tipo_Descuento','$this->Descripcion_Descuento','$this->Valor_Descuento'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->Id_Orden_Com  = $arreglo['Id_Orden_Com '];
	                                        $this->Cost_Productos_Orden_Com  = $arreglo['Cost_Productos_Orden_Com '];
											$this->Precio_UnId_Orden_Com  = $arreglo['Precio_UnId_Orden_Com '];
                                            $this->Uni_Vendidas_Orden_Com  = $arreglo['Uni_Vendidas_Orden_Com '];
                                            $this->Fecha_Ventas_Orden_Com  = $arreglo['Fecha_Ventas_Orden_Com '];
                                            $this->Hora_Venta_Orden_Com  = $arreglo['Hora_Venta_Orden_Com '];
                                           
										}else{
											echo"<script>alert('La orden de compra consultada no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_Orden_Compra  WHERE Id_Orden_Com ,Cost_Productos_Orden_Com ,Precio_UnId_Orden_Com ,Uni_Vendidas_Orden_Com ,Fecha_Ventas_Orden_Com ,Hora_Venta_Orden_Com = '$this->Dias_Descuento','$this->Tipo_Descuento','$this->Descripcion_Descuento','$this->Valor_Descuento'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('La orden de compra ya existe en el sistema')</script>";
										}else{
											$mod ="update tbl_Orden_Compra  set Id_Orden_Com ='$this->Id_Orden_Com ',
                                            Cost_Productos_Orden_Com ='$this->Cost_Productos_Orden_Com '
                                            Precio_UnId_Orden_Com ='$this->Precio_UnId_Orden_Com '
                                            Uni_Vendidas_Orden_Com ='$this-> Uni_Vendidas_Orden_Com '
                                            Fecha_Ventas_Orden_Com ='$this->Fecha_Ventas_Orden_Com '
                                            Hora_Venta_Orden_Com ='$this->Hora_Venta_Orden_Com ';
																			where Id_Orden_Com ='$Id_Orden_Com '";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('La orden de compra fue modificada en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_Orden_Compra  WHERE Id_Orden_Com ,Cost_Productos_Orden_Com ,Precio_UnId_Orden_Com ,Uni_Vendidas_Orden_Com ,Fecha_Ventas_Orden_Com ,Hora_Venta_Orden_Com ='$this->Dias_Descuento','$this->Tipo_Descuento','$this->Descripcion_Descuento','$this->Valor_Descuento'";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('La orden de compra fue eliminada del sistema')</script>";
										}else{
											echo"<script>alert('La orden de compra no fue eliminada en el sistema por que tiene registros asociados')</script>";
										}
					}
					
			


                  }

        ?>