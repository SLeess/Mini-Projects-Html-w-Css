function verificado(element, conteudo, tipo){
    //1 -> valido
    if(tipo == 1){
        if(conteudo != ''){
            element.classList.add('is-valid');
            element.classList.remove('is-invalid');
        } else{
            element.classList.remove('is-valid');
            element.classList.add('is-invalid');
        }
    }

    //1 -> esconder
    if(tipo == 2){
        if(conteudo != ''){
            element.classList.add('hide');
        } else{
            element.classList.remove('hide');
        }
    }
}

function verificaSenha(atualSenha){
    var validador = document.querySelector("#passwordValidation");
    var senha1 = document.getElementById('senha').value;

    if(atualSenha == senha1 || atualSenha == ""){
        validador.classList.add("hide");
    } else{
        validador.classList.remove("hide");
    }
}
