<?php
    session_start();
    require_once ("./models/actionBD/openGames.php");

    $jogador2 = $_GET["jogador2"];
    if ($jogador2 == null) {
        header("Location: nameAfterGame.php");
    }
?>

<html>
    <?php include ("./models/head.php");?>
    <script type="text/javascript" src="./scripts/searchRoom.js"></script>
    <body>
    <?php include ("./models/header.php");?>
    <div class="painel-listaDeSala">
        <h3>LISTA DE PARTIDAS</h3>
        <table border="0" class="listaDeSala">
            <tr style="
                       height: 10px;
                       max-height: 15px;
                       background-color: #f3cd9b;
                      "
            >
                <td>ID</td>
                <td>NOME DA SALA</td>
                <td>JOGADOR</td>
                <td>STATUS</td>
            </tr>

            <?php
            if ($_SESSION["openGames"] == '1') {
                ?>
                <tr style="
                                height: 10%;
                                max-height: 40px;
                              "
                >
                    <td>-----</td>
                    <td>SEM JOGO</td>
                    <td>SEM JOGADOR</td>
                    <td>-----</td>
                </tr>
                <?php
            } else {
                while ($linha = $_SESSION["openGames"]->fetch_assoc()) {
                    ?>
                    <tr class="jogosEmAberto"
                        style="
                                height: 10%;
                                max-height: 40px;
                                background-color: #c6ffcc;
                              ">

                        <td><?php echo $linha["numero_do_jogo"];?></td>
                        <td><?php echo $linha["nome_da_sala"];?></td>
                        <td><?php echo $linha["nome_do_jogador1"];?></td>
                        <td><a href=<?php echo '"./models/actionBD/joinRoom.php?jogador2='.$jogador2 .'&numero_do_jogo='.$linha["numero_do_jogo"].'&nome_da_sala='.$linha["nome_da_sala"].'"'?>>ENTRAR</a></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </div>
    </body>
</html>


