<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>Banco</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="./images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="./css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="./style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="./css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="./css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="./css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="./css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="./js/modernizer.js"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="realestate_version">

  <!-- LOADER -->
  <div id="preloader">
    <span class="loader"><span class="loader-inner"></span></span>
  </div><!-- end loader -->
  <!-- END LOADER -->

  <header class="header header_style_01">
    <nav class="megamenu navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <h1>BANCO USAC</h1>
          <?php
              if (isset($_SESSION["no_cuenta"]) && $_SESSION["no_cuenta"] != "") {
                echo "No. Cuenta: " . $_SESSION["no_cuenta"] . "<br/>" . "Correo: " .  $_SESSION["correo"];
              }
              ?>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./index.php">Home</a></li>

            <li><a href="./Tipo Cambio/PaginaDiario.php">Cambio Diario</a></li>
            <li> <a href="./Tipo Cambio/PaginaFecha.php">Cambio Fecha inicial</a> </li>
           
            
           
            

            <li>

              <?php
              if (isset($_SESSION["no_cuenta"]) && $_SESSION["no_cuenta"] != "") {
                echo ' <a href="./Saldo.php">Saldo</a> </li><li>';
                echo ' <a href="./Transferencia.php">Transferencia</a> </li><li>';
                echo "<a href='index.php?logout=s'>Logout</a>";
              }else{
                echo '<a href="./Registro.php">Registrarse</a>';
              }
              ?>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>

  </div><!-- end section -->