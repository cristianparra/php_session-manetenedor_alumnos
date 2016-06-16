//by matias moya
	//esta funcion sirve para validar el rut
function validar(formulario) {
var rut = formulario.rut.value;
var dig=formulario.dig.value;
var count = 0;
var count2 = 0;
var factor = 2;
var suma = 0;
var sum = 0;
var digito = 0;
count2 = rut.length - 1;
	while(count < rut.length) {

		sum = factor * (parseInt(rut.substr(count2,1)));
		suma = suma + sum;
		sum = 0;

		count = count + 1;
		count2 = count2 - 1;
		factor = factor + 1;

		if(factor > 7) {
			factor=2;
		}

	}
digito = 11 - (suma % 11);

if (digito == 11) {
	digito = 0;
}
if (digito == 10) {
	digito = "k";
}
if(dig != digito){
	alert("rut incorecto");
	clear();
	Focus();
}
}

function digito(){

}

	// entre las comillas simples ingresa el formulario a limpiar.
function clear(){
	document.getElementById('form').reset();
}

	//para poner el focus donde uno quiera :D 
function Focus(){
document.form.rut.focus();
}

	// para tener la fecha y la hora xD
function hora(){
setInterval(function(){
            document.getElementById('fecha').innerHTML = new Date();
      },1000);	
}

	//funcion prompt al estilo JOptionPanel...
function Prompt(){
var nombre = prompt("Introduzca su nombre");

if (confirm("¿Seguro que su nombre es "+nombre+"?")) {
	alert("Hola "+nombre);
}
else{
alert("usted no es "+nombre);	
}
}

	// esta funcion permite ingresar solo muneros 
function Solo_Numerico(variable){
        Numer=parseInt(variable);
        if (isNaN(Numer)){
            return "";
}
        return Numer;
}
function ValNumero(Control){
        Control.value=Solo_Numerico(Control.value);
}
	// aqui termina la funcion de validar solo numeros

	//esto permite solo numeros y la letra K 	
function digito(dig){
if(dig.value=='k' || dig.value=='K'){
return dig.value;
}
else{
dig.value=Solo_Numerico(dig.value);
}
}


function mayuscula(mayuscula){
mayuscula.value=mayuscula.value.toUpperCase();	
}
