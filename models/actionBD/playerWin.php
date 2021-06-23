<?php
    require_once("../conexaoBancoDeDados.php");
    session_start();
    $vencedor = $_GET["vencedor"];
    $numero_do_jogo = $_GET["numero_do_jogo"];

    //echo "vencedo " .$vencedor;
    //echo "numero do jogo " . $numero_do_jogo;

    $conexao -> query("UPDATE jogos SET vencedor =  '$vencedor'  WHERE numero_do_jogo = '$numero_do_jogo'");

    if ($conexao->error){
        echo "Falha ao conectar ao banco de dado, Erro:";
        echo $conexao->error;
    }

    header('Location: '. "../../index.php");
?>