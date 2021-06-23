<?php
    require_once("../conexaoBancoDeDados.php");
    
    $nome_da_sala = $_GET["nomedasala"];
    $nome_do_jogador1 = $_GET["nomedojogador1"];
    
    
    $conexao -> query("INSERT INTO jogos(nome_da_sala,nome_do_jogador1) VALUES ('$nome_da_sala','$nome_do_jogador1')");
    
    session_start();
    $_SESSION["jogador"] = 1;
    $_SESSION["nomeJogador"] = $nome_do_jogador1;
    $_SESSION["nomeSala"] = $nome_da_sala;

    header("Location: ". "../../game.php");
    
?>