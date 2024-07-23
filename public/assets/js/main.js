$('.menu-item-has-children').hover(function() {
    $(this).find('.sub-menu').stop().delay(200).animate({
        height: 'toggle'
    }, 300);
});
$('#mobile-menu-open').click(function (){
    $("#overlay").show().animate({scale:'1'},300);
    $('#mobile-menu-section').show().animate({right: "0"}, 1000);
    $('#mobile-menu-close').show().animate({scale:'1'}, 1000);
})
$('#overlay').click(function (){
    $("#overlay").animate({scale: 0}, 300, function(){$(this).hide();});
    $("#mobile-menu-section").animate({right: '-110%'}, 1000, function(){$(this).hide();});
    $("#mobile-menu-close").animate({scale:'0'}, 1000, function(){$(this).hide();});
})
$('#mobile-menu-close').click(function (){
    $("#overlay").animate({scale: 0}, 300, function(){$(this).hide();});
    $("#mobile-menu-section").animate({right: '-110%'}, 1000, function(){$(this).hide();});
    $("#mobile-menu-close").animate({scale:'0'}, 1000, function(){$(this).hide();});
})
//homePage Showcase Slider
const showcaseSwiper = new Swiper("#showcaseSlider", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay: {
        duration: 5000,
        pauseOnMouseEnter: true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
document.addEventListener("DOMContentLoaded", () => {
    const swiperDefaultSlider = new Swiper(".horizontal-default-slider", {
        slidesPerView: "auto",
        spaceBetween: 20,
        freeMode: true,
    });
    // topRatingSlider
    const topRatingSwiper = new Swiper(".top-rating-slider", {
        direction: 'horizontal',
        slidesPerView: 2,
        grid: {
            rows: 2,
            fill: "row",
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            992: {
                slidesPerView: 4,
                spaceBetween: 20
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 20
            },
            1280: {
                slidesPerView: 6,
                spaceBetween: 20
            }
        },
        spaceBetween: 20,
        navigation: {
            nextEl: "#top-rating-slider-prev",
            prevEl: "#top-rating-slider-next",
        },
    });
});