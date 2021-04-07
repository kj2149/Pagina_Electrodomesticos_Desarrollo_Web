<?php
class tbl_CompraProveedor{
					public $codigoCompraprovedor;
					public $cantidadCompraProveedor;
					public $precioTotal;
					public $fechaCompraProveedor;
					public $codigoRol;
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_compraProveedor WHERE cantidadCompraProveedor= '$this->cantidadCompraProveedor'";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Usuario ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into compraProveedor values('$this->codigoCompraprovedor','$this->cantidadCompraProveedor','$this->precioTotal','$this->fechaCompraProveedor')";
											mysqli_query($con,$guardar);
											echo "<script>alert('La compra proveedor Fue Creada en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT codigoCompraprovedor, cantidadCompraProveedor, precioTotal, fechaCompraProveedor FROM tbl_compraProveedor where cantidadCompraProveedor = '$this->cantidadCompraProveedor'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->codigoCompraprovedor = $arreglo['codigoCompraprovedor'];
	                                        $this->cantidadCompraProveedor = $arreglo['cantidadCompraProveedor'];
											$this->precioTotal = $arreglo['precioTotal'];
											$this->fechaCompraProveedor = $arreglo['fechaCompraProveedor'];	
										}else{
											echo"<script>alert('La compra proveedor consultada no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_compraProveedor WHERE cantidadCompraProveedor = '$this->cantidadCompraProveedor'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('La compra proveedor  ya existe en el sistema')</script>";
										}else{
											$mod ="update compraProveedor set codigoCompraprovedor='$this->codigoCompraprovedor',
											                                cantidadCompraProveedor='$this->cantidadCompraProveedor'
																			precioTotal='$this->precioTotal'
																			fechaCompraProveedor'$this->fechaCompraProveedor'
																			where codigoCompraprovedor='$this->codigoCompraprovedor'";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('La compra proveedor fue modificada en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_compraProveedor WHERE codigoCompraprovedor = '$this->codigoCompraprovedor'";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('La compra proveedor fue eliminada del sistema')</script>";
										}else{
											echo"<script>alert('La compra proveedor no fue eliminada en el sistema por que tiene registros asociados')</script>";
										}
					}
									

                  }

            
?>