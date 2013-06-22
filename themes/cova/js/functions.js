$(document).ready(function(){

	//DEFINIMOS EL ALTO DE LA VENTANA

	var altoVentana = $(window).height();
	var altoVentanasinHeader = altoVentana - 60;
	var mitadVentana = altoVentana / 2;
	console.log(altoVentana);

	$('header').height(altoVentana + 'px');
	$('#logo').css('marginTop', '' + mitadVentana - 100 + 'px');
});