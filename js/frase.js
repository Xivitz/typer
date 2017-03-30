
// Ainda não funciona

$('#btn-frase').click(fraseAleatoria);

function fraseAleatoria () {
	$.get('frases.php', trocaFraseAleatoria);
};

function trocaFraseAleatoria (data) {
	var frase = $('.frase');
    var numAleatorio = Math.floor(Math.random() * data.length);
    frase.text(data[numAleatorio].texto);
    atualizaTamanhoFrase();
}