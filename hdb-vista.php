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
	<script src="js/bootbox.min.js"></script>

	<!--<script src="//rawgit.com/saribe/eModal/master/dist/eModal.min.js"></script>-->

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
			
			<!--<h3 align="center" style="text-color: greem;">HDB Biblioteca Online</h3>
			<SECTION id="section">

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
			<div align=""><a href="hdb-archivos.php" class="btn btn-default"><span class="icon-undo2"></span></a></div><br>
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
                      <th class="text-center">Dirigido a</th>
                      <th class="text-center">Accion</th>
                    </tr>
                  </thead>
                  		<tbody class="searchable">

                  				  <?php
                  				  include_once 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select * from tbl_documentos ORDER BY id_documento DESC";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr align="center">
            	<td><?php echo $datos['nombre_archivo']; ?></td>
                <td><?php echo $datos['titulo']; ?></td>
                <td><?php echo $datos['descripcion']; ?></td>
                <td><?php echo $datos['tipo']; ?></td>
                <td><?php echo $datos['dirigido_a']; ?></td>
                <td><a class='btn btn-default btn-circle btn-sm'  role='button' href='archivo.php?id=<?php echo $datos['id_documento']?>'><span class="icon-eye"></span></a>
                <a class='btn btn-default btn-circle btn-sm' onclick="show_confirm();" role='button' href='delete-file.php?id=<?php echo $datos['id_documento']?>'><span class="icon-bin"></span></a>
                </td>
            </tr>
                <!--<?php #echo $datos['nombre_archivo']; ?>-->
          <?php  } ?>
                        </tbody>
                        <a class="alert" href="list_users.php?id=123">Delete user</a>
                        <form action ="#" method="POST">
                        <button class='btn btn-danger btn-xs' type="submit" name="remove_levels" value="delete">
                        <span class="fa fa-times"></span> delete</button>
                        </form>
                        <div id="confirm" class="modal hide fade">
                        <div class="modal-body">
                        Are you sure?
                        </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
  </div>

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

<script type="text/javascript">
    

        $(document).on("click", ".alert", function(e) {
            e.preventDefault();

        bootbox.confirm("Are you sure?", function(result) {

            if (result) {
               // What to do here?
            } else {
               // What to do here?
            }               
        });

        });
   
	
	$('button[name="remove_levels"]').on('click', function(e){
    var $form=$(this).closest('form');
    e.preventDefault();
    $('#confirm').modal({ backdrop: 'static', keyboard: false })
        .one('click', '#delete', function (e) {
            $form.trigger('submit');
        });
});

	  $("#delete").click(function(){
	  	var id = $(this).data('id');
	  	bootbox.confirm("Are you sure?", function(result) {
	  		if(result)
	  			window.location = 'delete-file.php?id=' + id;
	  	});
	  });

	$(function () {
        $("confirm").click(function(e) {
            e.preventDefault();
            var location = $(this).attr('href');
            bootbox.confirm("Confirm exclusion?", "No", "Yes", function(confirmed) {
                if(confirmed) {
                    window.location.replace(location);
                }
            });
        });
    });
    function show_confirm(){
    var id_documento = $(this).attr('href')
    var id = $(this).data('id');
    var alert = confirm("¿Desea eliminar?");
    if (alert == true){
        window.location = 'delete-file.php?id=' + id;
     }else{
     	if (alert == false) {
     		window.location = 'hdb-vista.php';
     	};
    }
  }
	</script>
</html>
