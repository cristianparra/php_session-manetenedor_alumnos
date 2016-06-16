<?php


$con=mysqli_connect("127.0.0.1","root","178237969","prueba3");

if(mysqli_connect_errno())
{
	echo"Fallo la coneccion a mysql: " . mysqli_connect_error();
}


$sql="INSERT INTO comuna (cod_comuna, descripcion, cod_region)
VALUES
('$_POST[comuna]','$_POST[descrip]','$_POST[region]')";

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
