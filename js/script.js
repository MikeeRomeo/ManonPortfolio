(function ($) {
    jQuery(function () {
        const wrapper =  $(".portfolio_gallery__wrapper");
        wrapper.find("[data-slide='" + 0 + "']").addClass("active");
        $(".portfolio_gallery__nav").find("[data-id='" + 0 + "']").addClass("active");
        setSliderHeight(0);

        $(".portfolio-gallery-button").on("click", function () {
            const id = $(this).data("id");

            $(".portfolio-gallery-button").removeClass("active");
            $(this).addClass("active");
            $(".portfolio_gallery__item").removeClass("active");
            wrapper.find("[data-slide='" + id + "']").addClass("active");
        });

        function setSliderHeight(id){
            if($(window).width() <= 991){
             wrapper.height(calcHeight(id));
            }
        }

        function calcHeight(id){
            return wrapper.find("[data-slide='" + id + "']").find(".portfolio_gallery__description").height() +
                   wrapper.find("[data-slide='" + id + "']").find(".portfolio_gallery__image").height() + 30;
        }

    })
})(jQuery);

