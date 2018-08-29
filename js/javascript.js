
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function valida(){
	var usuario = document.getElementById('usuario');
	var pass = document.getElementById("password");

	if((usuario.value == "")||(pass.value == "")){
		window.alert("Los campos usuario y contraseña no pueden estar vacios");
	}else{
			envia('login');
	}
}