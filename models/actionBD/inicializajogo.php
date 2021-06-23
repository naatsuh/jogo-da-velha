<?php
  require_once("../conexaoBancoDeDados.php");

  session_start();
    $nome_da_sala = $_SESSION["nome_da_sala"];

  $resultado = $conexao->query("SELECT * FROM jogos WHERE nome_da_sala = '$nome_da_sala'");
  
  if ($resultado->num_rows > 0) {
     $valores = $resultado->fetch_assoc();
     $num_jogo = $valores["numero_do_jogo"];
     $nome1 = $valores["nome_do_jogador1"];
     $nome2 = $valores["nome_do_jogador2"];

     $_SESSION["jogador"] = 1;
     $_SESSION["nomejogador"] = $nome2;
     $_SESSION["numero_do_jogo"] = $num_jogo;
  }
  //redireciona para o jogo
  header("Location: " . "../../game.php");
?>