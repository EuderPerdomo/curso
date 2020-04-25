function muestra_oculta(id){
if (document.getElementById){ //se obtiene el id
var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
}
}

window.onload = function(){/*hace que se cargue la función lo que predetermina que div 
	estará oculto hasta llamar a la función nuevamente*/
muestra_oculta('oculto');/* "oculto" es el nombre que le dimos al DIV */
}


function ocultar(){
	document.getElementById('oculto').style.display="none";
}
function mostrar(){
	
	document.getElementById('oculto').style.display="block";
}



 