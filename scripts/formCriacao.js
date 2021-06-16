function criaSala() {
    $nome_da_sala = document.querySelector("#nome_da_sala").value;
    $nome_do_jogador1 = document.querySelector('#nome_do_jogador1').value;
    //$.ajax({    //create an ajax request to display.php
    //   type: "GET",
    //   url: "models/actionBD/saveRoom.php?nomedasala=" + $nome_da_sala + "&nomedojogador1=" + $nome_do_jogador1,
    //   dataType: "html"   //expect html to be returned
    //})
    
    window.location = "models/actionBD/saveRoom.php?nomedasala=" + $nome_da_sala + "&nomedojogador1=" + $nome_do_jogador1;
   
}

