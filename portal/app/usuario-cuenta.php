<?php
require_once 'templates/header.php';

if( !empty($_POST)){
	try {
		$user_obj = new Cl_User();
		$data = $user_obj->account($_POST);
		if($data)$success = PASSOWRD_CHANAGE_SUCCESS;
	} catch (Exception $e) {
		$error = $e->getMessage();
	} 
}
?>

	<div class="content">
     	<div class="container">
		 <br><br>
            <div class="row">
     		<div class="col-md-9" name="maincontent" id="maincontent">
				<?php require_once 'templates/message.php';?>
				<div id="exercise" name="exercise" class="panel panel-info">
				<div class="panel-heading">
					<h5>Mi cuenta</h5>
				</div>
				<div class="panel-body">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="account-form" method="post" class="form-horizontal myaccount" role="form">
					<div class="form-group">
						<span for="inputEmail3" class="col-sm-3 control-span">Nombre</span>
						<div class="col-sm-9 centrar">
							<p> <?php echo $_SESSION['name']; ?> </p>
						</div>
					</div>
					<div class="form-group">
						<span for="inputPassword3" class="col-sm-3 control-span">Email</span>
						<div class="col-sm-9 centrar">
							<p> <?php echo $_SESSION['email']; ?> </p>
						</div>
					</div>
					<hr>
					<!-- <div class="form-group">
						<span for="inputPassword3" class="col-sm-4 control-span">Contraseña actual</span>
						<div class="col-sm-8">
							<input name="old_password" id="old_password" type="password">
							<span class="help-block"></span>
						</div>
					</div> -->
					<div class="form-group">
						<span for="inputPassword3" class="col-sm-3 control-span">Nueva contraseña</span>
						<div class="col-sm-9 centrar">
							<input name="password" id="password" type="password">
							<span class="help-block"></span>
						</div>
					</div>
					<div class="form-group">
						<span for="inputPassword3" class="col-sm-3 control-span">Confirmar contraseña</span>
						<div class="col-sm-9 centrar">
							<input name="confirm_password" id="confirm_password" type="password">
							<span class="help-block"></span>
						</div>
					</div>
					<input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
					<input type="hidden" id="email" value="<?php echo $_SESSION['email']; ?>" />
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9 centrar">
							<button type="submit" class="btn btn-default" id="submit_btn" data-loading-text="Cambiando contraseña...">Modificar contraseña</button>
						</div>
					</div>
				</form>
				</div>
			</div>
			</div>
			</div>    		
     	</div>
    </div> <!-- /container -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/usuario-cuenta.js"></script>    
<?php require_once 'templates/footer.php';?>