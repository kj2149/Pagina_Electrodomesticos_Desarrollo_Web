<?php
class tbl_CompraCliente{
					public $codigoCompracliente;
					public $cantidad;
					public $descuento;
					public $IVA;
					public $garantia;
					public $precioTotal;
					public $fechaCompra;
					public $codigoRol;
					
					function agregar(){
										$c = new Conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_compraCliente WHERE cantidad= '$this->cantidad'";
										$resultado = mysqli_query($con,$pregunta);
										if(mysqli_fetch_array($resultado)){
											echo "<script>alert('El Usuario ya existe en el Sistema')</script>";
										}else{
											$guardar = "insert into compraCliente values('$this->codigoCompracliente','$this->cantidad','$this->descuento','$this->IVA','$this->garantia','$this->precioTotal','$this->fechaCompra')";
											mysqli_query($con,$guardar);
											echo "<script>alert('La compra del cliente Fue Creada en el Sistema')</script>";
										
										}	
					
					}

                    function consultas(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT codigoCompracliente, cantidad, descuento, IVA, garantia, precioTotal, fechaCompra  FROM tbl_compraCliente where cantidad = '$this->cantidad'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											$this->codigoCompracliente = $arreglo['codigoCompracliente'];
	                                        $this->cantidad = $arreglo['cantidad'];
											$this->descuento = $arreglo['descuento'];
											$this->IVA = $arreglo['IVA'];
											$this->garantia = $arreglo['garantia'];
											$this->precioTotal = $arreglo['precioTotal'];
											$this->fechaCompra = $arreglo['fechaCompra'];

										}else{
											echo"<script>alert('La compra del cliente consultada no existe en sistema')</script>";
										}	
					}
					
					
					function actualizar(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$pregunta ="SELECT * FROM tbl_compraCliente WHERE cantidad = '$this->cantidad'";
										$resultado = mysqli_query($con,$pregunta);
										if($arreglo=mysqli_fetch_array($resultado)){
											echo "<script>alert('La compra del cliente ya existe en el sistema')</script>";
										}else{
											$mod ="update compraCliente set codigoCompracliente='$this->codigoCompracliente',
											                                cantidad='$this->cantidad'
																			descuento='$this->descuento'
																			IVA'$this->IVA'
																			garantia'$this->garantia'
																			precioTotal'$this->precioTotal'
																			fechaCompra'$this->fechaCompra'
																			where codigoCompracliente='$this->codigoCompracliente'";
																			
											echo $mod;
											mysqli_query($con,$mod);
											echo "<script>alert('La compra del cliente fue modificada en el sistema')</script>";
										    }	
					}
					
					
					function estado(){
						                $c = new conexion();
										$con = $c->conectarServidor();
										$ejecutar =" DELETE FROM tbl_CompraCliente WHERE codigoCompracliente = '$this->codigoCompracliente'";
										if(mysqli_query($con, $ejecutar)) {
											echo "<script>alert('La compra del cliente fue eliminada del sistema')</script>";
										}else{
											echo"<script>alert('La compra del cliente no fue eliminada en el sistema por que tiene registros asociados')</script>";
										}
					}	



                  }

            
?>