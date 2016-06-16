<?php
$con=mysqli_connect("127.0.0.1","root","jaime123","prueba3") or die("Error al conectarse a la BD"); 

$nombre=$_POST['user_in']; 
$clave=md5($_POST['pas_in']);

$sql="INSERT INTO usuario (usu_cod, clave) 
VALUES('$nombre','$clave')";
	 
	 if(!mysqli_query($con,"$sql")){
	     die ('Error: ' .mysqli_error($con));
	 }
	 echo "Solo Faltan Algunos datos importantes!!";
	 echo "<br><br><a href='home/inscribir.php'><input name='volver' type='button' value='Llenar Formulario de Usuario'></a>";
	 
mysqli_close($con);
?>