$(".slider-navegacao").owlCarousel({
    dots: true,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    animateOut: "fadeOut",
    animateIn: "fadeIn",
    items: 1,
    margin: 30,
    stagePadding: 30,
    smartSpeed: 450
});

$(window).scroll(function() {
    var scrollTopAtual = ($(this).scrollTop());

    if(scrollTopAtual > 120) {
        $(".navegacao").addClass("fixed");
    }
    else {
        $(".navegacao").removeClass("fixed");
    }
});

//esconder menu lateral
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    
    $(".sidebar").toggleClass("toggled-menu");
    $(".conteudo-toggle").toggleClass("toggled-conteudo");
});