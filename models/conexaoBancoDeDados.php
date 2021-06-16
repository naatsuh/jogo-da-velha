<?php
    $hospedagem = "localhost";
    $nome_banco_de_dados = "jogodavelha";
    $usario = "root";
    $senha = "";


    $conexao = new mysqli ($hospedagem, $usario, $senha, $nome_banco_de_dados);

    if ($conexao->connect_error){
        echo "falha ao conectar ao banco de dados";
    }
?>