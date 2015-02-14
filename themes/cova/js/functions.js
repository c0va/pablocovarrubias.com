$(document).ready(function(){

	//DEFINIMOS EL ALTO DE LA VENTANA

	var altoVentana = $(window).height();
	var altoVentanasinHeader = altoVentana - 60;
	var mitadVentana = altoVentana / 1.2;
	console.log(altoVentana);

	$('header').height(mitadVentana + 'px');
	$('#logo').css('marginTop', '' + mitadVentana / 2 - 50 + 'px');

	var imagen = Math.floor((Math.random()*14)+1);
	$('header').css('background-image', 'url(http://pablocovarrubias.com/wp-content/themes/cova/images/bg/' + imagen + '.jpg)')


});