<?php 
ob_start();
session_start();
require_once 'login-config.php'; 
if(!empty($_POST)){
	try {
		$user_obj = new Cl_User();
		$data = $user_obj->login($_POST);
		if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
			header('Location: inicio.php');
		}
	} catch (Exception $e) {
		$error = $e->getMessage();
	}
}
//print_r($_SESSION);
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
	header('Location: inicio.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<link rel="shortcut icon" type="gif" href="../img/icons8-usuario-50.png.gif"/>
  </head>
  <body>
	<div class="container">
		<div class="login-form">
			<?php require_once 'templates/message.php';?>
			<div class="form-header">
				<i class="fa fa-user"></i>
			</div>
			<form id="login-form" method="post" class="form-signin" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<input name="email" id="email" type="email" class="form-control" placeholder="Email" autofocus> 
				<input name="password" id="password" type="password" class="form-control" placeholder="Contraseña"> 
				<button class="btn btn-block bt-login" type="submit" id="submit_btn" data-loading-text="Iniciando...">Iniciar sesión</button>
			</form>
			<div class="form-footer">
				<div class="row">
					<!--<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="forget_password.php"> Olvidó su contraseña? </a>
					</div>-->
					<div class="col-xs-4 col-sm-4 col-md-4">
						<i class="fa fa-check"></i>
						<a href="usuario-registro.php">Registrarse</a>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8">
						<i class="fa fa-lock"></i>
						<a href="#"> portaldelempleado@email.com </a>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /container -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/usuario-login.js"></script>
  </body>
</html>
<?php ob_end_flush(); ?>