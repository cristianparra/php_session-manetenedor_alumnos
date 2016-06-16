<?php


$con=mysqli_connect("127.0.0.1","root","178237969","prueba3");

if(mysqli_connect_errno())
{
	echo"Fallo la coneccion a mysql: " . mysqli_connect_error();
}


$sql="UPDATE alumno set ap_pat='$_POST[padre]',ap_mat='$_POST[madre]',nombres='$_POST[nombres]',fecha_nacto='$_POST[fecha]',
	cod_comuna='$_POST[cod_comuna]',cod_sexo='$_POST[radio]',fono='$_POST[fono]',direccion='$_POST[direccion]'
WHERE rut='$_POST[rut]' and dv='$_POST[dv]'";
echo "$sql";

if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}
echo "<script language='javascript'>
	alert('Ha sido actualizado satisfactoriamente');
	document.location=('menu_mante.html');
	</script>";
mysqli_close($con);
?>