<?php
include_once 'config.inc.php';
if (!isset($_POST['Subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
            $dirigido = $_POST['material'];
            //if ($dirigido == 'hdb') {
            
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos (titulo,descripcion,dirigido_a,tamanio,tipo,nombre_archivo) VALUES('{$titulo}','{$descri}','{$dirigido}','{$tamani}o','{$tipo}','{$nombre}')";
            $query = $db->execute($sql);
            if($query){
                echo "<script lenguage='javascript'>alert('Se guardo correctamente');</script>";
                header("location:hdb-archivos.php");
            }
        }
        /*elseif ($dirigido == 'ma') {
            $db=new Conect_MySql();
            $sql = "INSERT INTO madb (titulo,descripcion,tamanio,tipo,nombre_archivo) VALUES('$titulo','$descri','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "<script lenguage='javascript'>alert('Se guardo correctamente');</script>";
                header("location:adb-archivos.php");
                }
        }
        elseif ($dirigido == 'mp') {
            $db=new Conect_MySql();
            $sql = "INSERT INTO mpdb (titulo,descripcion,tamanio,tipo,nombre_archivo) VALUES('$titulo','$descri','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "<script lenguage='javascript'>alert('Se guardo correctamente');</script>";
                header("location:adb-archivos.php");
                }
        }
        elseif ($dirigido == 'p') {
            $db=new Conect_MySql();
            $sql = "INSERT INTO pdb (titulo,descripcion,tamanio,tipo,nombre_archivo) VALUES('$titulo','$descri','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "<script lenguage='javascript'>alert('Se guardo correctamente');</script>";
                header("location:adb-archivos.php");
                }
        }
         else {
            echo "Error";
        }*/
    }
  }

?>
