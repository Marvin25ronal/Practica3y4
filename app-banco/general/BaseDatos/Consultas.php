<?php
//si es fallo quiere decir que la sintaxis esta mala o que no se puede insertar.
function query($query)
{
  include "Contrasena.php";
  // creación de la conexión a la base de datos con mysql_connect()
  $conexion = mysqli_connect($servidor, $usuario, $password) or die("NO hay servidor");

  // Selección del a base de datos a utilizar
  $db = mysqli_select_db($conexion, $basededatos) or die("no hay bd");
  $resultado = mysqli_query($conexion, $query) or die("algo salio mal");
  mysqli_close($conexion);
  return  $resultado;
}

function insertar($query)
{
  include "Contrasena.php";
  $resultado = "error";
  try {
    $conexion = mysqli_connect($servidor, $usuario, $password);
    $db = mysqli_select_db($conexion, $basededatos);
    $resultado = mysqli_query($conexion, $query);
  } catch (Exception $e) {
    return "error";
  }
  return  $resultado;
}


function login($user, $contra)
{
  $var = sprintf("select * from cliente where no_cuenta = %d and contrasena = '%s';", $user, $contra);
  $consulta = query($var);
  while ($res  = mysqli_fetch_array($consulta)) {
    try {
      $_SESSION["no_cuenta"] = $res["no_cuenta"];
      $_SESSION["correo"] = $res["correo"];
    } catch (Exception $e) { }
    return 1;
  }
  return 0;
}

function pruebaTrans($c1, $c2, $cantidad)
{
  if ((!(is_numeric($c1) && is_numeric($c2)))) {
    return 3;   //ya hay cuenta invalida.
  } else if ($c1 < 0 || $c2 < 0) { 
    return 3;
  }
}

function transferencia($c1, $c2, $cantidad)
{
  if ($c1 == 0 || $c2 == 0) {
    return pruebaTrans($c1, $c2, $cantidad);
  }
}
