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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <style type="text/css">
    object{
        position: relative;
        align-content: center;
        width: 800px;
        height: 800px;
    }
    </style>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <div class="container-fluid">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <br>
<a class="btn btn-default" href="hdb-vista.php"><span class="icon-undo2"></span></a>
    <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select * from tbl_documentos where id_documento=".$_GET['id'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre_archivo']==""){?>
        <p>NO tiene archivos</p>
                <?php }else{ ?>
                <div class="row" align="center">
                <br><br>
                <div class="">
                <object class="embed-responsive-item" data="archivos/<?php echo $datos['nombre_archivo']; ?>"></object>
                <!--<video width="320" height="240" controls>
                        <source src="archivos/<?php echo $datos['nombre_archivo']; ?>" >
                </video>-->
                </div>
                </div>
                <?php } } ?>
                </div>

    </div>
    </div>
    </div>
    </body>
</html>
