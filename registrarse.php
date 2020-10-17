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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="style.css" rel="stylesheet">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    
    <!--Centar Panel -->
    <link rel="stylesheet" href="css/center.css">

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
        
        <title>HIPATIA-DB</title>

        <style type="text/css">
  

.alert-purple { border-color: #694D9F;background: #694D9F;color: #fff; }
.alert-info-alt { border-color: #B4E1E4;background: #81c7e1;color: #fff; }
.alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff; }
.alert-warning-alt { border-color: #F3F3EB;background: #E9CEAC;color: #fff; }
.alert-success-alt { border-color: #19B99A;background: #20A286;color: #fff; }
.glyphicon { margin-right:10px; }
.alert a {color: gold;}

.input-group-addon
{

}
.form-control:focus
{
   
}
.form-signup input[type="text"],.form-signup input[type="password"] { border: 1px solid  rgb(122,183,51); }  

#code{
            border: none;
            text-align: ;
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
	
    <div class="col-md-4"><div align=""><a href="hdb-usuarios.php" class="btn btn-default" title="Has Click para Volver al Gestor de Usuarios del Sistema HDB"><span class="icon-undo2"></span></a></div></div>
                 <div class="col-md-4">
                 <form name="form" method="post" action="insertar.php">
                    <h3 class="text-center"><small>Registro de Usuarios</small></h3>
                    <form class="form form-signup" role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="icon-user"></span></span>
                            <input name="username" type="text" id="username" class="form-control" placeholder="Usuario" required="true" title="Escribe el Nombre del Usuario a Registrar en el Sistema HDB">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="icon-mail2"></span>
                            </span>
                            <input name="email" type="text" id="email" class="form-control" placeholder="Correo Electronico" required="true" title="Escribe el Correo Electronico del Usuario a Registrar en el Sistema HDB">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="icon-key2"></span></span>
                            <input name="password" type="password" id="password" class="form-control" placeholder="Contraseña" required="true" title="Escribe la Contraseña del Usuario a Registrar en el Sistema HDB">
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="nivel" id="nivel" style="color: grey;" required="true" title="Selecciona la Etapa de Avance del Usuario a Registrar en el Sistema HDB">
                        <option class="form-control"  disabled selected hidden>Tipo de Usuario</option>
                            <option value="superusuario">Superusuario</option>
                            <option value="miembroA">Miembro Activo</option>
                            <option value="miembroP">Miembro Pasivo</option>
                            <option value="proba">Probacionista</option>
                        </select>
                    </div>
                   
            
                <div class="form-group" align="center">
                <input type="submit" name="Submit" value="Registrarse" class="btn btn-success" title="Has Click para Realizar e registro en HDB">
                </div>
                </form>
                </form>
            
                     <?php
if(isset($_GET['sucess'])){ 
echo "
<div class='alert alert-success-alt alert-dismissable' align='center'>
                <span class='icon-wink2'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>Listo! Tu registro fue hecho satisfactoriamente.</div>
"; 
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['errordat'])){ 
echo "
<div class='alert alert-warning-alt alert-dismissable' align='center'>
                <span class='icon-sad2'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>Ha habido un error al insertar los valores.</div>
"; 
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['errordb'])){ 
echo "
<div class='alert alert-danger-alt alert-dismissable' align='center'>
                <span class='icon-sad2'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>Error, no ha introducido todos los datos.</div>
"; 
}else{ 
echo ""; 
} 
?>
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