(function ($) {
    jQuery(function () {
        const wrapper =  $(".portfolio_gallery__wrapper");
        const nav =  $(".portfolio_gallery__nav");
        const slidesLength = $('.portfolio_gallery__item').length-1;
        let currentSlide = 0;


        // Portfolio slider LazyBlock
        wrapper.find("[data-slide='" + 0 + "']").addClass("active");
        nav.find("[data-id='" + 0 + "']").addClass("active");
        setSliderHeight(0);

        $(".portfolio-gallery-button").on("click", function () {
            const id = $(this).data("id");
            setActiveSlide(id);
        });


        function setActiveSlide(id){
            $(".portfolio-gallery-button").removeClass("active");
            $(".portfolio_gallery__item").removeClass("active");
            wrapper.find("[data-slide='" + id + "']").addClass("active");
            nav.find("[data-id='" + id + "']").addClass("active");

            setSliderHeight(id);
        }

        function setSliderHeight(id){
            if($(window).width() <= 991){
                wrapper.height(calcHeight(id));
                // console.log( wrapper.height());
            }
        }

        function calcHeight(id){
            return wrapper.find("[data-slide='" + id + "']").find(".portfolio_gallery__description").height() +
                   wrapper.find("[data-slide='" + id + "']").find(".portfolio_gallery__image").height() + 30;
        }

        function nextSlide( event ) {
            if(event.data.name === "next" ){
                // console.log('volgende');
                // console.log(currentSlide);
                ++currentSlide;
                if(currentSlide > slidesLength){
                    currentSlide = 0;
                }
            }
            if(event.data.name === "prev"){
                // console.log('vorige');
                // console.log(currentSlide);
                --currentSlide;
                if(currentSlide < 0){
                    currentSlide = slidesLength;
                }
            }
            setActiveSlide(currentSlide);
        }

        $( ".button-next" ).on( "click", {
            name: "next"
        }, nextSlide );

        $( ".button-prev" ).on( "click", {
            name: "prev"
        }, nextSlide );


        // Mobile toggle
        $('#mobile-nav-check').on('change', function(e) {
            $('#header').toggleClass("active"); //you can list several class names
            console.log('toggle the fucking class');
            // e.preventDefault();
        });
    })
})(jQuery);

