/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
var ss;
(function ($) {
    ss = {
        init: function () {
            try {
                // Background Cover Images
                function initBgCover(context) {
                    if (!context) context = $('body');
                    context.find('.js-has-bg-cover').each(function () {
                        var holder = $(this);
                        var image = holder.find('> img').hide();
                        var imageSrc = image.prop('src');
                        holder.css({
                            backgroundImage: 'url(' + imageSrc + ')',
                        });
                    });
                }
                initBgCover();

                // Smooth Scroll
                var winWidth = $(window).width();
                $('a.js-has-smooth[href*="#"]:not([href="#"])').click(function () {
                    if (
                        location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') &&
                        location.hostname === this.hostname
                    ) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            const offset = winWidth > 991 ? 50 : 0;
                            $('html, body').animate(
                                {
                                    scrollTop: target.offset().top - offset,
                                },
                                1000
                            );
                            return false;
                        }
                    }
                });

                // Services Slider
                var swiper = new Swiper('.services-slider', {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                        },
                        768: {
                            slidesPerView: 2,
                        },
                        1024: {
                            slidesPerView: 3,
                        },
                    },
                });

                // Gallery Swiper
                var swiper = new Swiper('.gallery-slider', {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    navigation: {
                        nextEl: '.gallery-slider-button-next',
                        prevEl: '.gallery-slider-button-prev',
                    },

                    breakpoints: {
                        640: {
                            slidesPerView: 'auto',
                        },
                    },
                })


                // Back to Top Button Click
                $('#backToTop').on('click', function () {
                    $('html, body').animate({ scrollTop: 0 }, 1000);
                });
            } catch (err) {
                console.log(err);
            }
        },
    };

    $(function () {
        ss.init();
    });
})(jQuery);