<?php
  include "arriba.php";
  include "Registro_Usuarios/Registro.php";
  $alerta_tipo = "\"hidden\"";
  $alerta = "";
  if(isset($_POST["accept"])){
  		$nombres = $_POST["nombres"];
		$apellidos = $_POST["apellidos"];
		$dpi = $_POST["dpi"];
		$saldo = $_POST["saldo"];
		$correo = $_POST["correo"];
		$contrasena = $_POST["contrasena"];
		$retorno = create_user($nombres, $apellidos, $dpi, $saldo, $correo, $contrasena);
        if($retorno!=""){
            $alerta = $retorno;
            $alerta_tipo = "\"alert alert-danger\"";
        } else {
            $cuenta = insertar("select no_cuenta from cliente order by no_cuenta desc limit 1");
            $no_cuenta = '';
            while ($res  = mysqli_fetch_array($cuenta)) {
                $no_cuenta = $res['no_cuenta'];
            }
            ?>
            <script type="text/javascript">
                var no_cuenta = <?php echo $no_cuenta ?>;
                alert("Bienvenido! Su número de cuenta es: "+no_cuenta+"\nYa puede iniciar sesión!")
                location.href="index.php";
            </script>
            <?php
        }
  }
?>

<div class="col-md-8 col-md-offset-2">
    <p style="text-align: center; font-size: 50px;"><span style="color: #ffffff;"><strong>Agregar nuevo mec&aacute;nico</strong></span></p>
<!-- Inicio -->
<div id="page-wrapper" >
            <div id="page-inner">
                 <!-- /. ROW  -->
                 <hr />
               <div class="row" style="float: center;">
                    <!-- Form Elements -->
                    <form role="form" method="post"> 
                    <div class= <?php echo $alerta_tipo; ?> >
                        <?php echo $alerta; ?>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registrar usuario
                        </div>
                        <div class="panel-group">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-4">
                                    <h3>Datos para el nuevo usuario</h3>
                                    <!-- <form role="form"> -->
                                        <div class="form-group">
                                            <label>DPI</label>
                                            <input class="form-control" name = "dpi"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input class="form-control" name = "nombres"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <input class="form-control" name = "apellidos"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Saldo incial</label>
                                            <input class="form-control" name = "saldo"/>
                                        </div>
                                        <hr/>
                                        <h4>Datos para el sistema</h4>
                                        <div class="form-group">
                                            <label>Correo</label>
                                            <input class="form-control" name = "correo"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña</label>
                                            <input class="form-control" name = "contrasena"/>
                                        </div>
                                        <button type="reset" name="cancel" class="btn btn-default">Cancelar</button>
                                        <button type="submit" name="accept" class="btn btn-danger">Registrarse</button>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </form>
                     <!-- End Form Elements -->
                </div>
            </div>
            </div>
<!-- Fin -->
</div>

<?php
  include "abajo.php";
?>