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


    //Toggle Suporte
    $('.suporteTitulo').on('click',function(){
        $('.suporteMensagem , .suporteFormulario').toggle();
        listarMensagens();
    });



//Placeholder Textarea
    $('#mensagem').val('Mensagem:').css({'font-size':'15px', 'color':'#919191'})
        .on('click , focus',function(){
            if($(this).val()=='Mensagem:'){
                $(this).val('');
            }
        })
        .on('keyup',function(){
            $(this).css({ 'font-size':'15px', 'color':'#333'})
        })
        .on('blur',function(){
            if($(this).val()==''){
                $(this).val('Mensagem:').css({'font-size':'15px', 'color':'#919191'});
            }
        });



//Ajax Suporte (envio do formulário)
    $("#formSuporte").on("submit",function(event){
        event.preventDefault();
        var dados=$(this).serialize();

        $.ajax({
            url: root+"suporte/iniciarChat",
            method:'post',
            dataType:'html',
            data: dados,
            success: function(dados){
                $('.suporteMensagemConversa').empty().append(dados);
                $('#mensagem').val('');
            }

        });
    });




//Ajax Suporte (mensagem de tempo em tempo)
    function listarMensagens(){
        var ip=$('#ip').val();
        $.ajax({
            url:root+"suporte/dbExibirMensagens/"+ip,
            method: 'post',
            data: {'ip': ip},
            success: function (data) {
                $('.suporteMensagemConversa').empty().append(data);
            }
        });
    }
    setInterval(function() {
        listarMensagens();
    }, 12000);
});








