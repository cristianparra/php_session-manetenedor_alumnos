<?php
session_start();
if(!$_SESSION['nombre']){
   echo "Session no iniciada";
   echo "<br><br><a href='../index.html'><input name='volver' type='button' value='Ir Pagina Principal'></a>";
   return;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Menu Principal Administrador Sistema Web V 1.0</title>
<link rel="StyleSheet" href="css/menuadmin.css" media="all" type="text/css">
</head>

<body>
<center><h1>Menu Principal Administrador Sistema Web V 1.0</h1></center><hr><br>
<div id="menuvertical"> 
<ul> 

<li class="nivel1 primera"><a href="#" class="nivel1">Mantenedor Alumnos</a> 
<ul> 
<li class="primera"><a href="buscar_alumno.php">Buscar Alumno</a></li> 
<li><a href="URL del enlace">Otros</a></li>
</ul> 
</li>


<li class="nivel1"><a href="#" class="nivel1">Revistas</a> 
<ul> 
<li class="primera"><a href="URL del enlace">Crear Revista Nueva</a></li>
<li><a href="URL del enlace">Todas las Revistas</a></li> 
<li><a href="URL del enlace">Pestaña 2.3</a></li>
<li><a href="URL del enlace">Pestaña 2.4</a></li> 
<li><a href="URL del enlace">Pestaña 2.5</a></li> 
</ul> 
</li> 


<li class="nivel1"><a href="#" class="nivel1">Pestaña 3</a> 
<ul>
<li class="primera"><a href="URL del enlace">Pestaña 3.1</a></li> 
<li><a href="URL del enlace">Pestaña 3.2</a></li> 
<li><a href="URL del enlace">Pestaña 3.3</a></li> 
</ul> 
</li> 


<li class="nivel1"><a href="#" class="nivel1">Pestaña 4</a> 
<ul> 
<li class="primera"><a href="URL del enlace">Pestaña 4.1</a></li> 
<li><a href="URL del enlace">Pestaña 4.2</a></li> 
<li><a href="URL del enlace">Pestaña 4.3</a></li> 
<li><a href="URL del enlace">Pestaña 4.4</a></li> 
</ul> 
</li> 


<li class="nivel1"><a href="#" class="nivel1">Pestaña 5</a> 
<ul> 
<li class="primera"><a href="URL del enlace">Pestaña 5.1</a></li> 
<li><a href="URL del enlace">Pestaña 5.2</a></li> 
</ul> 
</li> 

</ul> 
</div>

<br><p><h1 style="font-size:1em">Fecha del Dia: </h1><i>
<script>
var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var f=new Date();
document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
</script>
</i></p>

<div id="cerrarventana">
<br><a href="salir.php"><input name="cmd_abrir" type="button" value="Salir"></input></a>
</div>

</body>

</html>