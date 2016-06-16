<?php
session_start();
$con=mysqli_connect("127.0.0.1","root","jaime123","prueba3") or die("Error al conectarse a la BD");
$nombre=$_POST['usuario']; 
$clave=md5($_POST['clave']);

$consulta=mysqli_query($con,"select * from usuario");

if($nombre=="administrador" && $clave=="5afb9bcb73acf95a28aa35dbd9acdbda"){
   echo "Usuario Correcto"; 
   $_SESSION['nombre'] = $_POST['nom'];
   echo "<br><br><a href='home/home_admin.php'><input name='volver' type='button' value='Ir Pagina Principal'></a>";
}
else{
while($row=mysqli_fetch_array($consulta)){
 if($row['usu_cod']==$nombre && $row['clave']==$clave){
   echo "Pagina en Mantencion";
   
   break;
}
}
}

   //echo "Usuario no Existente";
   //echo "<br><br><a href='index.html'><input name='volver' type='button' value='Volver Atras'></a>";

mysqli_close($con);

   


?>
