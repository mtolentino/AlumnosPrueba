<?php
session_start();
$p=$_SESSION['nombrex'];
if ($p <='') {
	echo 'error';
}
else
{



?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="utf-8">
	<title>BetersusDev</title>
	<link rel="stylesheet"  href="js/normalizer.css"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" href="est/estilo.css"/>
	<script  src="prefix/prefixfree.min.js"></script>
 <script> 

 //ajaxo
$(document).ready(function() {

    $('#alumno2').click(function(e){
	e.preventDefault();
        var dataString = $('#form2').serialize();

        $.ajax({
            type: "POST",
            url: "tabla.php",
            data: dataString,
            success: function(data) {
            	$('#materia2').html(data);
            }
        });
   		 });
    });



     </script>
	
</head>
<body>
	
		
	<header>
		<h1>Informacion alumno</h1>
	</header>

	<nav>	
		<ul id="menu">
			<li><span id="bot1">Registrar Alumno<span></li>
			<li><span id="bot2">Informacion del alumno</span></li>
		</ul>

	</nav>
	<div id="hov"><span>Todos los alumnos</span>
		
	</div>
	<div id='conj'>	<img id="yo"src="yo.jpg"><span id='name'><?php echo $p ?></span>&nbsp;<a href="logout.php">Salir</a></div>
<section id="container">
	
			<div id="move"><img id='es'src="es.jpg"></div>
	<div class='info' id="alumno">
		<label id='titleinfo'>Informacion del alumno</label>
		<table class='tabla'> 
		<tr id='name'> 
		   <th>nombre</th> 
		   <th>apellido</th> 
		   <th>matricula</th>
		   <th>correo</th> 
		   <th>campus</th> 
		   <th>imprimir</th> 
		</tr> 
			<tr id="res"> 
			<?php
			include('conexion.php');
			$sql=mysql_query("SELECT * FROM campus INNER JOIN alumno on id_campus=campus.id",$con);
	
			
       
   			 while ($row = mysql_fetch_row($sql)) {
        		$nom = $row[4]; 
        		$id = $row[2]; 
        
 
				echo '<td><a id="href"href="recapcha.php?x='.$id.'">'.$nom.'</a></td>';
				echo '<td>'.$row[5].'</td>';
				echo '<td>'.$row[6].'</td>';
				echo '<td>'.$row[7].'</td>';
				echo '<td>'.$row[1].'</td>';
				echo '<td><a href="print.php?s='.$id.'" target="_blank"><img class="printer"src="printer.jpg"></a></td>';

echo '</tr> ';
}
echo '</table> ';
			?>	

  
		<?php
		$x3=$_GET['x2'];

			

		$sql=mysql_query("SELECT * FROM materia inner join alumno_materia on id_materia= materia.id where id_alumno=$x3",$con);
            

		
            if (mysql_num_rows($sql) > 0) {
       	echo '<div id="mat">';
             while ($row = mysql_fetch_row($sql)) {
             	
             


             	echo '<ul id="nomats"><li>'.$row[1].'</li><li>'.$row[5].'<li></ul><br>';    

}
echo '<img id="x" src="x.png">';
}
	echo '</div><br><br>';
		?>
		

	</div>
	
		<div  id="registro">
		
		 <FORM action="response/save.php" method="post">
		<ul class="dos">
			
			<li><label >Nombre</span><br><input type='text' name='nombre'required><div class='trian'></div></li>
			<li><label >Apellido</label><br><input type='text' name='apellido'required><div class='trian'></div></li>
			<li><label >Matricula</label><br><input type='text' name='matricula' required><div class='trian'></div></li>
			<li><label >Correo</label><br><input type='email' name='correo' ><div class='trian'></div></li><br>
			
<?php $sql=mysql_query("SELECT * FROM campus",$con);
			echo '<li >Campus:';
			echo '        <select name="campus" >';
			if (mysql_num_rows($sql) > 0) {
       
   			 while ($row = mysql_fetch_row($sql)) {
        		$ti = $row[1]; 
        		$idc = $row[0]; 
 
		echo '<option value='.$idc.'>'.$ti.'</option>';

}} 
echo'</select></li>';?>



			</li>
		</ul>
		<input type="submit" name="enviar" value="Registrar" id="enviar" >
		</form>
	</div>
		<div id='califica'>
		<ul class="dos">
			<label>Registrar calificacion</label>
			<label>Materia</label>
			<form id='form2' action="update.php" method='post'>
			<?php 
$sql=mysql_query("SELECT * FROM alumno",$con);
			echo '<li >Alumno:';
			echo '        <select name="alumno2"id="alumno2" >';
			if (mysql_num_rows($sql) > 0) {
       
   			 while ($row = mysql_fetch_row($sql)) {
        		$ti = $row[2];
        		$idal = $row[0]; 
        
 
		echo '<option value="'.$idal.'">'.$ti.'</option>';

}} 
echo'</select></li>';
			 ?>
		</select></li>
		<div id="materia2"></div>
			<li><label>Modificar Calificacion</label><input type='number' name='calificacion' required step='5'max='100'min='10' ></li>

		</ul>
	
		<input type="submit" name='upd'value="enviar" >
		</div>
		
</form>
</div>
</section>
	
	<footer>
		<small>mario alberto test</small>
   </footer>

<script src="js/magia.js"></script>

<!--<script src="js/google-analytics.js"></script>-->
</body>
</html>
<?php  } ?>