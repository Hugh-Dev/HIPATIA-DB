<?php
    class Database
{
    private static $dbName = 'hipatia-db' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = 'admin8080'; //admin8080
     
    private static $cont  = null;
     
    public function __construct() {
        die('No se permite la función Init');
    }
     
    public static function connect()
    {
       // Generar una conexión a traves de toda la aplicación
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
    public static function alert()
    {
        echo "alert(True)";
    }
}
   
        //$email = $data['email'];
        //$password = $data['password'];
        //$nivel = $data['nivel'];
        //Database::disconnect();

    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];

    }
     
    if ( !empty($_GET)) {

        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql ="select * from tbl_documentos where id_documento=".$_GET['id'];
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $titulo = $data['titulo'];
        



        // SISTEMA DE ALERTA AQUIIIIIIII
        //mensaje

        /*echo "<script lenguage='javascript'>
        var msg = window.confirm('Desea Eliminar $titulo ');
        if (msg == True){

        } 
        </script>";*/
        echo "AQUIIIIIIII";

        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM tbl_documentos where id_documento=".$_GET['id'];
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("location:hdb-vista.php");

    }

    /*
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM usuarios  WHERE ID = $id";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();

        echo "<script lenguage='javascript'>alert('$username ha sido sido eliminado ');</script>";
    include("list-usuarios.php");
    
    */
  
 
    
?>
