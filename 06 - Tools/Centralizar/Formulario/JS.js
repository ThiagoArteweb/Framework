//Botão que chama o evento
$('button').on('click',function(){
    Centralizar('inicio','.fundo','.popup','.popupClose');
});






//Função Centralizar Formulário
function Centralizar(Acao,DivFundo,DivCentralizada,BotaoFechar){

    var HeightFundo=$(window).height();
    var HeightDivCentralizada=$(DivCentralizada).outerHeight();
    var TopDivCentralizada=((HeightFundo-HeightDivCentralizada)/2);
    var TopScroll = $(document).scrollTop();

    if(Acao=='inicio'){
        $(DivFundo).show().height(HeightFundo).css({top: TopScroll});
        $(DivCentralizada).show().css({'top': TopScroll+TopDivCentralizada});
        $("body").css({"overflow-y": "hidden"});

        if(BotaoFechar!=''){
            var BotaoFecharCombinado = DivFundo+','+BotaoFechar;
            $(document).on('click',BotaoFecharCombinado,function(){
                Centralizar('fim',DivFundo,DivCentralizada,BotaoFechar);
            });
        }
    }else if(Acao=='fim'){
        $(DivCentralizada).hide();
        $(DivFundo).hide();
        $("body").css({"overflow-y": "auto"});
    }
}