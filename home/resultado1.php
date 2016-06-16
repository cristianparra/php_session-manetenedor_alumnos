<?php
session_start();
if(!$_SESSION['nombre']){
   echo "Session no iniciada";
   echo "<br><br><a href='../index.html'><input name='volver' type='button' value='Ir Pagina Principal'></a>";
   return;
}
$rutt = $_POST['rut'];

$res = mysqli_query("Select * from alumno");


while($row=mysqli_fetch_array($res)){
		if($row['rut']==$rut){
			echo "Alumno encontrado<br><br>";
			
			return;
		}

}
?>

