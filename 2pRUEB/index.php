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
addEventListener('DOMContentLoaded', function(){
        move('logo')
          .x(500)
          .y(200)
          .ease('in-out')
          .then()
            .x(-500)
            .then()
              .y(-200)
              .duration('2s')
              .delay('.5s')
              .rotate(360)
              .pop()
            .pop()
          .end();
      }, false);
     </script>
	
</head>
<body>
	
		
	<header>
		<h1>Acceso</h1>
	</header>

	
<section id="container">
	<form method="post" action="valida.php">
	<div id="enter">
		<img id='logo' src="log.png"><br>
	<span class='xmen'>Nombre:</span><br><input value='mario' name='usu'><br>
	<span class='xmen'>Clave:</span><br><input value='123'name='pas'><br>
	<input type='submit'>
</form>
	</div>
</section>
	

	<footer>
		<small>mario alberto test</small>
   </footer>

<script src="js/move.js"></script>

<!--<script src="js/google-analytics.js"></script>-->
</body>
</html>
