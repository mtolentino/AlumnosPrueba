
<?php
include('conexion.php');
$alumnos=$_POST['alumno2'];
//echo 'd'.$alumnos;
$sql=mysql_query("SELECT * FROM materia inner join alumno_materia on id_materia= materia.id where id_alumno=$alumnos",$con);
            echo '<li >Materia:';
            echo '        <select name="materia2" id="materia3"  " >';

            if (mysql_num_rows($sql) > 0) {
       
             while ($row = mysql_fetch_row($sql)) {
                $ti = $row[1]; 
                $cal = $row[5];
                $id2 = $row[2]; 



        echo '<option value="'.$id2.'">'.$ti.'&nbsp;<strong>'.$cal.'</strong></option>';
 
}

}

?>
</seleted>