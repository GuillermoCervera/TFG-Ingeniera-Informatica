<?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "formaciones-config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM training WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: formaciones.php");
            exit();
        } else{
            echo "Por favor, inténtelo de nuevo más tarde.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: formaciones-inscripcion-error.php");
        exit();
    }
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
        <br><br>
        <div class="row">
            <div class="col-md-9" name="maincontent" id="maincontent">
                <div id="exercise" name="exercise" class="panel panel-info">
                    <div class="panel-heading">
                    <h5>Formaciones - Eliminación inscripción a formación</h5>
                    </div>
                        <div class="panel-body">  
                            <ul class="bottom-menu-iconic-list">
                            <a href="inicio.php"><strong>Inicio</a> > <a href="formaciones.php">Formaciones</strong></a> > <a href="#">Formaciones - Eliminación inscripción a formación</a>
                            </ul>
                            <br>
                            <div class="col-md-8">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="alert alert-danger fade in centrar">
                                        <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                                        <p>¿Seguro que desea eliminar la inscripción a esta formación?</p><br>
                                        <p>
                                            <button type="submit" value="Si" class="btn btn-danger">Sí</button>
                                            <a href="formaciones.php" class="btn btn-default">No</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>        
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'templates/footer.php';?>
</body>
</html>