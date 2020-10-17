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

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	

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

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
		<title>HIPATIA-DB</title>

		<style type="text/css">
		h3{
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
	<div class="container-fluid">
		<div class="container">
		<br>
		<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
			<div align=""><a href="HDB.php" class="btn btn-default"><span class=""></span>Atras</a></div>
			<!-- 
				##    ## ##  ## ##### ##    ##   ###           ###     ##### ###### ###### ######  ###### ##     ##  #####
				####  ## ##  ## ##    ##    ##  ## ##         ## ##   ##     ##   # ##  ## ##   ## ##  ## ##     ## #
				## ## ## ##  ## #####  ##  ##  #######       ####### ##      ###### ##  ## ######  ##  ## ##     ##  #####
				##  #### ##  ## ##      ####   ##   ##       ##   ##  ##     ## ##  ##  ## ##      ##  ## ##     ##       #
				##   ### ###### #####    ##    ##   ##       ##   ##   ##### ##  ## ###### ##      ###### ###### ##  #####
			-->
			<div class="col-md-12">
			<div class="row">
					<div id="search">  
					<div class="input-group"><span class="input-group-addon">Filtro</span>
					<input id="filtro" type="text" class="form-control" placeholder="Buscar PDF">
            		</div>
            		<div class="table-responsive">
            		<table id="filtro" class="table table-condensed table-striped table-bordered">
                  <thead>
                    <tr>
                      <th class="text-center"><span class="icon-file-pdf"></span></th>
                      <th class="text-center">Titulo</th>
                      <th class="text-center">Descripcion</th>
                      <th class="text-center">Archivo</th>
                      <th class="text-center">Accion</th>
                    </tr>
                  </thead>
                  		<tbody class="searchable">
                        </tbody>
            		</table>
            		</div>
            		</div>
            		</div>
            	</div>


 </div>
  			<div class="panel-footer" style="text-align: center;"><span class="icon-library"></span> Nueva Acropolis Venezuela-Mérida </div>
 </div> 			

		</div>
		</div>
		</div>
	</body>
</html>
