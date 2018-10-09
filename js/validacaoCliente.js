
// Autor: Felipe Santiago Procópio
// Data da última modificação: 18/08/2018
//
// Descriçao: Javascript para validação dos campos do formulário


var form = document.getElementById("form");

if(form.addEventListener){
	form.addEventListener("submit", validaCadastro);
}else if(form.attachEvent){
	dorm.addEventListener("onsubmit", validaCadastro);
}

function validaCadastro(evt){

	var nome = document.getElementById('nome').value;
	var cpf = document.getElementById('cpf').value;
	var rg = document.getElementById('rg').value;
	var celular = document.getElementById('celular').value;
	var fixo = document.getElementById('fixo').value;
	var rua = document.getElementById('rua').value;
	var numero = document.getElementById('numero').value;
	var bairro = document.getElementById('bairro').value;
	var cidade = document.getElementById('cidade').value;
	var cep = document.getElementById('cep').value;
	var descricao = document.getElementById('descricao').value;
	var email = document.getElementById('email').value;
	var senha = document.getElementById('senha').value;
	var senha2= document.getElementById('senha2').value;
	var numErros=0;
	


	if(nome == ""){
		alert('Campo NOME em branco!');
		numErros++;
	}

	if (cpf ==  ""){
		alert('Campo CPF em branco');
		numErros++;
	}

	if (rg == ""){
		alert('Campo RG em branco');
		numErros++;
	}

	if (rua == ""){
		alert('Campo RUA em branco');
		numErros++;
	}

	if (bairro == ""){
		alert('Campo BAIRRO em branco');
		numErros++;
	}

	if (cidade == ""){
		alert('Campo CIDADE em branco');
		numErros++;	
	}
	
	if (numero == ""){
		alert('Campo NUMERO em branco');
		numErros++;	
	}

	if (cep == ""){
		alert('Campo CEP em branco');
		numErros++;
	}

	if (fixo == ""){
		alert('Campo FIXO em branco');
		numErros++;	
	}

	if (celular == ""){
		alert('Campo CELULAR em branco');
		numErros++;	
	}

	if (email == ""){
		alert('Campo EMAIL em branco');
		numErros++;	
	}

	if (senha == ""){
		alert('Campo SENHA em branco');
		numErros++;	
	}

	if (senha2 == ""){
		alert('Campo CONFIRMAÇÃO DE SENHA em branco');
		numErros++;	
	}

	if(senha != senha2){
		alert('As senhas digitadas estão diferentes!');
		numErros++;
	}

	if(numErros > 0){
		evt.preventDefault();
	}
	
	

}

 