<?php session_start(); ?>

<html>
<?php include ("models/head.php"); 
?>
<body>
    <script type="text/javascript" src="../scripts/regras.js"></script>
    <?php include ("models/header.php");?>
    
    <?php //echo '"'.$_SESSION["jogador"].'"'; ?>
    <?php //echo '"'.$_SESSION["nomeJogador"].'"'; ?>
    <?php //echo '"'.$_SESSION["numero_do_jogo"].'"'; ?>

    <input type="hidden" id="jogador" value=<?php echo '"'.$_SESSION["jogador"].'"'; ?>>
    <input type="hidden" id="nome_do_jogador" value=<?php echo '"' . $_SESSION["nomeJogador"] . '"';?>>
    <input type="hidden" id="numero_do_jogo" value=<?php echo '"' . $_SESSION["numero_do_jogo"] . '"';?>>

    <div id="pageGame">
        <div id="game">

            <div id="painel-jogador" style="">
                <div id='info'>
                    <label id="num_jogador"></label>
                    <label id="nome_jogador"></label>
                    <label id="ordem_jogada"></label> 
                </div>
                <div id="mostrador">
                    <p>Vez do Jogador:</p>

                    <img src="" border="0" height="50">
                </div>
                <p id="resultado"></p>

            </div>

            <div class="tabuleiro">
                <div id="casa1" class="casa" jogada=""></div>
                <div id="casa2" class="casa" jogada=""></div>
                <div id="casa3" class="casa" jogada=""></div>

                <div id="casa4" class="casa" jogada=""></div>
                <div id="casa5" class="casa" jogada=""></div>
                <div id="casa6" class="casa" jogada=""></div>

                <div id="casa7" class="casa" jogada=""></div>
                <div id="casa8" class="casa" jogada=""></div>
                <div id="casa9" class="casa" jogada=""></div>
            </div>
        </div>
        <div class="chat">
            <h1>Chat</h1>
            <div id="chat-inGame">
                <div class="mensagem">
                    <p id="horas">22:00</p>
                    <p id="user">Bruno:</p>
                    <p id="msg">mensagem 1</p>
                </div>
                <div class="mensagem">
                    <p id="horas">22:01</p>
                    <p id="user">Lara:</p>
                    <p id="msg">mensagem 2</p>
                </div>
            </div>
            <div class="button-panel-chat">
                <label >Mensagem: </label>
                <input type="text" id="mensagem"/>

                <input
                        type="submit"
                        value="ENVIAR"
                />
            </div>
        </div>
    </div>

</body>
</html>
