<body bgcolor="white">
	Sistema de Alumno  del la Escuela
<?php  
$hoy = date("Y-m-d H:i:s");
echo "impreso ..".$hoy;
 $s=$_GET['s'];

include ("conexion.php");


$sql=mysql_query("SELECT * FROM alumno where id='$s'",$con);

if (mysql_num_rows($sql) > 0) {
       
    while ($row = mysql_fetch_row($sql)) {
 ?>  
 <ul style="list-style:none; background:white;"> 
  <li class="lis"><strong>Alumno:</strong><br><?php echo $row[2]; ?></li>
  <li class="lis"><strong>Apellido:</strong><br><?php  echo $row[3] ?></li>  
  <li class="lis"><strong>Matricula:</strong><br><?php echo $row[4] ?></li> 
  <li class="lis"><strong>Correo:</strong><br><?php echo $row[5] ?></li>  
  
  <?php
}} 

$sql=mysql_query("SELECT * FROM materia inner join alumno_materia on id_materia=materia.id where id_alumno=$s ",$con);

if (mysql_num_rows($sql) > 0) {
       echo '<li><strong>Materias:</strong></li>';
    while ($row = mysql_fetch_row($sql)) {
       
   
echo '<li class="lis">'.$row[1].'<br>'.$row[5].'</li>';

}}
?>

    
</ul>
<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
<hr>
