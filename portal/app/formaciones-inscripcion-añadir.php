<?php

ob_start();
session_start();
require_once 'login-config.php'; 
if(!isset($_SESSION['logged_in'])){
	header('Location: index.php');
}

// Include config file
require_once "formaciones-config.php";

// Define variables and initialize with empty values
$name = $email = $code = "";
$name_err = $email_err = $code_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Por favor, introduzca el nombre de la formación.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Por favor, introduzca el nombre de la formación correctamente.";
    } else{
        $name = $input_name;
    }
    
    // Validate email
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Por favor, introduzca su email.";     
    } else{
        $email = $input_email;
    }
    
    // Validate code
    $input_code = trim($_POST["code"]);
    if(empty($input_code)){
        $code_err = "Por favor, introduzca su nivel.";     
    } elseif(!ctype_digit($input_code)){
        $code_err = "Por favor, introduzca un valor válido.";
    } else{
        $code = $input_code;
    }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($email_err) && empty($code_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO training (name, email, code) VALUES (?, ?, ?)";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_email, $param_code);
            
            // Set parameters
            $param_name = $name;
            $param_email = $email;
            $param_code = $code;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: formaciones.php");
                exit();
            } else{
                echo "Por favor, inténtelo de nuevo más tarde.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portal del Empleado</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="shortcut icon" type="gif" href="../img/icons8-usuario-50.png.gif"/>
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<?php require_once 'templates/header.php';?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9" name="maincontent" id="maincontent">
                <div id="exercise" name="exercise" class="panel panel-info">
                    <div class="panel-heading">
                        <h5>Formaciones - Inscripción a formación</h5>
                    </div>
                        <div class="panel-body">  
                            <ul class="bottom-menu-iconic-list">
                                <a href="inicio.php"><strong>Inicio</a> > <a href="formaciones.php">Formaciones</strong></a> > <a href="#">Formaciones - Inscripción a formación</a>
                            </ul>
                            <div class="col-md-8 centrar">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div style="display:none" class="form-group <?php echo (!empty($code_err)) ? 'has-error' : ''; ?>">
                                        <label>Código formación</label>
                                        <input type="text" name="code" class="form-control" value="1">
                                        <span class="help-block"><?php echo $code_err;?></span>
                                    </div>
                                    <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                                        <label>Nombre formación</label><br>
                                        <!-- <input type="text" name="name" class="form-control" value="<?php echo $name; ?>"> -->
                                        <select name="name" required>
                                            <option value="">Seleccione una formación</option>
                                            <option>Python</option>
                                            <option>JavaScript</option>
                                            <option>Java</option>
                                            <option>C</option>
                                            <option>PHP</option>
                                        </select>
                                    </div>
                                    <div style="display:none" class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                                        <label>Mi email registrado</label>
                                        <input name="email" class="form-control"value="<?php echo $_SESSION['email']; ?>">
                                        <span class="help-block"><?php echo $email_err;?></span>
                                    </div>
                                    <div class="centrar">
                                        <button type="submit" class="btn btn-primary" value="Inscribirme">Inscribirme</button>
                                        <a href="formaciones.php" class="btn btn-default">Cancelar</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'templates/footer.php'; ?>
</body>
</html>