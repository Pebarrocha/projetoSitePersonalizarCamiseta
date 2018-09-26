/*
Autor: Felipe Santiago Procópio	
Data da última modificação: 18/08/2018

Descriçao: Javascript para validação dos campos do formulário

 */



var form = document.getElementById("form");
if(form.addEventListener){
	form.addEventListener("submit", validaCadastro);
}else if(form.attachEvent){
	dorm.addEventListener("onsubmit", validaCadastro);
}

function validaCadastro(evt){

	
	var email = document.getElementById('email').value;
	var senha = document.getElementById('senha').value;	
	var numErros=0;


	if (email == ""){
		alert('Campo EMAIL em branco');
		numErros++;	

	}

	if (senha == ""){
		alert('Campo SENHA em branco');
		numErros++;	
	}

	if(numErros > 0){
		evt.preventDefault();
	}

	
	

}