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
$(".menu-toggle").click(function(e) {
    e.preventDefault();
    
    var menu = ".menu-toggle span";
    var right = "glyphicon-chevron-right";
    var left = "glyphicon-chevron-left";


    if($(menu).hasClass(left)) {
        $(menu).removeClass(left).addClass(right);
    }
    else {
        $(menu).removeClass(right).addClass(left);
    }

    $(".sidebar").toggleClass("toggled-menu");
    $(".conteudo-toggle").toggleClass("toggled-conteudo");
});

//esconde o menu quando a resolução da tela for menor que 768
function mobileViewUpdate () {
    var largura = $(window).width();
    var menu = ".menu-toggle span";
    var right = "glyphicon-chevron-right";
    var left = "glyphicon-chevron-left";

    if (largura < 768) {
        $(".sidebar").addClass("toggled-menu");
        $(".conteudo-toggle").addClass("toggled-conteudo");
        $(menu).removeClass(left).addClass(right);
    }

    else {
        $(".sidebar").removeClass("toggled-menu");
        $(".conteudo-toggle").removeClass("toggled-conteudo");        
        $(menu).removeClass(right).addClass(left);
    }
}

$(window).load(mobileViewUpdate);
$(window).resize(mobileViewUpdate);