<?php
session_start();
include_once "./BaseDatos/Consultas.php";

$info = 2;



include "arriba.php";




?>
<div class="about-box">
    <div class="container">


        <br />
        <div class="row">
            <br />
            <br />
            <br />
            <br />
            <?php


            if (isset($_SESSION["no_cuenta"]) && $_SESSION["no_cuenta"] != "") {
                if (isset($_GET["send"])) {
                    //    $info = login($_GET["cuenta"], $_GET["pass"]);
                    $var = transferencia($_SESSION["no_cuenta"], $_GET["cuenta"], $_GET["monto"]);
                    
                    
                    if($var == 1){
                        echo "<h1>Transferencia exitosa</h1>";
                    }else if($var == 2){
                        echo "<h1>No se pueden transferir numeros negativos</h1>";

                    }else if($var == 3){
                        echo "<h1>Numero de cuenta invalida</h1>";

                    }else if($var == 4){
                        echo "<h1>Fondos insufisientes</h1>";
                    }else if($var == 5){
                        echo "<h1>No puedes transferirte a ti mismo</h1>";
                    }

                }
            }

            if ($info == 1) {
                echo "login exitoso";
            } else if ($info == 0) {
                echo "login fallido";
            }
            ?>
            <div class="container">
                <div class="panel-group">
                    <div class="panel panel-success">

                        <?php if (isset($_SESSION["no_cuenta"]) && $_SESSION["no_cuenta"] != "") {
                            ?>

                            <div class="panel-heading">
                                <h2>Transferencia</h2>
                            </div>
                            <div class="panel-body">



                                <form method="get" action="">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Cuenta</label>


                                        <select name="cuenta" class="form-control">

                                            <?php

                                                $consulta = query("select * from cliente;");
                                                while ($res  = mysqli_fetch_array($consulta)) {
                                                    if ($res["no_cuenta"] == 0) {
                                                        continue;
                                                    }
                                                    echo "<option>" . $res["no_cuenta"] . "</option>";
                                                }


                                                ?>

                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Monto</label>
                                        <input type="number" class="form-control" name="monto">
                                    </div>
                                    <button type="submit" name="send" value="s" class="btn btn-primary">Realizar transferencia</button>


                                </form>



                            </div>


                        <?php
                        } else {
                            ?>
                            <h1> Debes de estar logeado para tener acceso. </h1>
                        <?php } ?>
                    </div>
                </div>

                <br />
            </div>
        </div>
    </div>

    <?php
    include "abajo.php";
    ?>