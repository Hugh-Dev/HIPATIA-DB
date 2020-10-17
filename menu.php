<?php
include('config.php');
if($_SESSION["logeado"] != "SI"){
header ("Location: index.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
	<!--CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!--Centar Panel -->
	<link rel="stylesheet" href="css/center.css">

	<!--theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">	

	<!--icomoon -->
	<link rel="stylesheet" href="fonts/style.css">

	<!--JavaScript -->
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!--JQUERY -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.min.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<!-- JS dependencies -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootbox.min.js"></script>

		<title>HIPATIA-DB</title>

		<style type="text/css">
		h3{
		}
		#code{
			border: none;
			text-align: ;
		}
		#section{
			position: center;
		}
		#panel{
			border: 1px dotted gray;
			width: 300px;
			height: 320px;
			margin: 20px;
			
		}
		#search{
			position: relative;
			margin: 20px;
		}
		ul{
			color:;
		}
		body{
			background-color:;
		}


		</style>
	
	</head>
	<body>
		<div class="centrado-porcentual">
	<div class="container-fluid">
		<div class="container">
		<br>	<br>	<br>	<br>
		<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">

				<SECTION id="section">
			<pre id="code"> 
				##    ## ##  ## ##### ##    ##   ###           ###     ##### ###### ###### ######  ###### ##     ##  #####
				####  ## ##  ## ##    ##    ##  ## ##         ## ##   ##     ##   # ##  ## ##   ## ##  ## ##     ## #
				## ## ## ##  ## #####  ##  ##  #######       ####### ##      ###### ##  ## ######  ##  ## ##     ##  #####
				##  #### ##  ## ##      ####   ##   ##       ##   ##  ##     ## ##  ##  ## ##      ##  ## ##     ##       #
				##   ### ###### #####    ##    ##   ##       ##   ##   ##### ##  ## ###### ##      ###### ###### ##  #####
			
			<div align="right">Secretria de estudio <span class="icon-earth"></span></div>
			</pre>
			</SECTION>

			<!--<div id="izquierda">
				<img src="Biblioteca.jpg" width="200" height="200" class="img-responsive">
			</div>
			<div id="derecha">
				
				<h3 align="right"><small>Secretria de estudio </small><span class="icon-earth"></span></h3>
			</div>
			<br>-->
			<div class="col-md-3">
			<div class="row">
			<ul class="nav nav-pills nav-stacked" >
  			<li role="presentation" class="active"><a href=""><span class="icon-drive"></span> Biblioteca HDB</a></li>
  			<li role="presentation"><a href="hdb-usuarios.php" title="Ir al Gestor de Usuarios HDB"><span class="icon-users"></span> Gestor de Usuarios</a></li>
  			<li role="presentation"><a href="hdb-archivos.php" title="Ir al Gestor de Archivos HDB"><span class="icon-library"></span> Gestor Archivos</a></li>
  			<li role="presentation"><a href="cerrar.php" title="Salir de Sistema HDB"><span class="icon-switch"></span> Cerrar Sesion</a></li>
			</ul>
			</div>
			</div>
 			<div class="col-md-7">
 			
 			<h3><small><p align="center"><span class="icon-quotes-left"></span> Hipatia, considerada la última filósofa del mundo clásico, nos presta su nombre para elevarlo como estandarte en este proyecto que quiere acercar las enseñanzas y la sabiduría a quiénes estamos en su búsqueda. <span class="icon-quotes-right"></span></p></small></h3>
 			<!--<h1 align="center" style="color:grey;">HDB</h1>-->
 			</div>
 			<div class="col-md-2">
 			   <div class="row">
 					<img src="hipa.jpg" class="img-responsive">
 			    </div>
 			</div>
 			</div>
  			<div class="panel-footer" style="text-align: center;"><span class="icon-library"></span> Nueva Acropolis Venezuela-Mérida </div>
 			

		</div>
		</div>
		</div>
		</div>
		</div>
	</div>
	</body>
</html>
