<?php
  require_once("../conexaoBancoDeDados.php");

  session_start();
  $nome_da_sala = $_SESSION["nomeSala"];

  $resultado = $conexao->query("SELECT * FROM jogos WHERE nome_da_sala = '$nome_da_sala'");
  
  if ($resultado->num_rows > 0) {
     $valores = $resultado->fetch_assoc();
     $num_jogo = $valores["numero_do_jogo"];
     $nome1 = $valores["nome_do_jogador1"];
     $nome2 = $valores["nome_do_jogador2"];
     
     $_SESSION["num_jogo"] = $num_jogo;
     $_SESSION["jogador1"] = $nome1;
     $_SESSION["jogador2"] = $nome1;
  }
  //redireciona para o jogo
  header("Location: " . "../../game.php");
?>