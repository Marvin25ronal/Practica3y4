<?php
	
	include_once (__DIR__."\..\BaseDatos\Consultas.php");
	function crear_usuario($nombres, $apellidos, $dpi, $saldo, $correo, $contrasena){
		$c = create_user($nombres, $apellidos, $dpi, $saldo, $correo, $contrasena); 
		if($c == ""){
			return true;
		}
		return false;
	}
	function create_user($nombres, $apellidos, $dpi, $saldo, $correo, $contrasena){
		if($dpi==null){
 			return "Error al registrarse, el campo 'DPI' debe llenarse obligatoriamente.";
 		} 
		$res = agregar_usuario($nombres, $apellidos, $dpi, $saldo, $correo, $contrasena);
		if($res == 1){
			return "";
		} 
		return "error";
	}
 	function agregar_usuario($nombres, $apellidos, $dpi, $saldo, $correo, $contrasena){
 		$consulta = "insert into cliente (nombres, apellidos, dpi, saldo, correo, contrasena) values ('".$nombres."', '".$apellidos."', ".$dpi.", ".$saldo.", '".$correo."', '".$contrasena."');";
 		return insertar($consulta);
 	}

 	/*
 	no_cuenta BIGINT PRIMARY KEY,
    nombres varchar(255),
    apellidos varchar(255),
    dpi bigint,
    saldo double,
    correo varchar(255),
    contrasena varchar(255)

 	$no_cuenta, $nombres, $apellidos, $dpi, $saldo, $correo, $contrasena
 	*/

?>