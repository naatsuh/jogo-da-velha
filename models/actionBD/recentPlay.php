<?php
    require_once("../conexaoBancoDeDados.php");

    $numero_do_jogo = $_GET["numero_do_jogo"];
    $ordem_da_jogada = $_GET["ordem_da_jogada"];

    $resultado = $conexao->query("SELECT posicao FROM jogadas WHERE numero_do_jogo=$numero_do_jogo AND ordem_da_jogada=$ordem_da_jogada");


    if ($resultado->num_rows > 0) {
        $valores = $resultado->fetch_assoc();
        echo $valores["posicao"];
    }
?>
