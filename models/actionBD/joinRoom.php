<?php
require_once("../conexaoBancoDeDados.php");
    session_start();
    $nome2 = $_GET["jogador2"];
    $num_jogo = $_GET["numero_do_jogo"];

    $conexao -> query("UPDATE jogos SET nome_do_jogador2 =  '$nome2'  WHERE numero_do_jogo = '$num_jogo'");

    if ($conexao->error){
        echo "Falha ao conectar ao banco de dado, Erro:";
        echo $conexao->error;
    }

    $_SESSION["jogador"] = 2;  //esse pc eh o jogador 2 porque aceitou o desafio
    $_SESSION["nomeJogador"] = $nome2;
    $_["nome_da_sala"] = $_GET["nome_da_sala"];


    header('Location: '."inicializajogo.php");
?>