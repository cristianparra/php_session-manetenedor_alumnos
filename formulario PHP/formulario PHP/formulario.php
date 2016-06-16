<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<link rel="stylesheet" type="text/css" href="estilo.css" media="screen">-->

<style type="text/css">@import url("css/calendar-blue.css");</style>
<script type="text/javascript" src="js/calendar.js"></script>
<script type="text/javascript" src="js/calendar-es.js" ></script>
<script type="text/javascript" src="js/calendar-setup.js" ></script>
<script languaje="javascript" src="java\script.js">
</script>
<title>Documento sin título</title>
</head>

<body>
<h1>Formulario</h1>
<br>
<form name="form" id="form">
  <p class="ejemplo"> Rut:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
  
    <label for="rut"></label>
  <input type="text" name="rut" id="rut" onkeyUp="ValNumero(this);"/>
  -
  <label for="dig"></label>
  <input type="text" name="dig" id="dig" maxlength="1" size="1" onKeyUp="digito(this);" onchange="validar(this.form);"/> 
   <i>Ej:  12345678-9</i>
  </p>
  </form>

<form id="form1" name="form1" method="post" action="">
<b>
  <p>Nombres:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="nombre"></label>
    <input type="text" name="nombre" id="nombre" />
  </p>
  <p>Apellido Paterno:&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;
    <label for="apaterno_p"></label>
    <input type="text" name="ap" id="ap" />
  </p>
  <p>Apellido Materno: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="apellido_m"></label>
    <input type="text" name="apellido_m" id="apellido_m" />
  </p>
  <p class="fecha">Fecha De Nacimiento: 
  <input name="fecha" size="20" type="text" id="fecha" maxlength="0"/>
    			<script type="text/javascript">
									
										Calendar.setup
										(
											{
												inputField     :    "fecha",      // id of the input field
												ifFormat       :    "%d/%m/%Y",       // format of the input field
												showsTime      :    false,            // will display a time selector
												button         :    "button",   // trigger for the calendar (button ID)
												singleClick    :    false,           // double-click mode
												step           :    1                // show all years in drop-down boxes (instead of every other year as default)
											}
										);
										
									</script>
      </p>
      region:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<select id="region" onchange="visiblec();">
	<option </option>
	<option value="15">XV</option>
	<option value="1">I</option>
	<option value="2">II</option>
	<option value="3">III</option>
	<option value="4">IV</option>
	<option value="5">V</option>
	<option value="13">RM</option>
	<option value="6">VI</option>
	<option value="7">VII</option>
	<option value="8">VIII</option>
	<option value="9">IX</option>
	<option value="14">XIV</option>
	<option value="10">X</option>
	<option value="11">XI</option>
	<option value="12">XII</option>
	</select>	
  <p>Comuna:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
    <label for="comuna"></label>
    <input type="text" name="comuna" id="comuna" />
  </p>
  <p>Sexo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;masculino
    	  	<input type="radio" name="radio" id="masculino" value="masculino" />
    <label for="masculino"></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;femenino
    <input type="radio" name="radio" id="femenino" value="femenino" />
    <label for="femenino"></label>
  </p>
  <p>Fono:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <label for="fono"></label>
    <input type="text" name="fono" id="fono" />
  </p>
  <p>Direccion:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <label for="direccion"></label>
    <input type="text" name="direccion" id="direccion" />
  </p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="boton"type="submit" value="enviar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input name="borrar"type="reset"id="borrar"
 value="borrar"><br>
  <p>&nbsp;</p>
  </b>
</form>
</body>
</html>