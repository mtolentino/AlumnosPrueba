<?php

if(isset($_POST['enviar']) && !empty($_POST['nombre']) &&
isset($_POST['apellido']) && !empty($_POST['matricula'])  && !empty($_POST['correo'])&& !empty($_POST['campus']) ) {
  include('../conexion.php'); 
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$matricula=$_POST['matricula'];
$correo=$_POST['correo'];
$id_campus=$_POST['campus'];
$sqlx=mysql_query("SELECT * FROM alumno where matricula='$matricula'",$con);
      
      if (mysql_num_rows($sqlx) > 0) {
       
         while ($rowx = mysql_fetch_row($sqlx)) {
            $matrix = $rowx[4];
            
        
 

}} 

if ($matrix==$matricula) {
  echo " <script language='JavaScript'> 
                alert('ERROR.......t\YA EXISTE LA MATRICULA..X('); 
                window.location = '../home.php';
                </script>";
}else
{






$sql=mysql_query("INSERT INTO alumno (nombre, apellido,matricula,correo,id_campus)
VALUES ('$nombre','$apellido','$matricula','$correo','$id_campus')",$con);
if (!$sql)
  {
  die('Error: ' . mysql_error($con));
  }
else{
	

	
echo " 
                <script language='JavaScript'> 
                alert('Guardado correctamente'); 
                window.location = '../home.php';
                </script>";

}}}
else
{

 echo " <script language='JavaScript'> 
                alert('ERROR.....................................X('); 
                window.location = '../home.php';
                </script>";

}
?>
