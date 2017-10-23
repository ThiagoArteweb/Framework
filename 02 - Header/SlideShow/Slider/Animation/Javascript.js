//SlideShow
$('.Slides').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 5000
});





//Aparecer elementos
window.sr = ScrollReveal();
sr.reveal('.SlidesTitulo', {
    duration: 1000,
    origin: 'bottom',
    distance: '100%',
    delay: 1000
},5200);

sr.reveal('.SlidesTexto', {
    duration: 2000,
    origin: 'bottom',
    distance: '100%',
    delay: 1000
},5200);

sr.reveal('.SlidesBotao', {
    duration: 3000,
    origin: 'bottom',
    distance: '100%',
    delay: 1000
},5200);


sr.reveal('#Icon1', {
    duration: 2000,
    origin: 'left',
    distance: '100%'
});


sr.reveal('#Icon2', {
    duration: 2000,
    origin: 'bottom',
    distance: '100%'
});

sr.reveal('#Icon3', {
    duration: 2000,
    origin: 'right',
    distance: '100%'
});

sr.reveal('.ListraPretaFundo', {
    duration: 1000
});