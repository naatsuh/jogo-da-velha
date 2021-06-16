<?php
require_once("./models/conexaoBancoDeDados.php");

    $nome2 = $_GET["nome2"];
    $num_jogo = $_GET["num_jogo"];

    $conexao -> query("UPDATE jogos SET nome_do_jogador2 = '$nome2' WHERE numero_do_jogo = '$num_jogo'");

    if ($conexao->error){
        echo "Falha ao conectar ao banco de dado, Erro:";
        echo $conexao->error;
    }

    $_SESSION["num_jogador"] = 2;  //esse pc eh o jogador 2 porque aceitou o desafio
    $_SESSION["nome2"] = $nome2;
    $_SESSION["num_jogo"] = $num_jogo;

    header('Location: '."inicializajogo.php");
?>