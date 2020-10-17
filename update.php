<?php
   class Database
{
    private static $dbName = 'test' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = 'admin8080'; // admin8080
     
    private static $cont  = null;
     
    public function __construct() {
        die('Init function is not allowed');
    }
     
    public static function connect()
    {
       
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     
    public static function disconnect()
    {
        self::$cont = null;
    }
}
 
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: list-usuarios.php");
    }
     
    if ( !empty($_POST)) {
        // validacion de errores
        $usernameError = null;
        $emailError = null;
        $passwordError = null;
        $nivelError = null;
         
        // recibir valores del post 
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nivel = $_POST['nivel'];
        
         
        // validar input
        $valid = true;
        if (empty($username)) {
            $usernameError = 'Por favor ingrese un username';
            $valid = false;
        }
         
        if (empty($email)) {
            $emailError = 'Por favor ingrese un email';
            $valid = false;
        } 
         
        if (empty($password)) {
            $passwordError = 'Por favor ingrese un password';
            $valid = false;
        }
         if (empty($nivel)) {
            $nivelError = 'Por favor seleccione su nivel de usurio';
            $valid = false;
        }
   
         
        // actualizar datos
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE usuarios  set username = ?, email = ?, password = ?, nivel = ? WHERE ID = ?";
            $q = $pdo->prepare($sql);
            $password = md5($_POST['password']);
            $q->execute(array($username,$email,$password,$nivel,$id));
            Database::disconnect();
            header("Location: list-usuarios.php");
        }
   }  else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM usuarios where ID = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $username = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
        $nivel = $data['nivel'];
        Database::disconnect();
    }

?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <!--CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="style.css" rel="stylesheet">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <!--theme <link rel="stylesheet" href="css/bootstrap-theme.min.css">   -->

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
    <div class="container-fluid">
        <div class="container">
        <br>
        <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
            <div align=""><a href="adb-usuarios.php" class="btn btn-default"><span class="icon-undo2"></span></a></div>
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
    
    <div class="col-md-4"></div>
                 <div class="col-md-4">
                 <form name="form" action="update.php?id=<?php echo $id?>" method="post">
                    <h5 class="text-center">
                        Registro de Usuarios</h5>
                    <form class="form form-signup" role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="icon-user"></span></span>
                            <input name="username" type="text" id="username" class="form-control" placeholder="Usuario" value="<?php echo !empty($username)?$username:'';?>">
                            <?php if (!empty($nombreError)): ?>
                                <span class="help-inline"><?php echo $nombreError;?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="icon-mail2"></span>
                            </span>
                            <input name="email" type="text" id="email" class="form-control" placeholder="Correo Electronico" value="<?php echo !empty($email)?$email:'';?>">
                             <?php if (!empty($emailError)): ?>
                                <span class="help-inline"><?php echo $emailError;?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="icon-key2"></span></span>
                            <input name="password" type="password" id="password" class="form-control" placeholder="Contraseña" value="<?php echo !empty($password)?$password:'';?>">
                            <?php if (!empty($passwordError)): ?>
                                <span class="help-inline"><?php echo $password;?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="nivel" id="nivel" style="color: grey;" value="<?php echo !empty($password)?$password:'';?>">
                        <option class="form-control"  disabled selected hidden>Tipo de Usuario</option>
                            <option value="superusuario">Superusuario</option>
                            <option value="miembroA">Miembro Activo</option>
                            <option value="miembroP">Miembro Pasivo</option>
                            <option value="proba">Probacionista</option>
                        </select>
                        <?php if (!empty($nivelError)): ?>
                                <span class="help-inline"><?php echo $nivel;?></span>
                        <?php endif; ?>
                    </div>
                   
            
                <div class="form-group" align="center">
                <input type="submit" name="Submit" value="Registrarse" class="btn btn-success">
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
</body>
</html>