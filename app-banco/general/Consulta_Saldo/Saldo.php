<?php
	
	include_once (__DIR__."\..\BaseDatos\Consultas.php");
	function consultar_saldo($no_cuenta){
		$consulta = "Select * from cliente where no_cuenta='".$no_cuenta."';";
 		$respuesta = insertar($consulta);
 		$saldo = -1;
 		while ($res  = mysqli_fetch_array($respuesta)) {
    		$saldo = $res["no_cuenta"];
  		}	
  		return $saldo;
	}
?>