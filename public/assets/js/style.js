$(document).on('ready',function(){
    AOS.init();

    $('.header-mobile__btn').click(function(){
        btnClick($(this).parent().find('.menu-mobile__wrapper'))
    })

    $('.menu-mobile__btn-close').click(function(){
        btnClick($(this).closest('.menu-mobile__wrapper'))
    })


    $('.menu-mobile__category__item__box').click(function(e){
        btnClick($(this).closest('.menu-mobile'))
        btnClick($(this).parent().find('.menu-mobile-child'))

    })

    $('.menu-mobile-child__btn-back').click(function(e){
        btnClick($(this).closest('.menu-mobile'))
        btnClick($(this).closest('.menu-mobile-child'))
    })


    $('.header-second__search__btn--open').click(function(e){
        btnClick($(this).parent());
    })

    $('.header-second__search__btn--close').click(function(e){
        btnClick($(this).parent());
    })

})

function btnClick($element){
    $element.toggleClass('active');
}




