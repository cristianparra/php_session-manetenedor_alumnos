<?php


$con=mysqli_connect("127.0.0.1","root","178237969","prueba3");

if(mysqli_connect_errno())
{
	echo"Fallo la coneccion a mysql: " . mysqli_connect_error();
}


$sql="UPDATE subscripcion set rut='$_POST[rut]',fecha='$_POST[fecha]',usu_cod='$_POST[usuario]'
WHERE correlativo='$_POST[correlativo]'";


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