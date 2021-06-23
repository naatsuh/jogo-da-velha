<?php
?>

<html>
    <?php include ("./models/head.php");?>
<body>
    <?php include ("./models/header.php");?>
    <div class="painel-listaDeSala">
        <form method="get" action="searchRooms.php">
            <div style="margin: 25% 0 0 0"></div>
            <div style="display: flex;
                        justify-content: center;
                        align-items: center;">
                <label style="padding: 10px;font-family: Arial; font-weight: bold">DIGITE SEU NOME</label>
                <input type="text" required="required" placeholder="digite seu nick aqui!" autofocus="autofocus" name="jogador2">
                <input style="margin: 10px" type="submit" value="Próximo"/>
            </div>
            <div style="margin: 25% 0 0 0"></div>
        </form>
    </div>
</body>
</html>
