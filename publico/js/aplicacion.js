$(document).foundation();

$('#idiomaSelect').change(function(){
	$('#formularioIdioma').submit();
});

$("#masCaract").click(function(){
	var caracteristicasAdd =  $("#caracteristicasAdd").html()+'<input  type="text" name="carateristicas[]" placeholder="Caracteristicas" required >';
	$('#caracteristicasAdd').html(caracteristicasAdd);
});
$("#masDesc").click(function(){
	var caracteristicasAdd =  $("#descrip").html()+' <textarea name="info[]" placeholder="Descripcion"></textarea>';
	$('#descrip').html(caracteristicasAdd);
});