$( function() {
    function buscaJogosEmAbertos() {
        $("#jogosEmAberto").load(" #jogosEmAberto > *");
        //console.log("jogada atual"+ jogadaatual + "vez autal:"+vez);
        $.ajax({    //create an ajax request to display.php
            type: "GET",
            url: "./models/actionBD/openGames.php",
            dataType: "html",   //expect html to be returned
            success: function (response) {
                if (response != "") {
                    console.log("erro: " + response);
                }
            }
        });
        setTimeout(buscaJogosEmAbertos, 1000);
    }

    $(document).ready(function () {
        buscaJogosEmAbertos();
    });
})