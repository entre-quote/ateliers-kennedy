
(function($){

    var app = {

        init: function(){
            this.initHomeSlider();
            this.initSticky();
            this.initSmoothScroll();
            this.initBackToHome();
            this.initMobileMenu();
        },

        initHomeSlider: function(){
            //
            $('.home-slider, .atelier-slider').slick({
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 4000,
                fade: true,
                cssEase: 'linear',
                pauseOnFocus: false,
                pauseOnHover: false

            });
        },

        initSticky: function(){
            //
            var scrollTop = 0,
            $w = $(window),
            $header = $header || $('.header'), //Default Header
            headerAllreadyFixed = false;

            $w.scroll(function(){
                scrollTop = $w.scrollTop();

                //toggle class on scroll
                if(scrollTop > 0 && headerAllreadyFixed === false) {
                    $header.addClass('is-sticky');
                    headerAllreadyFixed = true;
                } else if(scrollTop == 0 && headerAllreadyFixed) {
                    $header.removeClass('is-sticky');
                    headerAllreadyFixed = false;
                }
            });

            $w.trigger('scroll');
        },

        initSmoothScroll: function(){
            //
            $('.home-nav a, .scroll-to-top, .slick-slide a').on('click', function (e) {
                e.preventDefault();
                $('header').addClass('is-sticky');
                var page  = $(this).attr('href'), // cible
                speed = 750, // Durée (en ms)
                newPos = $(page).offset().top - ($('.header').outerHeight() - 1);
                $('html, body').animate({scrollTop: newPos}, speed); // Go
                return false;
            });
        },

        initBackToHome: function() {
            //
            hash = window.location.hash;
            $(window).bind("load", function() {

                if ( $(hash).length ) {
                    speed = 750,
                    newPos = $(location.hash).offset().top - ($('.header').outerHeight() - 1);

                    $('html, body').animate({scrollTop: newPos}, speed);
                }
            });
        },

        initMobileMenu: function(){
            //
            $('.mobile-menu').on('click', function(e) {
                e.preventDefault();
                $('.main-nav').toggleClass('is-open');

                $('.main-nav.is-open .home-nav a').on('click', function(e) {
                    e.preventDefault();
                    $('.main-nav').removeClass('is-open');
                });

                $('.main-nav.is-open .page-nav a').on('click', function() {
                    $('.main-nav').removeClass('is-open');
                });
            });
        }

    };

    app.init();

})(jQuery);
