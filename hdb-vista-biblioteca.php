<?php
include('config.php');
if($_SESSION["logeado"] != "SI"){
header ("Location: index.php");
exit;
}
include('entrar.php');
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
			<div align=""><a href="HDB.php" class="btn btn-default"><span class=""></span>Atras</a></div>
			<!--<h3 align="center" style="text-color: greem;">AlejandriaDB Biblioteca Online</h3>-->
			<!--<SECTION id="section" align="center">

			<pre id="code"> 
				##    ## ##  ## ##### ##    ##   ###           ###     ##### ###### ###### ######  ###### ##     ##  #####
				####  ## ##  ## ##    ##    ##  ## ##         ## ##   ##     ##   # ##  ## ##   ## ##  ## ##     ## #
				## ## ## ##  ## #####  ##  ##  #######       ####### ##      ###### ##  ## ######  ##  ## ##     ##  #####
				##  #### ##  ## ##      ####   ##   ##       ##   ##  ##     ## ##  ##  ## ##      ##  ## ##     ##       #
				##   ### ###### #####    ##    ##   ##       ##   ##   ##### ##  ## ###### ##      ###### ###### ##  #####
			
			<div align="right">Secretria de estudio <span class="icon-earth"></span></div>
			</pre>
			</SECTION>-->
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

                  				  <?php
include('entrar.php');
#print $_SESSION["logeado"]." ";
                  				  #$link = mysql_connect($dbhost, $dbusername, $dbuserpass);
		                          #mysql_select_db($dbname,$link) or die('No se puede seleccionar la base de datos');
                  				  #$query = mysql_query("select * from ") or die(mysql_error());
                                  #$row = mysql_fetch_array($query);
                  				  #print $row['dirigido_a'];
#$i = $row['nivel'];               #$var = $row['dirigido_a'];
#print ($i)."aqui".$username;
                  				  if ($row['nivel'] == $nivel2 ) {
                  				  	# code...
                  				  
                  				  include_once 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select * from tbl_documentos where dirigido_a = 'ma'";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr align="center">
            	<td><?php echo $datos['nombre_archivo']; ?></td>
                <td><?php echo $datos['titulo']; ?></td>
                <td><?php echo $datos['descripcion']; ?></td>
                <td><?php echo $datos['tipo']; ?></td>
                <td><a class='btn btn-default btn-circle btn-sm' role='button' href='biblioteca.php?id=<?php echo $datos['id_documento']?>'><span class="icon-eye"></span></a></td>
            </tr>
                <!--<?php #echo $datos['nombre_archivo']; ?>-->
          <?php  }}
           ?>
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
