(function ($) {
    jQuery(function () {
        $(".portfolio_gallery__wrapper").find("[data-slide='" + 0 + "']").addClass("active");

        $(".portfolio-gallery-button").on("click", function () {
            const id = $(this).data("id");

            $(".portfolio-gallery-button").removeClass("active");
            $(this).addClass("active");

            console.log($(this).data("id"));
            // console.log($("portfolio_gallery__wrapper").find("[data-slide='" + id + "']"));
            $(".portfolio_gallery__item").removeClass("active");
            $(".portfolio_gallery__wrapper").find("[data-slide='" + id + "']").addClass("active");
            //
            // $(".portfolio_gallery__item").hide('fast');
            // $(".portfolio_gallery__wrapper").find("[data-slide='" + id + "']").fadeIn('fast');

        });

    })
})(jQuery);

