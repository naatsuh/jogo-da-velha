
$( function() {
    var vez = 1;
    var vencedor = "";
    var jogador = document.getElementById("jogador").value;
    var njogador = document.getElementById("nome_do_jogador").value;
    var numero_do_jogo = 1;
    var jogadaatual = vez;

    var gameOver = false;
    var turn = vez;


    
    
    function atualizaMostrador() {
        
        if (gameOver) {return;}

        if (turn == vez) {
            document.getElementById("num_jogador").innerHTML = "Jogador: " + jogador;
            document.getElementById("nome_jogador").innerHTML = "Nickname: " + njogador;
            document.getElementById("ordem_jogada").innerHTML = "Jogada: " + jogadaatual;
            var player = document.querySelectorAll("div#mostrador img") [0];
            player.setAttribute("src", "1.png");
        } else {
            document.getElementById("num_jogador").innerHTML = "Jogador: " + jogador;
            document.getElementById("nome_jogador").innerHTML = "Nickname: " + njogador;
            document.getElementById("ordem_jogada").innerHTML = "Jogada: " + jogadaatual;
            var player = document.querySelectorAll("div#mostrador img") [0];
            player.setAttribute("src", "2.png");
        }
        //$("#mostrador").load();
        //$("#mostrador").load(location.href + " #mostrador");
    }

    function casasIguais(a, b, c) {
        var casaA = $("#casa" + a);
        var casaB = $("#casa" + b);
        var casaC = $("#casa" + c);
        var bgA = $("#casa" + a).css("background-image");
        var bgB = $("#casa" + b).css("background-image");
        var bgC = $("#casa" + c).css("background-image");
        if ((bgA == bgB) && (bgB == bgC) && (bgA != "none" && bgA != "")) {
            if (bgA.indexOf("1.png") >= 0)
                vencedor = "1";
            else
                vencedor = "2";
            return true;
        } else {
            return false;
        }
    }


    function verificarFimDeJogo() {
        if (casasIguais(1, 2, 3) || casasIguais(4, 5, 6) || casasIguais(7, 8, 9) ||
            casasIguais(1, 4, 7) || casasIguais(2, 5, 8) || casasIguais(3, 6, 9) ||
            casasIguais(1, 5, 9) || casasIguais(3, 5, 7)
        ) {
            $("#resultado").html("<h1>O jogador " + vencedor + " venceu! </h1>");
            $(".casa").off("click");

        }
    }


    document.getElementById("casa1").onclick = function(){cliquenacasa("1")};
    document.getElementById("casa2").onclick = function(){cliquenacasa("2")};
    document.getElementById("casa3").onclick = function(){cliquenacasa("3")};
    document.getElementById("casa4").onclick = function(){cliquenacasa("4")};
    document.getElementById("casa5").onclick = function(){cliquenacasa("5")};
    document.getElementById("casa6").onclick = function(){cliquenacasa("6")};
    document.getElementById("casa7").onclick = function(){cliquenacasa("7")};
    document.getElementById("casa8").onclick = function(){cliquenacasa("8")};
    document.getElementById("casa9").onclick = function(){cliquenacasa("9")};

    function cliquenacasa(numcasa)
    {
        console.log("jogador"+jogador+" clicou e eh a vez de:"+vez);
        if(jogador==vez)
        {
            $.ajax({
                type: "GET",
                url: "../models/actionBD/savePlay.php?numero_do_jogo="+numero_do_jogo+"&numero_do_jogador="+jogador+"&posicao="+numcasa+"&ordem_da_jogada="+jogadaatual,
                dataType: "html",   //expect html to be returned
                success: function(response){
                    if(response == "ok")
                    {
                        mostraImagem("casa"+numcasa);
                    }
                    else
                    {
                        alert("Não salvou a jogada");
                    }

                }

            });
        }
    }

    function mostraImagem(nomecasa) {
        //console.log("nome:"+nomecasa+"  vez autal:"+vez);
        var casa = $("#" + nomecasa);
        var bg = casa.css("background-image");
        if (bg == "none" || bg == "") {
            var fig = "url(" + vez.toString() + ".png) no-repeat";
            casa.css("background", fig);
            vez = (vez == 1 ? 2 : 1);
            jogadaatual = jogadaatual + 1;
            verificarFimDeJogo();
        }
    }
    
    function buscaNovasJogadas() {
        console.log("jogada atual"+ jogadaatual + "vez autal:"+vez);
        $.ajax({    //create an ajax request to display.php
            type: "GET",
            url: "models/actionBD/recentPlay.php?numero_do_jogo=" + numero_do_jogo + "&ordem_da_jogada=" + jogadaatual,
            dataType: "html",   //expect html to be returned
            success: function (response) {
                if (response != "") {
                    //console.log("casa" + response);
                    mostraImagem("casa" + response);
                    buscaNovasJogadas(); // busca novamente
                } else {
                    //console.log("nada ainda...");
                    setTimeout(buscaNovasJogadas, 5000);
                }
            }

        });
    }


    $(document).ready(function () {
    atualizaMostrador();
    buscaNovasJogadas();
    
        
    });

});