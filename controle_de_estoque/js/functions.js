//seleciona a apostila
function selecionarApostila(apostila,a){
	document.getElementById("nome_apostila").value = apostila;
	window.location.href = a;
}
//seleciona a apostila
function diminuirApostila(apostila,a){
	document.getElementById("diminuir_apostila").value = apostila;
	window.location.href = a;
}
function editarApostila(apostila,a){
	document.getElementById("editar_apostila").value = apostila;
	document.getElementById("apostila").value = apostila;
	window.location.href = a;
}
//seleciona a apostila que aparecerá para ser excluida
function selecionarExcluir(apostila,a){
	document.getElementById("excluir_apostila").innerHTML = apostila;
	document.getElementById("enviar_apostila").value = apostila;
	window.location.href = a;
}
//navegação
function altLink(a){
	window.location.href = a;
}