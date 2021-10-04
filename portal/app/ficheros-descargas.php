<?php
include 'ficheros-logica.php';
require_once 'templates/header.php';
?>

	<div class="content">
     	<div class="container">
		 <br><br>
			<div class="row">
				<div class="col-md-9" name="maincontent" id="maincontent">
					<div id="exercise" name="exercise" class="panel panel-info">
						<div class="panel-heading">
							<h5>Ficheros - Descarga de ficheros</h5>
						</div>
							<div class="panel-body">
								<ul class="bottom-menu-iconic-list">
									<a href="index.php"><strong>Inicio</a> > <a href="ficheros-cargas.php">Ficheros - Cargas</strong></a> > <a href="#">Ficheros - Descarga de ficheros</a>
								</ul><br>
  <div style="padding:10px 50px">
    <h5 style="color: #31708f;">
      Lista de los ficheros cargados.
    </h5>
  </div>
<table>
<thead>
    <th style="padding: 5px 50px;">Id</th>
    <th style="padding: 5px 50px;">Nombre</th>
    <th style="padding: 5px 50px;">Tamaño</th>
    <th style="padding: 5px 50px;">Descargas</th>
    <th style="padding: 5px 50px;"></th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td style="padding: 5px 50px;"><?php echo $file['id']; ?></td>
      <td style="padding: 5px 50px;"><?php echo $file['name']; ?></td>
      <td style="padding: 5px 50px;"><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td style="padding: 5px 50px;"><?php echo $file['downloads']; ?></td>
      <td style="padding: 5px 50px;"><a href="ficheros-descargas.php?file_id=<?php echo $file['id'] ?>">Descargar</a></td>
    </tr>
  <?php endforeach;?>
</tbody>
</table><br>
<a href="ficheros-cargas.php"><strong>Ir a Ficheros - Carga de ficheros</strong></a>
</div>
</div>
</div>
</div>
</div>
</div>
<?php require_once 'templates/footer.php';?>