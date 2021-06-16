<?php
    require_once("./models/conexaoBancoDeDados.php");

    $resultado = $conexao->query("SELECT * FROM `jogos` WHERE nome_do_jogador2 is null");

    if ($resultado->num_rows > 0) {
        $_SESSION["openGames"] = $resultado;
    } else {
        $_SESSION["openGames"] = "1";
        //echo "sem jogos em aberto";
    }
?>
