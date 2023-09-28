function consultaCep() {
    var cep = document.getElementById("Cep").value.replace(/\D/g, '');
    var url = 'https://viacep.com.br/ws/' + cep + '/json/';

    var request = new XMLHttpRequest();
    request.open('GET', url);

    request.onerror = function (e) {
        document.getElementById('erro').classList.remove("hide");
        document.getElementById('erro').innerHTML = 'API OFFLINE OU CEP INVÁLIDO';
    }

    request.onload = function () {
        if (request.status === 200) {
            var response = JSON.parse(request.responseText);

            if (response.erro === true) {
                document.getElementById('erro').innerHTML = 'CEP NÃO ENCONTRADO';
                document.getElementById('erro').classList.remove("hide");
            } else {
                var logradouro = document.querySelector('input[name=ao_logradouro]');
                var bairro = document.querySelector('input[name=ao_bairro]');
                var cidade = document.querySelector('input[name=ao_cidade]');
                var estado = document.querySelector('input[name=ao_estado]');

                cep.value = response.cep;
                logradouro.value = response.logradouro;
                bairro.value = response.bairro;  
                cidade.value = response.localidade;
                estado.value = response.uf;
                document.getElementById('erro').classList.remove("hide");
                document.getElementById('erro').classList.add("certo");
                document.getElementById('erro').innerHTML = 'CEP ENCONTRADO';
            }

        } else {
            document.getElementById('erro').innerHTML = 'Erro na requisição.';
            document.getElementById('erro').classList.remove("hide");
        }
    }

    request.send();
}
