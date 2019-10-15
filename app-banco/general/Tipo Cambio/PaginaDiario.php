<?php

include "arriba.php";
include_once "Diario.php";

?>
<div class="about-box">
  <div class="container">
    <div class="row">
      <br>
      <div class="container">
        <?php
        $cambio=new CambioDiario();
        $arreglo=$cambio->Cambio();
        $fecha=$arreglo['fecha'];
        $dcam=$arreglo['referencia'];
         ?>
        <h2>Cambio del Dia  </h2>
        <div class="panel-group">
          <div class="panel panel-success">
            <div class="panel-heading">Fecha " <?php echo $fecha; ?>  " </div>
            <div class="panel-body">
              <h1>Q. <?php echo $dcam; ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include "abajo.php";
?>
