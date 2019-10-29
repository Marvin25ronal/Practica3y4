<?php
class obtenerDatos{
  function obtenerDatos($id){
    $var="select * from cliente where no_cuenta=".$id.";";
    $consulta=query($var);
    if($consulta=="No hay servidor"||$consulta=="no hay bd"||$consulta=="algo salio mal"){
      return -1;
    }
    $arreglo=1;
    while($res=mysqli_fetch_array($consulta)){
      $arreglo=array(
        "no_cuenta"=>$res["no_cuenta"],
        "nombres"=>$res["nombres"],
        "apellido"=>$res["apellidos"],
        "dpi"=>$res["dpi"],
        "saldo"=>$res["saldo"],
        "correo"=>$res["correo"],
        "contrasena"=>$res["contrasena"]);
      }
      return $arreglo;
    }
}


 ?>
