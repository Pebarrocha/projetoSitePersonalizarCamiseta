

var form = document.getElementById("form");

if(form.addEventListener){
    form.addEventListener("submit", validaCadastro);
}else if(form.attachEvent){
    dorm.addEventListener("onsubmit", validaCadastro);
}

function validaCadastro(evt){

    var nome = document.getElementById('nome').value;
    var cnpj = document.getElementById('cnpj').value;
    var nomef = document.getElementById('nomef').value;
    var tel = document.getElementById('tel').value;
    var rua = document.getElementById('rua').value;
    var cidade = document.getElementById('cidade').value;
    var cep = document.getElementById('cep').value;
    var bairro = document.getElementById('bairro').value;


    var numErros = 0;
    if(nome == ""){
        alert("digite um nome valido");
        numErros++;

    }

    if (cnpj == ""){
        alert('CNPJ em branco');
        numErros++;
    }

    if (nomef == ""){
        alert('Nome Fantasia em branco');
        numErros++;
    }
    if (tel == ""){
        alert('Telefone em branco');
        numErros++;
    }
    if (rua == ""){
        alert('Rua em branco');
        numErros++;
    }
    if (cidade == ""){
        alert('Cidade em branco');
        numErros++;
    }
    if (cep == ""){
        alert('CEP em branco');
        numErros++;
    }
    if (bairro == ""){
        alert('Bairro em branco');
        numErros++;
    }

    if (numErros > 0){
        alert("Submit Interrompido");
        evt.preventDefault();
    }



}
