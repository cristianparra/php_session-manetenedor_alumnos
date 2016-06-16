<?php
session_start();
?>
<html>
<head>
<script language="javascript" src="js/script.js">
</script>
<title>menu</title>
</head>

<body background="../images/inicio.png">
<ol type="circle">
    <li><a href="formulario.php" target="centro">Gestion Mantenedor</a></li>
	<li><a href="#" target="centro">Datos Alumnos</a></li>
	<li><a href="#" target="centro">Encuestas</a></li>
	<li><a href="#" target="centro">Otros</a></li>
</ol>

<br><br><input name="volver" type="button" value="Salir" onclick="cerrarHome();">

</body>
</html>
