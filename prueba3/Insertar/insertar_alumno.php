<?php


$con=mysqli_connect("127.0.0.1","root","178237969","prueba3");

if(mysqli_connect_errno())
{
	echo"Fallo la coneccion a mysql: " . mysqli_connect_error();
}


$sql="INSERT INTO alumno (rut, dv, ap_pat, ap_mat, nombres, fecha_nacto, cod_comuna, cod_sexo, fono, direccion)
VALUES
('$_POST[rut]','$_POST[dv]','$_POST[ap_pat]','$_POST[ap_mat]','$_POST[nombres]','$_POST[fecha]',
	'$_POST[cod_comuna]','$_POST[radio]','$_POST[fono]','$_POST[direccion]')";

if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}
echo "<script language='javascript'>
	alert('Ha sido insertado satisfactoriamente');
	document.location=('menu_in.html');
	</script>";
mysqli_close($con);
?>
