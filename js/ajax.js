//abriremos conexion en nuestro servidor para realizar el envio de datos a nuestro php para que procese los datos
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
		}
	}
	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}


//INGRESAR DATOS
// function Registrar(){
// titulo = document.frmArticulos.titulo.value;
// extracto = document.frmArticulos.extracto.value;
// texto = document.frmArticulos.texto.value;
// thumb = document.frmArticulos.thumb.value;
// // alert("Datos "+titulo+" "+extracto+" "+texto+" "+thumb);
// ajax = objetoAjax();
// ajax.open("POST", "nuevo.php", true);
// ajax.onreadystatechange=function() {   
// 		if (ajax.readyState==4) {
// 			alert('Los datos fueron guardados con exito!');
//       window.location.reload(true);  //para recargar la pagina y obtener todos nuestros datos nuevamente
// 		}
// 	}
// ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); //para codificar y ocultar los valores enviados
// ajax.send("titulo="+titulo+"&extracto="+extracto+"&texto="+texto+"&thumb="+thumb); //se establecera los datos que vamos enviar a nuestro archivo nuevo.php
// }




function Registrar(){
	var parametros = new FormData($("#frmArticulos")[0]);
	$.ajax({
		data: parametros,
		url: "nuevo.php",
		type: "POST",
		contentType: false,
		processData: false,
		beforesend: function(){

		},
		success:function(response){
			$('#frmArticulos')[0].reset();
			alert('Los nuevo post a sido guardado exitosamente');
			// $('#contenedor').load("index.php");
			window.location.reload();
		}

	});
// var url= 'nuevo.php';
// $.ajax({
// 	type:'POST',
// 	url:url,
// 	data: $('#frmArticulos').serialize(),
	
}



//Modificar

function Modificar(){
	var parametros = new FormData($("#formulario")[0]);
	$.ajax({
		data: parametros,
		url: "editar.php",
		type: "POST",
		contentType: false,
		processData: false,
		beforesend: function(){

		},
		success:function(response){
			// var valor = response

			// if(valor == 1){
			alert('El articulo se a modificado exitosamente');
			// $('#contenedor').load("admin_index.view.php");
			location.href="admin_index.view.php";

		}		// }

	});
// var url= 'nuevo.php';
// $.ajax({
// 	type:'POST',
// 	url:url,
// 	data: $('#frmArticulos').serialize(),
	
}


//modificar usuario
$(function(){
	$("#botonnico").click(function(){
		var url="editar.php";
		$.ajax({
			type:"post",
			url:url,
			data:$("#formulariomodificar").serialize(),
			success:function(data){
				// $("#resultado").html(data);
				alert('El articulo se a modificado exitosamente');
				location.href="index.php";
			}
		});
	return false;	
	});
});		






//eliminar


//modificar articulo
$(function(){
	$("#botonEli").click(function(){
		var url="borrar2.php";
		$.ajax({
			type:"post",
			url:url,
			data:$("#formularioEliminar").serialize(),
			success:function(data){
				// $("#resultado").html(data);
				alert('El articulo se a eliminado exitosamente');
				location.href="index.php";
			}
		});
	return false;	
	});
});		
















// function Eliminar(idP){
// if(confirm("En realizad desea eliminar este registro?")){
// ajax = objetoAjax();
// ajax.open("POST", "clases/eliminar.php", true);
// ajax.onreadystatechange=function() {
// 		if (ajax.readyState==4) {
// 			alert('El registro fue eliminado con exito!');
//       window.location.reload(true);
// 		}
// 	}
// ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
// ajax.send("idP="+idP)
// }else{
//   //Sin acciones
// }
// }