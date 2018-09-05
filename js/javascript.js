
//validacion de usuario/contraseña correctas
function valida(){
	var usuario = document.getElementById('usuario');
	var pass = document.getElementById("password");

	if((usuario.value == "")||(pass.value == "")){
		window.alert("Los campos usuario y contraseña no pueden estar vacios");
        return false;
	}
}

//validacion modificar

    function validar() {
    	var titulo, extracto, texto;
    	titulo = document.getElementById("titulo").value;
    	extracto = document.getElementById("extracto").value;
    	texto = document.getElementById("texto").value;
    	

    	if (titulo == "" || extracto == "" || texto == "") {
    		window.alert("Todos los campos son obligatorios");
    		return false;
    	}else if (titulo.length > 30) {
    		window.alert("El titulo es muy largo");
    		return false;
    	}else if (extracto.length > 50) {
    		window.alert("El extracto es muy largo");
    		return false;
    	}

    }

//validacion nuevo post

//validacion nuevo post

    function validarnuevo() {
        var titulo, extracto, texto;
        titulo = document.getElementById("titulo").value;
        extracto = document.getElementById("extracto").value;
        texto = document.getElementById("texto").value;
        

        if (titulo == "" || extracto == "" || texto == "" || thumb == "") {
            window.alert("Todos los campos son obligatorios");
            return false;
        }else if (titulo.length > 30) {
            window.alert("El titulo es muy largo");
            return false;
        }else if (extracto.length > 50) {
            window.alert("El extracto es muy largo");
            return false;
        }

    }



//Parallax
$(document).ready(function(){
    $(window).scroll(function(){    //mencionamos el evento
        var barra = $(window).scrollTop(); //asignamos a una variable la posicion del scroll
        var posicion = barra * 0.10;  // al mover el scroll lo multiplicaremos

        $('body').css({
            'background-position': '0 -' + posicion + 'px' // el primer cero equivale a la posicion horizontal por lo que, lo que sigue es el valor de la variable posicion(movimiento vertical)
        });
    });
});

//busqueda

// $(function(){

// });

// function buscar_datos(consulta){
//     $.ajax({
//         url: 'buscar.php',
//         type: 'POST',
//         dataType: 'php',
//         data: {consulta: consulta},
//     })
//     .done(function(respuesta){
//         $("#datos").php(respuesta);
//     })
//     .fail(function(){
//         console.log("error");
//     })
// }

