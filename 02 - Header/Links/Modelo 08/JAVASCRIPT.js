//Div ficar fixa após scroll
$(document).scroll(function () {
    var FundoPrincipal=$(window).height();
    var ScrollTop=$(this).scrollTop();

    if (ScrollTop >= FundoPrincipal) {
        $('.DivFixa').css({'position':'fixed' , 'top': 0});
    }else{
        $('.DivFixa').css({'position':'inherit'});
    }
});


//Links slow
var $doc = $('html, body');
$('a').click(function() {
    $doc.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top - parseFloat(200)
    }, 500);
    return false;
});



//Link NavMobile
$('#LinksPaginas').on('change',function(){
    var Pagina=$(this).val();
    $('html, body').animate({ scrollTop: $('#'+Pagina).offset().top - parseFloat(200)}, 500);
    return false;
});
