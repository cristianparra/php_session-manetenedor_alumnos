<?php
session_start();
if(!$_SESSION['nombre']){
   echo "Session no iniciada";
   echo "<br><br><a href='../index.html'><input name='volver' type='button' value='Ir Pagina Principal'></a>";
   return;
}
else{ 
      session_destroy();
      header("Location: ../index.html");
   }

?>
