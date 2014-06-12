// JavaScript Document

$('.subircarnet').click(function () {
	$(".div-encontre").slideToggle();
	$(this).toggleClass("abierto");

	$(".div-perdi").slideUp();
	$("#error").fadeOut(500);
	$("#exito").fadeOut(500);
	$(".encontrarcarnet").removeClass("abierto");
});		
$('.encontrarcarnet').click(function () {
	$(".div-perdi").slideToggle();
	$(this).toggleClass("abierto");
	
	$(".div-encontre").slideUp();
	
	$("#error").fadeOut(500);
	$("#exito").fadeOut(500);
	$(".subircarnet").removeClass("abierto");
});		

$('.suerte').click(function () {
	$("#exito").removeClass('ocultar');
	$("#error").removeClass('ocultar');
});

$('#rutencontrado').Rut({
  on_error: function(){ alert('¿Estás seguro que el rut ingresado es real?'); },
  format_on: 'keyup'
});		
$('#rutperdido').Rut({
  on_error: function(){ alert('¿Estás seguro que el rut ingresado es real?'); },
  format_on: 'keyup'
});		



/*$(document).ready(function() {
	$("#formperdido").validate({
		rules: {
	    	field: {
				required: true,
				email: true
	    	}
		},
		submitHandler: function(form) {
			form.submit();
		}
	});
});*/