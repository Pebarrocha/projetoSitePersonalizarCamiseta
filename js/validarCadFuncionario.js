

var form = document.getElementById("form");

if(form.addEventListener){
    form.addEventListener("submit", validaCadastro);
}else if(form.attachEvent){
    dorm.addEventListener("onsubmit", validaCadastro);
}

function validaCadastro(evt){

    var nome = document.getElementById('nome').value;
    var cpf = document.getElementById('cpf').value;
    var senha = document.getElementById('senha').value;
    var Soma;
    var Resto;

    var numErros = 0;

    if(nome == ""){
        alert("digite um nome valido");
        numErros++;
    }
    Soma = 0;
    if (cpf == "00000000000") {
        alert("digite um CPF valido");
        numErros++;
    }

    for (i = 1; i <= 9; i++) Soma = Soma + parseInt(cpf.substring(i - 1, i)) * (11 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(cpf.substring(9, 10))) {
        alert("digite um CPF valido");
        numErros++;
    }

    Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(cpf.substring(i - 1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11)) Resto = 0;
    if (Resto != parseInt(cpf.substring(10, 11))) {
        alert("digite um CPF valido");

        numErros++;
    }

    if (cpf ==  ""){
        alert('Digite uma descrição');
        numErros++;
    }

    if (senha == ""){
        alert('Escolha um tamanho');
        numErros++;
    }

    if (numErros > 0){
        alert("Submit Interrompido");
        evt.preventDefault();
    }



}
