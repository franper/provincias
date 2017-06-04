$(document).ready(function(){
	

	$('#provincia').on('propertychange input',function(){
		var provincia = $("#provincia").val();
		var route = 'http://localhost:8000/';
		$.ajax({
			url: route,
			type: 'POST',
			dataType: 'json',
			data:{ 
				provincia: provincia
			}
		});
	});
});