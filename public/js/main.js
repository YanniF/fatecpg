$('#slider__navegacao').owlCarousel({
    dots:true,
    loop:true,
    dots:true,
    autoplay:true,
    autoplayHoverPause:true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    items:1,
    margin:30,
    stagePadding:30,
    smartSpeed:450
});

//melhorar
$('#slider').on('click', '#img1', function () {
    window.location.href = "http://www.fatecpg.com.br";
});

$('#slider').on('click', '#img2', function () {
    window.location.href = "http://www.fatecpg.com.br";
});

$('#slider').on('click', '#img3', function () {
    window.location.href = "http://www.fatecpg.com.br";
});

$(window).scroll(function() {
    var scrollTopAtual = ($(this).scrollTop());

    if(scrollTopAtual > 120) {
        $('#navegacao').addClass('fixed');
    }
    else {
        $('#navegacao').removeClass('fixed');
    }
});

