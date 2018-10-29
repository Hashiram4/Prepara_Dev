$(document).ready(function($) {

	$('#selectUnidade').hide();

	var unidade = $.getJSON("js/unidades.json", function(result){
        for (var i = 0; i < result.unidades.length; i++) {
			$('#selectEstados').append('<option value="'+i+'">'+result['unidades'][i]['nome']+'</option>');
		}
    });

    $('#selectEstados').on('change', function() {
		if(this.value == 'false') $('#selectUnidade').hide();
		else
		{
			var cidades = unidade.responseJSON.unidades[this.value]['cidades'];
			$('#selectUnidade').html('<option value="false">Escolha uma Unidade...</option>');

			for (var i = 0; i < cidades.length; i++) $('#selectUnidade').append('<option value="'+cidades[i]+'">'+cidades[i]+'</option>');

			$('#selectUnidade').show();
		}
	});

});