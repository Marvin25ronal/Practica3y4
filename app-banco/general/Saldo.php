<?php
  include "arriba.php";
  include "Consulta_saldo/Saldo.php";
  function saldo(){
    $saldo = consultar_saldo($_SESSION["no_cuenta"]);
    if($saldo == -1){
        return "Cuenta inexistente";
    } else if($saldo == -2){
        return "No se pudo obtener el saldo";
    }
    return $saldo;
  }

?>
</br></br></br></br></br></br>
<div class="container">
    <div class="panel-group">
        <div class="panel panel-success">
            <div class="panel-heading">Información del Saldo de la cuenta</div>
                <div class="panel-body">
                <div class="form-group">
                    <p><label>Saldo actual:</label> <?php echo saldo(); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
  include "abajo.php";
?>