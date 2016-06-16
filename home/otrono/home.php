<?php
session_start();
if(!$_SESSION['nombre']){
   echo "Session no iniciada";
   echo "<br><br><a href='../index.html'><input name='volver' type='button' value='Ir Pagina Principal'></a>";
}
else{

}
?>
<html>
<frameset rows="70,*" framespacing="3" frameborder="yes" border="3" bordercolor="black">
  <frame src="titulo.php" name="marcosuperior" frameborder="yes" scrolling="yes" noresize>
  <frameset cols="150,*" framespacing="3" frameborder="yes" border="3" bordercolor="black">
    <frame src="menu.php" name="marcoizquierdo" scrolling="yes" noresize>
    <frame src="inicio.php" name="centro">
  </frameset>
</frameset>
</html>
