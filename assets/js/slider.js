(function ($) {
    "use strict";
    $(document).ready(function () {
        function sliderAnimations(elements) {
            var animationEndEvents = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
            elements.each(function () {
                var $this = $(this);
                var $animationDelay = $this.data("delay");
                var $animationDuration = $this.data("duration");
                var $animationType = "Nexusville-animation " + $this.data("animation");
                $this.css({
                    "animation-delay": $animationDelay,
                    "-webkit-animation-delay": $animationDelay,
                    "animation-duration": $animationDuration,
                });
                $this.addClass($animationType).one(animationEndEvents, function () {
                    $this.removeClass($animationType);
                });
            });
        }
        var sliderOptions = {
            speed: 1000,
            autoplay: false,
            delay: 1000,
            disableOnInteraction: false,
            initialSlide: 0,
            parallax: false,
            effect: 'fade',
            mousewheel: false,
            loop: true,
            grabCursor: true,
            navigation: {
                nextEl: ".slider-arrow .slider-next",
                prevEl: ".slider-arrow .slider-prev",
            },
            pagination: {
                el: ".Nexusville-swiper-pagination",
                clickable: true,
            },
        };
        sliderOptions.on = {
            slideChangeTransitionStart: function () {
                var swiper = this;
                var animatingElements = $(swiper.slides[swiper.activeIndex]).find("[data-animation]");
                sliderAnimations(animatingElements);
            },

            resize: function () {
                this.update();
            },
        };

        var swiper = new Swiper(".Nexusville-slider", sliderOptions);
    });
})(jQuery);
