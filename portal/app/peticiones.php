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
                            <h5>Peticiones</h5>
                        </div>
                        <div class="panel-body">
                            <ul class="bottom-menu-iconic-list">
                                <a href="inicio.php"><strong>Inicio</strong></a> > <a href="#">Peticiones</a>
                            </ul>
                            <br>
                            <div class="mensaje-envio">
                                <?php
                                    if(isset($_POST['Enviar'])) {
                                        if (empty($_POST['message'])) {
                                            echo "Por favor, introduzca su petición."; 
                                        } else {
                                            $sql = "INSERT INTO request (email, message) VALUES ('".$_SESSION["email"]."','".$_POST["message"]."')";
                                            $result = mysqli_query($conn,$sql);
                                            echo "La petición se envió correctamente.<br><br>";
                                        }
                                    }
                                ?>
                            </div>
                            <div class="caja-peticiones first">
                                <form action="" method="post" name="Formulario">
                                    <h6>Formulario de peticiones</h6>
                                    <textarea name="message" rows="5" cols="50" placeholder="Escriba aquí su petición" class="form-control"></textarea><br>
                                    <input type="checkbox" class="checkbox" name="Checkbox" id="terminosycondiciones" onclick= "enableSending();"/>
                                    <label for="checkbox" class="agree">Estoy de acuerdo con los</label> <a href="terminos.php" style="color:black">Términos y Condiciones de Uso</a>.<br>
                                    <div class="centrar">
                                        <button type="submit" name="Enviar" class="btn btn-embosed btn-primary" disabled="disabled">Enviar</button><br>
                                    </div>
                                </form>
                            </div>
                            <div id="caja-peticiones-segunda" class="caja-peticiones bottom-menu-iconic-list">
                                <div>
                                    <h6 class="titulo-info">Contacto</h6>
                                    <span class="info">96 123 45 67</span><br><br>
                                    <span class="info"><a href="#">portaldelempleado@email.com</a><br>
                                </div>
                                <br><br>
                                <div>
                                    <h6 class="titulo-info">Síguenos</h6>
                                    <li><a href="https://www.facebook.com" class="fui-facebook" target="new"></a></li>
                                    <li><a href="https://www.twitter.com" class="fui-twitter" target="new"></a></li>
                                    <li><a href="https://es.linkedin.com/" class="fui-linkedin" target="new"></a></li>
                                    <li><a href="https://www.youtube.com/?hl=es&gl=ES" class="fui-youtube" target="new"></a></li>
                                    <li><a href="https://www.instagram.com/" class="fui-instagram" target="new"></a></li>
                                </div>
                            </div> <!--body panel main -->
                        </div> <!--toc -->
                    </div>
                </div> <!-- end main content -->
            </div>
     	</div>
    </div> <!-- /container -->
<?php require_once 'templates/footer.php';?>

<script>
    function enableSending() {
        document.Formulario.Enviar.disabled = !document.Formulario.Checkbox.checked;
    }
</script>