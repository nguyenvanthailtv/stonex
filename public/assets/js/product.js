$(document).ready(function() {
    $('.product__card__btn').click(function(){
        btnClick($(this).closest('.product__card').find('.quick-view__wrapper'));
    })

    $('.quick-view__right__close').click(function(){
        btnClick($(this).closest('.product__card').find('.quick-view__wrapper'));
    })

    $('.filter__btn').click(function(){
        btnClick($(this).closest('.mobile-filter').find('.mobile-filter__menu__wrapper'))
    })

    $('.mobile-filter__menu__close > svg').click(function(){
        btnClick($(this).closest('.mobile-filter').find('.mobile-filter__menu__wrapper'))
    })
})
