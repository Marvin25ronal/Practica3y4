<?php
class CambioFechaInicial{
  public function Cambio($fecha){
    $fecha=date("d/m/Y", strtotime($fecha));;
  //  $fecha="14/10/2019";
    $url='http://www.banguat.gob.gt/variables/ws/TipoCambio.asmx?wsdl';
    try {
        $soapClient=new SoapClient($url);
        $params=['fechainit'=>$fecha];
        $result=$soapClient->TipoCambioFechaInicial($params);
        $array=json_decode(json_encode($result),True);
        return $cam=$array['TipoCambioFechaInicialResult']['Vars']['Var'];
    } catch (Exception $e) {
      return $e->getMessage();
    }
  }
}

 ?>
