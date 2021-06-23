<html>
    <?php include ("models/head.php");?>
    <body>
        <?php include ("models/header.php");?>

        <div class="panel">
            <form class="criacaodesala" id="criacaoDeSala" method="get" action="./models/actionBD/saveRoom.php">
                <label>DIGITE NOME DA SALA</label>
                <input type="text" required="required" id="nome_da_sala" name="nomedasala" autofocus="autofocus">
                <div id="nickname">
                <label >DIGITE SEU NOME</label>
                <input type="text" required="required" id="nome_do_jogador1" name="nomedojogador1">
                </div>

                <div class="button-panel">
                    <input
                            type="submit"
                            value="CRIAR"
                    >
                </div>
            </form>
        </div>
        <script type="text/javascript" src="scripts/formCriacao.js"></script>

    </body>
</html>
