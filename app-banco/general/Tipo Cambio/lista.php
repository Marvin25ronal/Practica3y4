<?php
include "arriba.php";
include "FechaInicial.php";
if(isset($_POST['fecha'])){
  $fecha=$_POST['fecha'];
  $cm=new CambioFechaInicial();
  $arreglo=$cm->Cambio($fecha);
  if(is_array($arreglo)){

  }else{
    $fallo=true;
  }
}
?>
<div class="about-box">
  <div class="container">
    <div class="row">
      <br>
      <br>
      <h2>Cambio por fecha <?php echo $fecha ?> </h2>
      <br>
      <?php
      if(isset($fallo)){
        $mensaje="";

        if($arreglo==1){
          $mensaje="No es una fecha";
        }else if($arreglo==2){
          $mensaje="La fecha es mayor y no hay registros";
        }
        printf("<div class=\"alert alert-danger\"><a href=\"#\" class=\"alert-link\">".$mensaje."</a></div>");
      }else{
        for($i=0;$i<count($arreglo);$i++){
          ?>
          <div class="panel-group">
            <div class="panel panel-success">
              <div class="panel-heading">Fecha " <?php echo $arreglo[$i]['fecha']; ?>  " </div>
              <div class="panel-body">
                <h1>Venta Q. <?php echo $arreglo[$i]['venta']; ?></h1>
                <h1>Compra Q. <?php echo $arreglo[$i]['compra']; ?></h1>
              </div>
            </div>
          </div>
          <?php
        }
      }
      ?>
    </div>
  </div>
</div>

<?php
include "abajo.php";
?>
