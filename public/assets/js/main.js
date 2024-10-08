if ($(window).width() < 768) {
    $('.menu-item-has-children').click(function() {
        $(this).find('.sub-menu').stop().delay(200).animate({
            height: 'toggle'
        }, 300);
    });
}
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
    const swiperBookSlider = new Swiper(".book-slider", {
        slidesPerView: "auto",
        spaceBetween: 20,
        freeMode: true,
        navigation: {
            nextEl: "#book-slider-prev",
            prevEl: "#book-slider-next",
        },
    });
    const swiperClassProductSlider = new Swiper(".class-product-slider", {
        slidesPerView: "auto",
        spaceBetween: 20,
        freeMode: true,
        navigation: {
            nextEl: "#class-product-slider-prev",
            prevEl: "#class-product-slider-next",
        },
    });
    const swiperPackageProductSlider = new Swiper(".package-product-slider", {
        slidesPerView: "auto",
        spaceBetween: 40,
        freeMode: true,
        navigation: {
            nextEl: "#package-product-slider-prev",
            prevEl: "#package-product-slider-next",
        },
    });
    const swiperNewsSlider = new Swiper(".news-section-slider", {
        slidesPerView: "auto",
        spaceBetween: 18,
        freeMode: true,
        navigation: {
            nextEl: "#news-section-slider-prev",
        },
    });
    const swiperBlogSlider = new Swiper(".blog-section-slider", {
        slidesPerView: "auto",
        spaceBetween: 18,
        freeMode: true,
        navigation: {
            nextEl: "#blog-section-slider-prev",
        },
    });
    // topRatingSlider
    const topRatingSwiper = new Swiper(".top-rating-slider", {
        direction: 'horizontal',
        slidesPerView: 2.2,
        grid: {
            rows: 2,
            fill: "row",
        },
        autoplay: {
            duration: 3000,
            pauseOnMouseEnter: true
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
    // comment slider
    const userCommentSwiper = new Swiper(".comment-carousel-slider", {
        direction: "vertical",
        effect: 'slide',
        centeredSlides: true,
        slidesPerView: 1,
        navigation: {
            nextEl: "#comment-carousel-slider-prev",
            prevEl: "#comment-carousel-slider-next",
        },
    });
    //faq
    const questionBtn = document.querySelectorAll(".question-btn"),
        answerContent = document.querySelectorAll(".answer-content");
    function answerContentActive() {
        answerContent.forEach((element) => {
            element.style.height = "0px";
        });
    }
    questionBtn.forEach((element) => {
        element.addEventListener("click", function () {
            let answerID = this.getAttribute("data-target-content");
            let btnID = this.getAttribute("data-question-btn");
            let answerContent = document.getElementById(answerID);
            let questionBtn = document.getElementById(btnID);
            answerContentActive();
            if (answerContent.clientHeight > 0) {
                answerContent.style.height = "0px";
                questionBtn.style.transform = "rotate(0deg)";
            } else {
                answerContent.style.height = answerContent.scrollHeight + "px";
                questionBtn.style.transform = "rotate(90deg)";
            }
        });
    });
});
$(".top-rate-cart").on("contextmenu", function(e) {
    e.preventDefault();
});
// TeaserShowVideo
$('#teaser-play-button').click(function (){
    $("#overlay").show().animate({scale:'1'},300);
    let videoName = this.getAttribute('data-video-name');
    let videoConfig = this.getAttribute('data-video-config');
    $('#videoItem').addClass('active');
    $('#videoContainerCloseIcon').show();
    $('#videoContainerCloseIcon').addClass('active');
    $('#videoIframe').addClass('active');
    $('#videoIframe').attr('src',`https://player.arvancloud.ir/index.html?config=${videoConfig}&skin=shaka`);
    $('#videoIframe').attr('name',videoName);
})
$('#overlay').click(function (){
    $("#overlay").animate({scale: 0}, 300, function(){$(this).hide();});
    $('#videoItem').removeClass('active');
    $('#videoContainerCloseIcon').hide();
    $('#videoContainerCloseIcon').removeClass('active');
    $('#videoIframe').removeClass('active');
    $('#videoIframe').attr('src','');
    $('#videoIframe').attr('name','');
})
$('#videoContainerCloseIcon').click(function (){
    $("#overlay").animate({scale: 0}, 300, function(){$(this).hide();});
    $('#videoItem').removeClass('active');
    $('#videoContainerCloseIcon').hide();
    $('#videoContainerCloseIcon').removeClass('active');
    $('#videoIframe').removeClass('active');
    $('#videoIframe').attr('src','');
    $('#videoIframe').attr('name','');
})
$('#installments-request').click(function (){
    $("#overlay").show().animate({scale:'1'},300);
    $("#installments-request-modal").show()
    $("#installments-request-modal").removeClass('translate-y-20')
    $("#installments-request-modal").removeClass('opacity-0')
    $("#installments-request-modal").removeClass('invisible')
    $("#installments-request-modal").addClass('-translate-y-1/2')

})
$('#installments-request-modal-close').click(function (){
    $("#overlay").animate({scale: 0}, 300, function(){$(this).hide();});
    $("#installments-request-modal").addClass('translate-y-20')
    $("#installments-request-modal").addClass('opacity-0')
    $("#installments-request-modal").removeClass('-translate-y-1/2')
    setTimeout(function() {
        $("#installments-request-modal").addClass('invisible')
        $("#installments-request-modal").hide()
    }, 300);

})
$('#overlay').click(function (){
    $("#overlay").animate({scale: 0}, 300, function(){$(this).hide();});
    $("#installments-request-modal").addClass('translate-y-20')
    $("#installments-request-modal").addClass('opacity-0')
    $("#installments-request-modal").removeClass('-translate-y-1/2')
    setTimeout(function() {
        $("#installments-request-modal").addClass('invisible')
        $("#installments-request-modal").hide()
    }, 300);

})