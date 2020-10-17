<?php
include('config.inc.php');
    // Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
    if(isset($_POST['username']) && !empty($_POST['username']) && 
    	isset($_POST['nivel']) && !empty($_POST['nivel']) &&
    isset($_POST['password']) && !empty($_POST['password']) &&
    isset ($_POST['email']) && !empty($_POST['email'])) {
        // Si entramos es que todo se ha realizado correctamente
		$password = md5($_POST['password']);
		$username = htmlentities($_POST['username']);
		$rol = htmlentities($_POST['nivel']);
		$mail = htmlentities($_POST['email']);
		
		
		
			// Con esta sentencia SQL insertaremos los datos en la base de datos
		$db=new Conect_MySql();
        $sql = "INSERT INTO usuarios (username,nivel,password,email) VALUES('{$username}','{$rol}','{$password}','{$mail}')";
        $query = $db->execute($sql);
            // Ahora comprobaremos que todo ha ido correctamente
            if(empty($query)){

            header ("Location: registrarse.php?errordat");

        } else {

             header ("Location: hdb-usuarios.php");

        }

    } else {

         header ("Location: registrarse.php?errordb");

    }

        

?>