<?php
    class Database
{
    private static $dbName = 'test' ;
    private static $dbHost = 'localhost' ;
    private static $dbUsername = 'root';
    private static $dbUserPassword = ''; //admin8080
     
    private static $cont  = null;
     
    public function __construct() {
        die('Init function is not allowed');
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
}
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
       
    }
     
   if ( !empty($_GET)) {
         echo "<script lenguage='javascript'>window.confirm('Desea Eliminar $id ');</script>";
     /*    // identificador
        $id = $_GET['id'];
         
        // eliminar usuario
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE FROM usuarios  WHERE ID = $id";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: list-usuarios.php");
     */    
    }
?>
