<?php
// Configuracion
include('config.php');

// Conectar a la base de datos
mysql_connect ($dbhost, $dbusername, $dbuserpass);
mysql_select_db($dbname) or die('No se puede seleccionar la base de datos');

if ($_POST['username']) {
//Comprobacion del envio del nombre de usuario y password
$username=htmlentities($_POST['username']);
$password=md5($_POST['password']);
if ($password==NULL) {
header ("Location: index.php?nopass");
exit();
}else{	
$query = mysql_query("SELECT username,password FROM usuarios WHERE username = '$username'") or die(mysql_error());
$data = mysql_fetch_array($query);
if($data['password'] != $password) {
//echo "No a introducido una contraseña correcta";
header ("Location: index.php?errorpass");
exit();
}
}
$query = mysql_query("SELECT username,password,nivel FROM usuarios WHERE username = '$username'") or die(mysql_error());
$row = mysql_fetch_array($query);
$nivel1 = "superusuario";
$nivel2 = "miembroA";
$nivel3 = "miembroP";
$nivel4 = "proba";

if ($username = $row['username'] && $row['nivel'] == $nivel1) {
$_SESSION["s_username"] = $row['username'];
$_SESSION["logeado"] = "SI";
header ("Location: menu.php");
exit();
}
else
if ($username = $row['username'] && $row['nivel'] == $nivel2) {
$_SESSION["s_username"] = $row['username'];
$_SESSION["logeado"] = "SI";
header ("Location: HDB.php");
}
else
if ($username = $row['username'] && $row['nivel'] == $nivel3) {
$_SESSION["s_username"] = $row['username'];
$_SESSION["logeado"] = "SI";
#require('base.template.php');
header ("Location: HDB(mp).php");
}
else
if ($username = $row['username'] && $row['nivel'] == $nivel4) {
$_SESSION["s_username"] = $row['username'];
$_SESSION["logeado"] = "SI";
header ("Location: HDB(p).php");
}
}
?> 