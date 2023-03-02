$(document).on('ready',function(){
    $('.loading').remove('.loading');

    $(".slider").not('.slick-initialized').slick()
    $('.home__slider').slick({
        prevArrow: false,
        nextArrow: false,
        dots: true
    });
    // $(".slider").not('.slick-initialized').slick()

    // $('.home__project__slider').slick({
    //     slidesToScroll: 1,
    //     slidesToShow: 2,
    //     prevArrow: false,
    //     nextArrow: false,
    //     dots: false,
    //     autoplay: true,
    //     autoplaySpeed: 2000,
    //     responsive: [
    //         {
    //           breakpoint: 1140,
    //           settings: {
    //             slidesToShow: 3
    //           }
    //         },
    //         {
    //             breakpoint: 992,
    //             settings: {
    //               slidesToShow: 3
    //             }
    //         },
    //         {
    //             breakpoint: 768,
    //             settings: {
    //               slidesToShow: 2
    //             }
    //         },
    //     ]
    // });



})

const slider = document.querySelector('.home__project__slider')
const item = document.querySelectorAll('.home__project__slider__item')
let isDragStart = false,prevPageX,prevScrollLeft;

const dragStart = (e) =>{
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = slider.scrollLeft;
}
const dragStop = () =>{
    isDragStart = false;
}

const dragging = (e) =>{
    if(!isDragStart) return;
    e.preventDefault();
    let positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    slider.scrollLeft = prevScrollLeft - positionDiff;
}
slider.addEventListener('mousedown',dragStart)
slider.addEventListener('touchstart',dragStart)

slider.addEventListener('mousemove',dragging)
slider.addEventListener('touchmove',dragging)

slider.addEventListener('mouseup',dragStop)

slider.addEventListener('mouseleave',dragStop)
slider.addEventListener('touchend',dragStop)

item.forEach((item)=>{
    item.addEventListener('click',function(e){
        btnClick($(this))
    })
})




