
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
//validacion de usuario/contraseña correctas
function valida(){
	var usuario = document.getElementById('usuario');
	var pass = document.getElementById("password");

	if((usuario.value == "")||(pass.value == "")){
		window.alert("Los campos usuario y contraseña no pueden estar vacios");
	}
}

//validacion nuevo post

    function validar() {
    	var titulo, extracto, texto, imagen;
    	titulo = document.getElementById("titulo").value;
    	extracto = document.getElementById("extracto").value;
    	texto = document.getElementById("texto").value;
    	imagen = document.getElementById("imagen").value;

    	if (titulo == "" || extracto == "" || texto == "" || imagen == "") {
    		alert("Todos los campos son obligatorios");
    		return false;
    	}else if (titulo.length > 30) {
    		alert("El titulo es muy largo");
    		return false;
    	}else if (extracto.length > 50) {
    		alert("El extracto es muy largo");
    		return false;
    	}

    }
