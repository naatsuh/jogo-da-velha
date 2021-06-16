<?php

require_once("../conexaoBancoDeDados.php");

$numero_do_jogador = $_GET["numero_do_jogador"];
$numero_do_jogo = $_GET["numero_do_jogo"];
$ordem_da_jogada = $_GET["ordem_da_jogada"];



if ($numero_do_jogador == 1){
    $resultado = $conexao->query("SELECT numero_do_jogo, posicao FROM jogadas WHERE numero_do_jogo=$numero_do_jogo AND ordem_da_jogada=$ordem_da_jogada
                                    UNION SELECT jogador1 FROM jogos WHERE numero_do_jogo=$numero_do_jogo");

    if ($resultado->num_rows > 0) {
        while($linha = $resultado->fetch_assoc()){
            $valores[] = $linha;
        }

        foreach ($valores as $valor){
            echo $valor["posicao"];
            echo $valor["numero_do_jogador"];
            echo $valor["jogador1"];
        }
    }
}
else {
    $resultado = $conexao->query("SELECT numero_do_jogo, posicao FROM jogadas WHERE numero_do_jogo=$numero_do_jogo AND ordem_da_jogada=$ordem_da_jogada
                                    UNION SELECT jogador2 FROM jogos WHERE numero_do_jogo=$numero_do_jogo");

    if ($resultado->num_rows > 0) {
        while($linha = $resultado->fetch_assoc()){
            $valores[] = $linha;
        }

        foreach ($valores as $valor){
            echo $valor["posicao"];
            echo $valor["numero_do_jogador"];
            echo $valor["jogador2"];
        }
    }
}







?>