//funções após a leitura do documento
$(document).ready(function() {

    //Variáveis Globais
    var root = "http://"+document.location.hostname+"/";
    var urlAtual=window.location.href;
    var urlAposBarra=urlAtual.substr(urlAtual.lastIndexOf('/') + 1);



    // Botão Mobile
    $('.botaoMobileImages').on('click',function(){
        $(this).find('img').toggle();
        $('nav').toggle("slow");
    });
});








