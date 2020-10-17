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
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!--theme -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!--icomoon -->
	<link rel="stylesheet" href="fonts/style.css">

	<!--JavaScript -->
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<!--JQUERY -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.min.js"></script>

			<script type="text/javascript">
            $(document).ready(function () {

    			(function ($) {

        			$('#filtro').keyup(function () {

            			var rex = new RegExp($(this).val(), 'i');
            			$('.searchable tr').hide();
            			$('.searchable tr').filter(function () {
                			return rex.test($(this).text());
            			}).show();

        			})

    			}(jQuery));

				});
    		</script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
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
		<div class="container">
		<br>
		<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
			<div align=""><a href="cerrar.php">Cerrar Sesion</a></div>
			<!--<h3 align="center" style="text-color: greem;">AlejandriaDB Biblioteca Online</h3>-->
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
			<div class="col-md-8"></div>

<div class="col-md-4">
<div class="row">
  			<div id="panel" class="panel-body" align="center">
  				<form action="upload.php" method="POST" enctype="multipart/form-data">
		    		<div class="form-group">
		    		<h3><span class="icon-database"> Archivo</span> <span style="color:red">PDF</span>:</h3>
		    		</div>
		    		<div class="form-group">
    				<input type="text" class="form-control" id="id" name="titulo" placeholder="Nombre del Archivo">
  					</div>
  					<div class="form-group">
    				<textarea class="form-control" rows="3" name="descripcion" placeholder="Descripcion"></textarea>
  					</div>
		    		<div class="form-group">
		    		<input type="file" name="archivo" id="file">
		    		</div>
		    		<div class="form-group">
		    		<button type="submit" class="btn btn-success" value="Subir" class="form-control" ><span class="icon-cloud-upload"></span> Subir</button>
				    </div>
				</form>
  			</div>
 </div>
 </div>
 </div>
  			<div class="panel-footer" style="text-align: center;"><span class="icon-library"></span> Nueva Acropolis Venezuela-Mérida </div>
 </div> 			

		</div>
		</div>
	</body>
</html>
