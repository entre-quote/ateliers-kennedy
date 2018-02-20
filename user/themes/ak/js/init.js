
(function($){

    var app = {

        init: function(){
            this.initHomeSlider();
            this.initSticky();
            this.initSmoothScroll();
            this.initBackToHome();
            this.initMobileMenu();
            // this.initCloseMobileMenu();
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
            $('.page-nav a').on('click', function() {
                // e.preventDefault();
                $('header').addClass('is-sticky');
                var page  = $(this).attr('href'), // cible
                speed = 750, // Durée (en ms)
                newPos = $(page).offset().top - ($('.header').outerHeight() - 1);
                $('html, body').animate({scrollTop: newPos}, speed); // Go
                return false;
            });
        },

        initMobileMenu: function(){
            //
            $('.mobile-menu').on('click', function (e) {
                e.preventDefault();
                $('.main-nav').toggleClass('is-open');
            });
        },

        // initCloseMobileMenu: function(){
        //     //
        //     $('header .main-nav.is-open .grid a').on('click', function (e) {
        //         e.preventDefault();
        //         $('.main-nav').removeClass('is-open');
        //     });
        //
        // }

    };

    app.init();

})(jQuery);
