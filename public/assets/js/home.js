$(document).on('ready',function(){
    $('.loading').remove('.loading');

    $(".slider").not('.slick-initialized').slick()
    $('.home__slider').slick({
        prevArrow: false,
        nextArrow: false,
        dots: true
    });
    $(".slider").not('.slick-initialized').slick()

    $('.home__project__slider').slick({
        slidesToScroll: 1,
        slidesToShow: 2,
        prevArrow: false,
        nextArrow: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 1140,
              settings: {
                slidesToShow: 3
              }
            },
            {
                breakpoint: 992,
                settings: {
                  slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                  slidesToShow: 2
                }
            },
        ]
    });
})





