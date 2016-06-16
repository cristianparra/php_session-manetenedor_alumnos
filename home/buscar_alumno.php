<?php
session_start();
if(!$_SESSION['nombre']){
   echo "Session no iniciada";
   echo "<br><br><a href='../index.html'><input name='volver' type='button' value='Ir Pagina Principal'></a>";
   return;
}

?>
<html>
<title></title>
<head>

</head>
<body>
<center>
<form name="form" id="form" action="resultado1.php" method="POST">
  <p class="ejemplo"> <b>Rut</b>:&nbsp;&nbsp;&nbsp;
  
    <label for="rut"></label>
  <input type="text" name="rut" id="rut" onkeyUp="ValNumero(this);"/>
  -
  <label for="dig"></label>
  <input type="text" name="dig" id="dig" maxlength="1" size="1" onKeyUp="digito(this);" onchange="validar(this.form);"/> &nbsp;&nbsp;
   <i>Ej:  12345678-9</i>
  
  <br><br>
  <input name="submit" type="submit" value="Enviar">
  </p>
  </form>
</center>
</body>
</html>