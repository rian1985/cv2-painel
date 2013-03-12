$(document).ready(function() {
	
	$('form.validavel').submit(function(event) {
		$('.erro', this).hide();
		
		var valido = true;
		$('*:input:not(.bypass)', this).each(function(i) {
			var input = $(this);

			if (input.attr('disabled'))
				return;
			
			var inputValido = true;
			if (input.hasClass('obrigatorio'))
				inputValido = inputValido && $.trim(input.val()).length > 0;
			
			if (input.hasClass('email'))
				inputValido = inputValido && /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/.test(input.val());
			if (input.hasClass('cpf'))
				inputValido = inputValido && /^([0-9]{3}\.){2}[0-9]{3}-[0-9]{2}|[0-9]{11}$/.test(input.val());
			if (input.hasClass('cep'))
				inputValido = inputValido && /^[0-9]{5}-[0-9]{3}$/.test(input.val());
			if (input.hasClass('rg'))
				inputValido = inputValido && /^[0-9]{10}$/.test(input.val());
			if (input.hasClass('date'))
				inputValido = inputValido && /^\d{2}\/\d{2}\/\d{4}$/.test(input.val());
			if (input.hasClass('time'))
				inputValido = inputValido && /^([01]\d|2[0-3]):[0-5]\d$/.test(input.val());
			if (input.hasClass('inteiro'))
				inputValido = inputValido && /^\d+$/.test(input.val());
			
			valido = valido && inputValido;
			
			if (!inputValido) {
				var e = input;
				while (e.parent().size() > 0) {
					var erro = e.siblings('.erro');
					if (erro.size() > 0) {
						erro.fadeIn();
						break;
					}
					e = e.parent();
				}
			}
		});
		
		if (!valido)
			event.preventDefault();
		return valido;
	});
	
	$('.ListagemVeiculos').mouseover(function(){
		$('.ItensAcao').show();
	});
	
	$('.ListagemVeiculos').mouseout(function(){
		$('.ItensAcao').hide();
	});
	
	$('.ListagemMensagens').mouseover(function(){
		$('.ItensAcao').show();
	});
	
	$('.ListagemMensagens').mouseout(function(){
		$('.ItensAcao').hide();
	});
	
	$('.ListagemVendedores').mouseover(function(){
		$('.ItensAcao').show();
	});
	
	$('.ListagemVendedores').mouseout(function(){
		$('.ItensAcao').hide();
	});
	
	$('.ListagemMenus').mouseover(function(){
		$('.ItensAcaoMenus').show();
	});
	
	$('.ListagemMenus').mouseout(function(){
		$('.ItensAcaoMenus').hide();
	});
	
});