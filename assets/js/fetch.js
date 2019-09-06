$('#Id_No').change(function(){
	$.getJSON(
		'fetch.php',
		'Id_No='+$('#Id_No').val(),
		function(result){
			$('#item').empty();
			$.each(result.result, function(){
				$('#item').append('<option>'+this['item']+'</option>');
			});
		}
	);
});