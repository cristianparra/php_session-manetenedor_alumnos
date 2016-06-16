<?php


$con=mysqli_connect("127.0.0.1","root","qwerty","prueba3");

if(mysqli_connect_errno())
{
	echo"Fallo la coneccion a mysql: " . mysqli_connect_error();
}

$sql="INSERT INTO alumno (rut,ap_pat,ap_mat,nombres
       fecha_nacto,cod_comuna,sexo,fono,direccion) VALUES('$_POST[$rut." ".$dig]','$_POST[$nomb]','$_POST[$ap]',
	   '$_POST[$apellido_m]','$_POST[$fecha]','$_POST[$value]','$_POST[$comuna]','$_POST[$sexo]','$_POST[$sexo]','$_POST[$fono]','$_POST[$direccion]')";
	   echo "Usuario Creado Exitosamente";
	   echo "<br><br><a href='../index.html'><input name='volver' type='button' value='Ir Pagina Principal'></a>";
	  
if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}

mysqli_close($con);
?>