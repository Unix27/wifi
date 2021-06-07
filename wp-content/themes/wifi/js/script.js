jQuery(document).ready(function($) {
    // JS-ФУНКЦИЯ ОПРЕДЕЛЕНИЯ ПОДДЕРЖКИ WEBP
    // function testWebP(callback) {
    //     var webP = new Image();
    //     webP.onload = webP.onerror = function() {
    //         callback(webP.height == 2);
    //     };
    //     webP.src =
    //         "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
    // }
    // testWebP(function (support) {
    //   if (support == true) {
    //     document.querySelector("body").classList.add("webp");
    //   } else {
    //     document.querySelector("body").classList.add("no-webp");
    //   }
    // });
    // ========================================================================
    //100 vh mobile 
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
    window.addEventListener('resize', () => {
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });

    var swiper = new Swiper('.js-slider-home', {
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        navigation: {
            nextEl: '.js-slider-home-left',
            prevEl: '.js-slider-home-right',
        },
        breakpoints: {
            // when window width is >= 320px
            1400: {
                slidesPerView: 4,
                spaceBetween: 20
            },
            998: {
                slidesPerView: 3,
                spaceBetween: 20
            }
        }
    });

    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 1500,
            easing: 'linear',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

    $(document).on('click', '.js-burger-menu-block-btn', function (e) {
        e.preventDefault();
        $('.js-burger-menu-block').addClass('js-active');
        $('.bg-overley').addClass('js-active');
    })
    $(document).on('click', '.js-burger-menu-block-exit', function (e) {
        e.preventDefault();
        $('.js-burger-menu-block').removeClass('js-active');
        $('.bg-overley').removeClass('js-active');
    })
    $(document).on('click', '.bg-overley', function (e) {
        e.preventDefault();
        $('.js-burger-menu-block').removeClass('js-active');
        $('.bg-overley').removeClass('js-active');
    })

});
