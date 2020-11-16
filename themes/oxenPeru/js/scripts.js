jQuery(document).ready($ => {

    $('.navegacion-principal').hide();
    $(' .sub-menu').hide();
    // $('.menu-principal-footer .sub-menu').show();



    var altura = $('.hero-nav').offset().top;
    var barraAltura = $('.hero-nav').innerHeight();
    var queryMin = window.matchMedia('(min-width: 768px)');
    var queryMax = window.matchMedia('(max-width: 767px)');

    $(window).on('scroll', function() {
        if ($(window).scrollTop() > altura) {
            $('.hero-nav').addClass('fixed');
            $('.nav-secundario').addClass('transicion0');
            if (queryMin.matches) {
                $('body').css({ 'margin-top': barraAltura + 'px' });

            }
        } else {
            $('.hero-nav').removeClass('fixed');
            $('.nav-secundario').removeClass('transicion0');
            if (queryMin.matches) {
                $('body').css({ 'margin-top': '0px' });

            }
        }
    });



    $('.fa-bars').on('click', function() {
        $('.navegacion-principal').slideToggle(400);

    });
    $('#menu-item-19 a:first').on('click', function() {

        $('#menu-item-19 .sub-menu').slideToggle(400);
        return false;


    });
    $('#menu-item-18 a:first').on('click', function() {

        $('#menu-item-18 .sub-menu').slideToggle(400);
        return false;



    });

    $('.nav-secundario .menu-item-19 ').on('mouseenter', function() {
        $('.nav-secundario .menu-item-19 .sub-menu').slideDown(100);


    });
    $('.nav-secundario .menu-item-19 ').on('mouseleave', function() {
        $('.nav-secundario .menu-item-19 .sub-menu').slideUp(100);


    });

    $('.nav-secundario .menu-item-18 ').on('mouseenter', function() {
        $('.nav-secundario .menu-item-18 .sub-menu').slideDown(100);


    });
    $('.nav-secundario .menu-item-18 ').on('mouseleave', function() {
        $('.nav-secundario .menu-item-18 .sub-menu').slideUp(100);


    });
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        slidesPerGroup: 1,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            // type: 'progressbar',

        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    $('.ir-arriba').on('click', function() {
        $('body, html').animate({
            scrollTop: '0px'
        }), 1000;
    });
    $(window).scroll(function() {

        if ($(this).scrollTop() > 0) {
            $('.ir-arriba').slideDown(300);
        } else {
            $('.ir-arriba').slideUp(300);

        }


    });

});