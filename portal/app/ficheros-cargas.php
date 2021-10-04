<?php
ob_start();
session_start();
require_once 'login-config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}

require_once 'templates/header.php';
$conn = mysqli_connect('localhost', 'root', '', 'portal');
$sql = "SELECT * FROM file";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

	<div class="content">
     	<div class="container">
		 <br><br>
			<div class="row">
				<div class="col-md-9" name="maincontent" id="maincontent">
					<div id="exercise" name="exercise" class="panel panel-info">
						<div class="panel-heading">
							<h5>Ficheros - Carga de ficheros</h5>
						</div>
							<div class="panel-body">
								<ul class="bottom-menu-iconic-list">
									<a href="index.php"><strong>Inicio</strong></a>	> <a href="#">Ficheros - Carga de ficheros</a>
								</ul>
	<div class="centrar"><br>
		<p>
			Seleccione el fichero a cargar.
		</p>
		<p>
			*Recuerde que la extensión del mismo debe ser .zip, .pdf o .docx.
		</p>
      <div class="row">
	  <strong>
	  <?php 
		if (isset($_POST['save'])) { // if save button on the form is clicked
			// name of the uploaded file
			$filename = $_FILES['myfile']['name'];

			// destination of the file on the server
			$destination = 'uploads/' . $filename;

			// get the file extension
			$extension = pathinfo($filename, PATHINFO_EXTENSION);

			// the physical file on a temporary uploads directory on the server
			$file = $_FILES['myfile']['tmp_name'];
			$size = $_FILES['myfile']['size'];

			if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
				echo "La extensión del fichero debe ser .zip, .pdf o .docx";
			} elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
				echo "El fichero es demasiado grande y no se pudo cargar.";
			} else {
				// move the uploaded (temporary) file to the specified destination
				if (move_uploaded_file($file, $destination)) {
					$sql = "INSERT INTO file (name, size, downloads, email) VALUES ('$filename', $size, 0, '".$_SESSION["email"]."')";
					if (mysqli_query($conn, $sql)) {
						echo "El fichero se ha cargado correctamente.";
					}
				} else {
					echo "La carga del fichero falló.";
				}
			}
		}
	  ?>
	</strong>
	    <form action="ficheros-cargas.php" method="post" enctype="multipart/form-data" >
          <input style="margin:auto" class="btn btn-embosed btn-primary" type="file" name="myfile">
          <button style="margin:10px 0px" class="btn btn-embosed btn-primary" type="submit" name="save">Cargar</button><br><br>
          
        </form>
      </div>
	</div>
	<a href="ficheros-descargas.php"><strong>Ir a Ficheros - Descarga de ficheros</strong></a>
</div>
</div>
</div>
</div>
</div>
</div>
<?php require_once 'templates/footer.php';?>