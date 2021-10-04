<?php
$conn=mysqli_connect("localhost", "root", "", "portal");

if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

include ("dbconn.php");
?>

<?php require_once 'templates/header.php';?>
	<div class="content">
     	<div class="container">
		 <br><br>
			<div class="row">
				<div class="col-md-9" name="maincontent" id="maincontent">
					<div id="exercise" name="exercise" class="panel panel-info">
						<div class="panel-heading">
							<h5>Imputaciones</h5>
						</div>
						<div class="panel-body">
							<ul class="bottom-menu-iconic-list">
								<a href="index.php"><strong>Inicio</strong></a>	> <a href="#">Imputaciones</a>
							</ul>
							<br>
							<div class="centrar">
							<p>
								Acceda al Calendario para ver, añadir, modificar y eliminar imputaciones.
							</p>
								<a href="imputaciones/imputaciones-calendario.php" class="btn btn-embosed btn-primary">Ir al Calendario de imputaciones</a>
							</div>
						</div> <!--body panel main -->
					</div> <!--toc -->
				</div> <!-- end main content -->
			</div>
     	</div>
    </div> <!-- /container -->

<?php require_once 'templates/footer.php';?>