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
								<form method="get" action="">
									<div class="form-group">
										<label for="exampleInputEmail1">Cuenta: <?php echo $_SESSION["no_cuenta"]; ?></label>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Correo: <?php echo $_SESSION["correo"]; ?></label>
									</div>
									<button type="submit" name="logout" value="s" class="btn btn-primary">Logout</button>
								</form>
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
									<button type="submit" name="send" value="s" class="btn btn-primary">Submit</button>
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