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

window.addEventListener('beforeunload',  e => {
    e.preventDefault();
    e.returnValue = '';
});

function marcarDataHora(){
    var data = document.getElementById('ao_data_reg');
    var hora = document.getElementById('ao_hora');

    var dataAtual = new Date();

    // Formata a data no formato "YYYY-MM-DD" para o input do tipo 'date'
    var dataFormatada = dataAtual.toISOString().split('T')[0];

    // Formata a hora no formato "HH:mm" para o input de texto
    var horaFormatada = dataAtual.toLocaleTimeString('en-US', { hour12: false });

    // Define os valores nos inputs
    data.value = dataFormatada;
    hora.value = horaFormatada;
}






