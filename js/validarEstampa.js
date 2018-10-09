

var form = document.getElementById("form");

if(form.addEventListener){
    form.addEventListener("submit", validaCadastro);
}else if(form.attachEvent){
    dorm.addEventListener("onsubmit", validaCadastro);
}

function validaCadastro(evt){

    var nome = document.getElementById('nome').value;
    var img = document.getElementById('img').value;

    var numErros = 0;
    if(nome == ""){
        alert("digite um nome valido");
        numErros++;
    }
    if(img == ""){
        alert("Sem estampa");
        numErros++;
    }
    if (numErros > 0){
        alert("Submit Interrompido");
        evt.preventDefault();
    }

}
