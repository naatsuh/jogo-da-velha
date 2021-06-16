$( function() {
    function buscaJogosEmAbertos() {
        $("#jogosEmAberto").load();
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
        setTimeout(buscaJogosEmAbertos, 10000);
    }

    function conectaSala(){

    }

    $(document).ready(function () {
        buscaJogosEmAbertos();
    });
})