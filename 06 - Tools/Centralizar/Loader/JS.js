//Função Loader
function Loader(Parametro){
    if(Parametro=='Inicio'){
        var HeightDocument=$(window).height();
        var TopScroll = $(document).scrollTop();
        $(".Loader").show().height(HeightDocument).css({top: TopScroll});
        $("body").css({"overflow-y": "hidden"});
    }else if(Parametro=='Fim'){
        $(".Loader").hide();
        $("body").css({"overflow-y": "auto"});
    }
}