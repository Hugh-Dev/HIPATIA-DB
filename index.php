<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="fonts/style.css">

    <title>Nueva Acropolis</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
     <!-- JS dependencies -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootbox.min.js"></script>

    <!--Centar Panel -->
    <link rel="stylesheet" href="css/center.css">

    <style type="text/css">
   body
{
    

    padding-top: 200px;
}


.input-group-addon
{
    background-color: #7ab733;
    border-color: gray;
    color: rgb(255, 255, 255);
}
.form-control:focus
{
    background-color: #7ab733;
    border-color: #fff;
    color: rgb(255, 255, 255);
}
.form-signup input[type="text"],.form-signup input[type="password"] { border: 1px solid gray; }
.alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff; }
    </style>
    <script type="text/javascript">
        bootbox.confirm("Are you sure?", function(result) {
            Example.show("Confirm result: "+result);
        })
    </script>
  </head>

<body>
    <div class="centrado-porcentual">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center"><span class="icon-library"></span> 
                       HIPATIA DB</h5>
                    <form class="form form-signup" role="form" method="post" action="entrar.php">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="icon-user"></span></span></span>
                            <input type="text" class="form-control" name="username"  id="username" placeholder="Usuario" data-rule-required="true"  tooltip title="Ingese el usuaria el cual fue asignado por la OINA" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="icon-key2"></span></span>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Contrase&ntilde;a" required tooltip title="Ingese la contraseña la cual fue asignado por la OINA"/>
                        </div>
                    </div>
                </div>
                <div align="center">
                <input type="submit" name="Submit" value="Iniciar Sesion" class="btn btn-success" class="form-control" title="Pulse Iniciar Sesion para Ingresar">
               </div><br>
              <!-- <p style="text-align:center;"><a href="registrarse.php" style="color: gray;">¿Nuevo Usuario? Registrate!</a></p>
               -->
               </form>
            </div>
         <?php
if(isset($_GET['errorpass'])){ 
echo "
<div class='alert alert-danger-alt alert-dismissable' align='center'>
                <span class='icon-sad2'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>Datos Incorrectos, Vuelva a intentarlo.</div>
"; 
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['nopass'])){ 
echo "
<div class='alert alert-danger-alt alert-dismissable' align='center'>
                <span class='icon-confused2'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>No ha introducido una contraseña.</div>
"; 
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['logout'])){ 
echo "
<div class='alert alert-danger-alt alert-dismissable' align='center'>
                <span class='icon-wink2'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>Ha cerrado sesion correctamente.</div>
"; 
}else{ 
echo ""; 
} 
?>
<?php
if(isset($_GET['sucess'])){ 
echo "
<div class='alert alert-success-alt alert-dismissable' align='center'>
                <span class='icon-happy2'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>Listo! Tu registro fue hecho satisfactoriamente.</div>
"; 
}else{ 
echo ""; 
} 
?>
        </div>
    </div>
</div>
</div> 


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</div>
  </body>
</html>
