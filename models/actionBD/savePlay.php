<?php
require_once("../conexaoBancoDeDados.php");

    $numero_do_jogador = $_GET["numero_do_jogador"];
    $numero_do_jogo = $_GET["numero_do_jogo"];
    $posicao = $_GET["posicao"];
    $ordem_da_jogada = $_GET["ordem_da_jogada"];

    $conexao->query("INSERT INTO `jogadas`(numero_do_jogador, numero_do_jogo, posicao, ordem_da_jogada)
                            VALUES ($numero_do_jogador, $numero_do_jogo, $posicao, $ordem_da_jogada)");

    if (!$conexao->error){
        echo "ok";
    }
?>