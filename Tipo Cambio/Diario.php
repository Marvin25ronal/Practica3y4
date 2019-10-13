<?php
class CambioDiario{
  public function Cambio(){
    $url='http://www.banguat.gob.gt/variables/ws/TipoCambio.asmx?wsdl';
    try {
      $soapClient=new SoapClient($url);
      $result=$soapClient->TipoCambioDia();
      //var_dump ($result);
      $array = json_decode(json_encode($result), True);
      $cam=$array['TipoCambioDiaResult']['CambioDolar']['VarDolar'];
      return $cam;
    } catch (Exception $e) {
      return $e->getMessage();
    }
  }
}
?>
