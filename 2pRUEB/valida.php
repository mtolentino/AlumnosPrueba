
<?php
include('conexion.php');

session_start();

    $usuariox = $_POST['usu'];
    $password = $_POST['pass'];
    
	 ini_set('session.gc_maxlifetime','86400');
	ini_set('session.cache_expire','86400');
	if ($usuario='mario' && $password='123') {
		$_SESSION['nombrex'] = $usuariox;
		header("Location: /2pRUEB/home.php");
	}
	else
	{
		header("Location: /2pRUEB");
	}
/*
    $sql = "select * from usuarios where username='".$usuario."' and password='".$password."'";
    $message = "Tus Datos no son validos verifique.";    
   
     $result = pg_query($conn, $sql);
    
     if (pg_num_rows($result) > 0) {
    	
        while ($row = pg_fetch_assoc($result)) {
            $_SESSION['nombre'] =  $row['nombre'];
            $_SESSION['tipo'] =  $row['puesto'];
            $_SESSION['imagen']= $row['imagen'];
            $_SESSION['logged'] = true;
            $_SESSION['errormsg'] = "";
             $_SESSION['nombre']=utf8_decode($_SESSION['nombre']);
                    									}
      					} 
*/
?>
