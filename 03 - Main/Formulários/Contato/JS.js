//Máscara de Telefone
$("#Telefone").on('focus',function(){

    $(this).mask("(99) 9999-9999?9");
    $(this).on('keyup',function(){
        tamanho = $(this).val();
        numsStr = tamanho.replace(/[^0-9]/g,'');
        numStr2=numsStr.length;

        if (numStr2 ==11){
            $(this).mask("(99) 99999-999?9");
        }else if (numStr2 == 10){
            $(this).mask("(99) 9999-9999?9");
        }
    });



    //Placeholder Textarea
    $('#Mensagem').val('Mensagem:').css({'font-size':'19px', 'color':'#919191'})
        .on('click , focus',function(){
            if($(this).val()=='Mensagem:'){
                $(this).val('');
            }
        })
        .on('keyup',function(){
            $(this).css({ 'font-size':'18px', 'color':'#333'})
        })
        .on('blur',function(){
            if($(this).val()==''){
                $(this).val('Mensagem:').css({'font-size':'19px', 'color':'#919191'});
            }
        });

});