(function() {

    var parent = document.querySelector(".price-slider");
    if (!parent) return;

    var
        rangeS = parent.querySelectorAll("input[type=range]"),
        numberS = parent.querySelectorAll("input[type=number]");

    rangeS.forEach(function(el) {
        el.oninput = function() {
            var slide1 = parseFloat(rangeS[0].value),
                slide2 = parseFloat(rangeS[1].value);

            if (slide1 > slide2) {
                [slide1, slide2] = [slide2, slide1];
            }

            numberS[0].value = slide1;
            numberS[1].value = slide2;
        }
    });

    numberS.forEach(function(el) {
        el.oninput = function() {
            var number1 = parseFloat(numberS[0].value),
                number2 = parseFloat(numberS[1].value);

            if (number1 > number2) {
                var tmp = number1;
                numberS[0].value = number2;
                numberS[1].value = tmp;
            }

            rangeS[0].value = number1;
            rangeS[1].value = number2;

        }
    });

})();

// SLICK SLIDER FOR FILTER PAGE


$('#filter .main-img-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: true,
    fade: true,
    autoplay: false,
    autoplaySpeed: 4000,
    speed: 300,
    lazyLoad: 'ondemand',
    asNavFor: '.thumb-nav',
    prevArrow: '<div class="slick-prev"><i class="i-prev"></i><span class="sr-only sr-only-focusable">Previous</span></div>',
    nextArrow: '<div class="slick-next"><i class="i-next"></i><span class="sr-only sr-only-focusable">Next</span></div>'
});
// Thumbnail/alternates slider
$('.thumb-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: true,
    centerPadding: '0px',
    asNavFor: '.main-img-slider',
    dots: false,
    centerMode: false,
    draggable: true,
    speed: 200,
    focusOnSelect: true,
    prevArrow: '<div class="slick-prev"><i class="i-prev"></i><span class="sr-only sr-only-focusable">Previous</span></div>',
    nextArrow: '<div class="slick-next"><i class="i-next"></i><span class="sr-only sr-only-focusable">Next</span></div>'
});


//keeps thumbnails active when changing main image, via mouse/touch drag/swipe
$('.main-img-slider').on('afterChange', function(event, slick, currentSlide, nextSlide) {
    //remove all active class
    $('.thumb-nav .slick-slide').removeClass('slick-current');
    //set active class for current slide
    $('.thumb-nav .slick-slide:not(.slick-cloned)').eq(currentSlide).addClass('slick-current');
});



// SLICK SLIDER FOR DETAIL PAGE


$('#detail .main-img-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: true,
    fade: true,
    autoplay: false,
    autoplaySpeed: 4000,
    speed: 200,
    lazyLoad: 'ondemand',
    asNavFor: '.thumb-nav-detail',
    prevArrow: '<div class="slick-prev"><i class="i-prev"></i><span class="sr-only sr-only-focusable">Previous</span></div>',
    nextArrow: '<div class="slick-next"><i class="i-next"></i><span class="sr-only sr-only-focusable">Next</span></div>'
});
// Thumbnail/alternates slider


// side-menu

$(document).ready(function() {
    $(".sknav").click(function() {
        $(".sticky-side-menu").toggle();
    });

});

$(document).mouseup(function(e) {
    var container = $(".sticky-side-menu");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.hide();
        $(".vis_toc").removeClass("vis_toc_after");
    }
});

$(document).ready(function() {
    $(".closeThes").click(function() {
        $(".sticky-side-menu").hide();
        $(".vis_toc").removeClass("vis_toc_after");
    });

});


$('#bg_filter').click(function(e) {
    e.preventDefault();
    console.log('clicked');
    $(".vis_toc").addClass("vis_toc_after");
    // $(".vis_toc").addClass(".cs-vis");
});

// Date ranger picker
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        // ranges: {
        //     'Today': [moment(), moment()],
        //     'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        //     'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        //     'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        //     'This Month': [moment().startOf('month'), moment().endOf('month')],
        //     'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        // }
    }, cb);

    cb(start, end);

});
