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
	<link rel="stylesheet" href="css/bootstrap.css">

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
		</style>
	
	</head>
	<body>
	<div class="centrado-porcentual">
	<div class="container-fluid">
		<div class="container">
		<br>
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
			
			<div class="col-md-3">
			<div align=""><a href="menu.php" class="btn btn-default" title="Volver al Menu del Sistema HDB"><span class="icon-menu"></span></a></div><br>
			<ul class="nav nav-pills nav-stacked" >
  			<li role="presentation" class="active"><a href="#"><span class="icon-drive"></span> Gestor de Usuarios</a></li>
  			<li role="presentation"><a href="registrarse.php" title="Has Click Crear Nuevo Usuario en Sistema HDB"><span class="icon-user-plus"></span> Crear Usuario</a></li>
  			<li role="presentation"><a href="list-usuarios.php" title="Has Click para Listar los Uusuarios del Sistema HDB"><span class="icon-list"></span> Listar Usuario</a></li>
  			<li role="presentation"><a href="cerrar.php" title="Cerrar Sesion Sistema HDB"><span class="icon-switch"></span> Cerrar Sesion</a></li>
			</ul>
			</div>

<div class="col-md-7">
			<br><br>		
  		<h3><small><p align="center"><span class="icon-quotes-left"></span> Hipatia, considerada la última filósofa del mundo clásico, nos presta su nombre para elevarlo como estandarte en este proyecto que quiere acercar las enseñanzas y la sabiduría a quiénes estamos en su búsqueda. <span class="icon-quotes-right"></span></p></small></h3>
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
	</body>
</html>
