function formatarCPF(input) {
    // Remove tudo que não é número
    var cpf = input.value.replace(/\D/g, "");

    // Limita o CPF a 11 dígitos
    if (cpf.length > 11) {
        cpf = cpf.slice(0, 11);
    }

    // Formata o CPF (XXX.XXX.XXX-XX)
    if (cpf.length <= 11) {
        cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
        cpf = cpf.replace(/(\d{3})(\d)/, "$1.$2");
        cpf = cpf.replace(/(\d{3})(\d{2})$/, "$1-$2");
    }

    // Define o valor formatado de volta no campo
    input.value = cpf;
}

function apenasNum(input, tamanho){
    input.value = input.value.replace(/\D/g, "");

    // Limita o valor a 4 dígitos
    if (input.value.length > tamanho) {
        input.value = input.value.substring(0, tamanho);
    }
}