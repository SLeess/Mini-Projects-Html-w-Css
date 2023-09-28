<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários PHP</title>
    <link rel="stylesheet" href="../_styles/style.css">
</head>
<body>
    <main>
        <h1>Bolsa auxílio-tecnologia</h1>
        <h2>Formulário</h2>
        <?php
            $cpf = $_POST['ao_cpf'];
            $name = $_POST['ao_nome'];
            $ano_nascimento = $_POST['ao_ano_nascimento'];
            $logradouro = $_POST['ao_logradouro'];
            $numero = $_POST['ao_numero'];
            $bairro = $_POST['ao_bairro'];
            $cidade = $_POST['ao_cidade'];
            $estado = $_POST['ao_estado'];
            $cep = $_POST['Cep'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $salario = $_POST['salario'];
            $computador = $_POST['computador'];
            $cbtelefone = $_POST['cbtelefone'];

            print("<h1>Resultado da consulta</h1><br>");
            print("<p>$cpf     -     $name     -     $ano_nascimento<br>");
            print("<p>$logradouro     -     $numero     -     $bairro<br>");
            print("<p>$cidade     -     $estado     -     $cep<br>");
            print("<p>$telefone     -     $email     -     $salario<br>");
            print("<p>$computador            -            $cbtelefone<br>");
        ?>
    </main>
</body>
</html>