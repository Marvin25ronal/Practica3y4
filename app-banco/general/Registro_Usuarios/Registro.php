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
 		} else if($nombres==null){
 			return "Error al registrarse, el campo 'Nombres' debe llenarse obligatoriamente.";
 		} else if($apellidos==null){
 			return "Error al registrarse, el campo 'Apellidos' debe llenarse obligatoriamente.";
 		} else if($saldo==null){
 			return "Error al registrarse, el campo 'Saldo inicial' debe llenarse obligatoriamente.";
 		} else if($correo==null){
 			return "Error al registrarse, el campo 'Correo' debe llenarse obligatoriamente.";
 		}
 		if(!is_numeric($dpi)){
 			return "Error en el campo 'DPI', el DPI solo puede contener números.";
 		}
 		if(!is_numeric($saldo)){
 			return "Error en el campo 'Saldo inicial', el saldo inicial solo puede contener números.";
 		}
		$res = agregar_usuario($nombres, $apellidos, $dpi, $saldo, $correo, $contrasena);
		if($res == 1){
			return "";
		} 
		return "Error al registrarse, verifique los datos ingresados.";
	}
 	function agregar_usuario($nombres, $apellidos, $dpi, $saldo, $correo, $contrasena){
 		$consulta = "insert into cliente (nombres, apellidos, dpi, saldo, correo, contrasena) values ('".$nombres."', '".$apellidos."', '".$dpi."', '".$saldo."', '".$correo."', '".$contrasena."');";
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