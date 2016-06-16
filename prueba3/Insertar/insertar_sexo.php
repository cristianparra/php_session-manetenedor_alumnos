
<?php


$con=mysqli_connect("127.0.0.1","root","178237969","prueba3");

if(mysqli_connect_errno())
{
	echo"Fallo la coneccion a mysql: " . mysqli_connect_error();
}


$sql="INSERT INTO sexo (cod_sexo, descripcion)
VALUES
('$_POST[codigosexo]','$_POST[descrip]')";

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
