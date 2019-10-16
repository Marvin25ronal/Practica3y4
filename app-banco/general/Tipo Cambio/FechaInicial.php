<?php
class CambioFechaInicial{
  public function Cambio($fecha){
    if(date('Y-m-d',strtotime($fecha))==$fecha){

      $convertida=date("d/m/Y", strtotime($fecha));
      //echo $fecha;
      //$fecha="14/10/2019";
      $hoy=date("Y-m-d");
      echo $hoy;
      if($fecha>$hoy){
        echo "etro";
        return 2;
      }
      $url='http://www.banguat.gob.gt/variables/ws/TipoCambio.asmx?wsdl';
      try {
        $soapClient=new SoapClient($url);
        $params=['fechainit'=>$convertida];
        $result=$soapClient->TipoCambioFechaInicial($params);
        $array=json_decode(json_encode($result),True);
        return $cam=$array['TipoCambioFechaInicialResult']['Vars']['Var'];
      } catch (Exception $e) {
        return $e->getMessage();
      }
    }else{
      //error que no es fecha
      return 1;
    }

  }
}
?>
