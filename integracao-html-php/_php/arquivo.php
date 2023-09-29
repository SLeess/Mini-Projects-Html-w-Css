<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários PHP</title>
    <link rel="stylesheet" href="../_styles/style.css">
    <style>
        .lado{
            text-align: center;
            margin-top: 7px;
            width: 100px;
        }
        h2{
            margin-top: 15px;
        }
        #hora{
            columns: 2;
        }
        #status{
            columns: 1;
        }
        h4{
            color: red;
            font-size: 1.6em;
        }
        h5{
            margin: 10px;
            font-size: 1em;
            color: darkgray;
        }
        #btbusca{
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <main>
        <h1>SBAT - SISTEMA DE SOLICITAÇÃO DE BOLSA AUXÍLIO-TECNOLOGIA</h1>
        <h2>Dados Cadastrados</h2>
        <div class="padrao">
            <span>CPF</span>
            <input type="text" disabled value="<?php echo $_POST['ao_cpf'];?>">
            <span>Nome</span>
            <input type="text" disabled value="<?php echo $_POST['ao_nome'];?>">
            <span>Ano de Nascimento</span>
            <input type="text" disabled value="<?php echo $_POST['ao_ano_nascimento'];?>">
        </div>

        <h2>Registro de data</h2>
        <div class="padrao" id="hora">
            <span>Data de Cadastro</span>
            <input type="text" name="date" id="date" disabled value="<?php $data = $_POST['ao_data_reg']; echo "$data[8]$data[9]-$data[5]$data[6]-$data[0]$data[1]$data[2]$data[3]";?>" class="lado">
            <span>Hora de Cadastro</span>
            <input type="text" name="date" id="date" disabled value="<?php echo $_POST['ao_hora'];?>" class="lado">
            
        </div>

        <h2>Status</h2>
        <div class="padrao" id="status">
            <h4>
            <?php
                $logradouro = $_POST['ao_logradouro'];
                $numero = $_POST['ao_numero'];
                $bairro = $_POST['ao_bairro'];
                $cidade = $_POST['ao_cidade'];
                $estado = $_POST['ao_estado'];
                $cep = $_POST['Cep'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $salario = $_POST['salario'];
                $computador = isset($_POST['computador'])? true : false;
                $cbtelefone = isset($_POST['cbtelefone'])? true : false;
                $cbnotebook = isset($_POST['notebook'])? true : false;

                $idade = date('Y') - $_POST['ao_ano_nascimento'];

                if($idade < 18 || $salario > 3000.00){
                    echo "Você não tem direito à nenhum dos itens";
                } elseif($idade > 65 && $salario < 3000.00){
                    echo "Você tem direito a 1 smartphone";
                } elseif($salario < 1000.00){
                    echo "Você tem direito a 1 notebook e 1 smartphone";
                } elseif($cbtelefone == false && $cbnotebook == false && $computador == false){
                    echo "Você tem direito a 1 notebook somente";
                } else{
                    echo "Você não tem direito à nenhum dos itens";
                } 
            ?>
            </h4>
        </div>

        <h5>Leve este comprovante, um documento com foto, e procure o almoxarifado para retirada</h5>

        <button type="button" id="btbusca" value="busca" name="busca">Imprimir</button>
    </main>
</body>
</html>