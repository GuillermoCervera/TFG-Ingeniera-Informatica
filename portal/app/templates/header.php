<?php 
ob_start();
session_start();
require_once 'login-config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Portal del Empleado</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="muni">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/flat-ui-pro.css" rel="stylesheet">
    <link rel="stylesheet" href="../formaciones/css/style.css" />
	<link rel="stylesheet" type="text/css" href="../formaciones/css/slick.css"/>
	<link rel="shortcut icon" type="gif" href="../img/icons8-usuario.gif"/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 	</head>
 	<body>
    <!-- Static navbar -->
	<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse"
					data-target=".navbar-collapse" class="navbar-toggle collapsed">
					<!--<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>-->
				</button>
			</div>
			<?php //$uri = end( explode("/",$_SERVER['REQUEST_URI']));
			$uris = explode("/",$_SERVER['REQUEST_URI']);
			$uri = end($uris);
			 ?>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li <?php if($uri == 'inicio.php') echo "class='active'"; ?>><a href="inicio.php">Inicio</a></li>
					<li <?php if($uri == 'formaciones.php') echo "class='active'"; ?>><a href="formaciones.php">Formaciones</a></li>
					<li <?php if($uri == 'imputaciones.php') echo "class='active'"; ?>><a href="imputaciones.php">Imputaciones</a></li>
					<li <?php if($uri == 'ficheros-cargas.php') echo "class='active'"; ?>><a href="ficheros-cargas.php">Ficheros</a></li>
					<li <?php if($uri == 'peticiones.php') echo "class='active'"; ?>><a href="peticiones.php">Peticiones</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							Hola,
						<?php if($_SESSION['logged_in']) { ?>
							<?php echo $_SESSION['name']; ?>
							<span class="caret"></span>
						</a>
						<ul role="menu" class="dropdown-menu">
							<li> <a href="usuario-cuenta.php">Mi cuenta</a> </li>
							<li class="divider"></li>
							<li> <a href="usuario-cerrar-sesion.php">Cerrar sesión</a> </li>
						</ul>
						<?php } ?>
					</li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>