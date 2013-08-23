
<?php
if(isset($_POST['upd']) && !empty($_POST['alumno2']) &&
isset($_POST['materia2']) && !empty($_POST['calificacion']) ) {

include('conexion.php');
$idal=$_POST['alumno2'];
$mat=$_POST['materia2'];
$cal=$_POST['calificacion'];

$sql=mysql_query("UPDATE alumno_materia SET calificacion='$cal' WHERE id_alumno='$idal' and id_materia='$mat' ;",$con);
  echo " 
                <script language='JavaScript'> 
                alert('Guardado correctamente'); 
                window.location = 'home.php';
                </script>";          
  
             
}else
{

 echo " <script language='JavaScript'> 
                alert('ERROR.....................................X('); 
                window.location = 'home.php';
                </script>";
}


?>
