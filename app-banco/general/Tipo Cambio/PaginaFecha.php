<?php
include "arriba.php";
?>
<div class="about-box">
  <div class="container">
    <div class="row">
      <br>
      <div class="container">
        <h2>Cambio por fechas  </h2>
        <div class="panel-group">
          <div class="panel panel-success">
            <div class="panel-heading">Seleccione la fecha inicial </div>
            <div class="panel-body">
              <form class="" action="lista.php" method="post">
                <input class="" type="date" id="fecha">
                <br>
                <br>
                <input type="submit" name="submit" value="Consultar" class="btn btn-success">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include "abajo.php"
?>
