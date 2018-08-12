/*
Autor: Pedro Barbosa Rocha
Data da última modificação: 12/08/2018

Descriçao: Javascript para validação dos campos do formulário

 */

var form = document.getElementById("form");

if(form.addEventListener){
	form.addEventListener("submit", validaCadastro);
}else if(form.attachEvent){
	dorm.addEventListener("onsubmit", validaCadastro);
}

function validaCadastro(evt){

	var nome = document.getElementById('nome').value;
	var descricao = document.getElementById('descricao').value;
	var tamanho = document.getElementById('tamanho').value;
	var sexo = document.getElementById('sexo').value;
	var modelo = document.getElementById('modelo').value;
	
	var numErros = 0;
	
	if(nome == ""){
		alert("digite um nome valido");
		numErros++;
	}

	if (descricao ==  ""){
		alert('Digite uma descrição');
		numErros++;
	}

	if (tamanho == ""){
		alert('Escolha um tamanho');
		numErros++;
	}

	if (sexo == ""){
		alert('escolha um sexo');
		numErros++;
	}

	if (modelo == ""){
		alert('Escolha um modelo');
		numErros++;
	}

	if (numErros > 0){
		alert("Submit Interrompido");
		evt.preventDefault();	
	}
	
	

}