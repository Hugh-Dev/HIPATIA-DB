<?php
include('config.php');
if($_SESSION["logeado"] != "SI"){
header ("Location: index.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="es">
	<!-- icono para el url en el explorador -->
	<link rel="icon" type="image/png" href="icon.fw.png"/>
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
	<div class="container-fluid">
		<div class="container">
		<br>
		<div class="row">
		<div class="panel panel-default">
			<div class="panel-body">
			
			<!--<h3 align="center" style="text-color: greem;">HDB Biblioteca Online</h3>-->
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

			<div class="col-md-12">
			<div align=""><a href="hdb-usuarios.php" class="btn btn-default" title="Has Click para Volver al Gestor de Usuarios del Sistema HDB"><span class="icon-undo2"></span></a></div><br>
			<div class="row">
			        
					<div id="search">  
					<div class="input-group"><span class="input-group-addon">Filtro</span>
					<input id="filtro" type="text" class="form-control" placeholder="Buscar usuario">
            		</div>
            		<div class="table-responsive">
            		<table id="filtro" class="table table-condensed table-striped table-bordered">
                  <thead>
                    <tr>
                      <th class="text-center"><span class="icon-users"></span></th>
                      <th class="text-center">Nivel</th>
                      <th class="text-center">Contraseña</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Accion</th>
                    </tr>
                  </thead>
                  		<tbody class="searchable">

                  				  <?php
                  				  include_once 'config.inc.php';
        $db=new Conect_MySql();
            $sql = 'select*from usuarios ORDER BY ID DESC';
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr align="center">
                <td><?php echo $datos['username']; ?></td>
            	<td><?php echo $datos['nivel']; ?></td>
                <td><?php echo $datos['password']; ?></td>
                <td><?php echo $datos['email']; ?></td>
                <td><?php echo '<a class="btn btn-danger btn-sm" href="delete.php?id='.$datos['ID'].'"><span class="icon-bin"></span></a>';?>
               		<?php echo '<a class="btn btn-primary btn-sm" href="update.php?id='.$datos['ID'].'"><span class="icon-spinner6"></span></a>';?></td>
            </tr>
                
          <?php  } ?>
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
