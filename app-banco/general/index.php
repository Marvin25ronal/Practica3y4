<?php
session_start();
include_once "./BaseDatos/Consultas.php";

$info = 2;
if (isset($_GET["send"])) {
	$info = login($_GET["cuenta"], $_GET["pass"]);
} else if (isset($_GET["logout"])) {
	$_SESSION["correo"] = "";
	$_SESSION["no_cuenta"] = "";
}




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

			if ($info == 1) {
				echo "login exitoso";
				$arreglo=obtenerDatos($_SESSION["no_cuenta"]);
			} else if ($info == 0) {
				echo "login fallido";
			}
			?>
			<div class="container">
				<div class="panel-group">
					<div class="panel panel-success">

						<?php if (isset($_SESSION["no_cuenta"]) && $_SESSION["no_cuenta"] != "") {
							?>

							<div class="panel-heading">Informacion</div>
							<div class="panel-body">
								<h3>Nombres</h3>
								<label><?php echo $arreglo["nombres"]; ?></label>
								<br>
								<br>
								<h3>Apellidos</h3>
								<label><?php echo $arreglo["apellido"]; ?></label>
								<br>
								<br>
								<h3>No DPI</h3>
								<label><?php echo $arreglo["dpi"]; ?></label>
								<br>
								<br>
								<h3>Saldo de la cuenta</h3>
								<label>Q.<?php echo $arreglo["saldo"]; ?></label>
								<br>
								<br>
								<h3>No Cuenta</h3>
								<label><?php echo $arreglo["no_cuenta"]; ?></label>
								<br>
								<br>
								<h1>Correo</h1>
								<label><?php echo $arreglo["correo"]; ?></label>
							</div>


						<?php
						} else {
							?>
							<div class="panel-heading">Login</div>
							<div class="panel-body">
								<form method="get" action="">
									<div class="form-group">
										<label for="exampleInputEmail1">Cuenta</label>
										<input type="number" step="1" class="form-control" name="cuenta" aria-describedby="emailHelp" placeholder="Ingrese su numero de cuenta">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<input type="password" class="form-control" name="pass" placeholder="Password">
									</div>
									<button type="submit" name="send" value="s" class="btn btn-primary">Login</button>
								</form>
							</div>
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
