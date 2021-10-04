<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portal del Empleado</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="muni">
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/flat-ui-pro.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets-formaciones/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../assets-formaciones/css/slick.css"/>
    <link rel="shortcut icon" type="gif" href="../img/icons8-usuario-50.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
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
                  <h5>Formaciones</h5>
                </div>
                  <div class="panel-body">  
                      <ul class="bottom-menu-iconic-list">
                      <a href="index.php"><strong>Inicio</strong></a> > <a href="#">Formaciones</a>
                      </ul>
                      <br>
                  </div>
                  <div class="carousel">
                    <div class="carousel-view clearfix">
                      <div class="box">
                          <p>
                              <img src="../assets-formaciones/images/Python-logo-notext.svg" style="width: 170px; height: 160px;" /><br>
                              Python<br>
                              <span>Python es un lenguaje de programación simple, 
                              pero increíblemente poderoso. Este curso le enseña 
                              los conceptos básicos de la sintaxis, las funciones 
                              y la creación de aplicaciones web.</span>
                          </p>
                      </div>
                      <div class="box">
                          <p>
                              <img src="../assets-formaciones/images/javascript-736400__480.png" style="width: 170px; height: 160px;" /><br>
                              JavaScript<br>
                              <span>JavaScript es un lenguaje de programación que 
                              impulsa las páginas y aplicaciones web. Si es nuevo 
                              en el lenguaje, este curso le ayudará a empezar a 
                              codificar en JavaScript.</span>
                              </p>
                      </div>
                      <div class="box">
                          <p>
                              <img src="../assets-formaciones/images/main-qimg-c43424186b9c089b9aa1d64c7f1989c1.webp" style="width: 170px; height: 160px;" /><br>
                              Java<br>
                              <span>Esta formación le proporcionará todo lo que necesita saber para 
                              comenzar a programar en Java y sirve como una base sólida para 
                              todos los entornos de desarrollo basados ​​en Java.</span>
                          </p>
                      </div>
                      <div class="box">
                          <p>
                              <img src="../assets-formaciones/images/icons8-c-programación-144.png" style="width: 170px; height: 160px;" /><br>
                              C<br>
                              <span>Esta formación le enseñará de manera práctica los aspectos básicos 
                                  del lenguaje de programación C y las herramientas, para que pueda 
                                  escribir aplicaciones básicas.</span>
                          </p>
                      </div>
                      <div class="box">
                          <p>
                              <img src="../assets-formaciones/images/pngwing.com.png" style="width: 170px; height: 160px;" /><br>
                              PHP<br>
                              <span>Esta formación le ayudará a comenzar en el lenguaje PHP en poco tiempo, 
                                  cubriendo la instalación, administración de formularios, trabajo 
                                  con bases de datos y más.</span>
                          </p>
                      </div>
                      </div> <!-- carousel-view End -->
                      </div> <!-- carousel End -->
                      <div class="container-fluid">
                        <div class="clearfix">
                          <h6 class="pull-left">Formaciones inscritas</h6>
                          <a href="formaciones-inscripcion-añadir.php" class="btn btn-primary pull-right">Inscribirme a formación</a>
                        </div>
                        <?php
                        // Include config file
                        require_once "formaciones-config.php";
                        
                        // Attempt select query execution
                        $sql = "SELECT * FROM training";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                echo "<table class='table table-bordered table-striped'>";
                                    echo "<thead>";
                                        echo "<tr>";
                                            #echo "<th>#</th>";
                                            #echo "<th>Dirección</th>";
                                            echo "<th>Nombre formación</th>";
                                            #echo "<th>Sueldo</th>";
                                            echo "<th>Acción</th>";
                                        echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            #echo "<td>" . $row['id'] . "</td>";
                                            #echo "<td>" . $row['address'] . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            #echo "<td>" . $row['salary'] . "</td>";
                                            echo "<td>";
                                                // echo "<a href='formaciones-inscripcion-read.php?id=". $row['id'] ."' title='Ver' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                                // echo "<a href='formaciones-inscripcion-modificar.php?id=". $row['id'] ."' title='Modificar' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                                echo "<a href='formaciones-inscripcion-eliminar.php?id=". $row['id'] ."' title='Eliminar' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</tbody>";                            
                                echo "</table>";
                                // Free result set
                                mysqli_free_result($result);
                            } else{
                                echo "<p class='lead'>No está inscrito a ninguna formación.</p>";
                            }
                        } else{
                            echo "ERROR: No pudo ejecutar $sql. " . mysqli_error($link);
                        }

                        // Close connection
                        mysqli_close($link);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../assets-formaciones/js/jquery.min.js"></script>
<script src="../assets-formaciones/js/slick.min.js"></script>

<script>
$('.carousel-view').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
</script>

<?php require_once 'templates/footer.php';?>

</body>
</html>