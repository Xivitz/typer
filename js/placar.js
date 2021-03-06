$('#btn-placar').click(mostraPlacar);


function inserePlacar () {
	var corpoTabela = $('.placar').find('tbody');
	var usuario = 'Matheus';
	var numPalavras = $('#contador-palavras').text();
	
	var linha = novaLinha(usuario, numPalavras);
	linha.find('.botao-remover').click(removeLinha);


	corpoTabela.append(linha);
	$('.placar').slideDown(500);
	scrollPlacar();
}

function scrollPlacar () {
	var placar = $('.placar').offset().top;
	$('body').animate(
	{
		scrollTop: placar + 'px'
	}, 700);
}

function novaLinha (usuario, palavras) {
	var linha = $('<tr>');
	var colunaUsuario = $('<td>').text(usuario);
	var colunaPalavras = $('<td>').text(palavras);
	var colunaRemover = $('<td>');
	var link = $('<a>').addClass('botao-remover').attr('href', '#');
	var icone = $('<i>').addClass('small').addClass('material-icons').text('delete');

	link.append(icone);
	colunaRemover.append(link);
	linha.append(colunaUsuario);
	linha.append(colunaPalavras);
	linha.append(colunaRemover);

	return linha;

}	

function removeLinha () {
	event.preventDefault();
	var linha = $(this).parent().parent();
	linha.fadeOut(700);
	setTimeout(function(){
		linha.remove();
	},700);
}

function mostraPlacar () {
	$('.placar').stop().slideToggle(700);
}