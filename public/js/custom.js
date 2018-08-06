$(document).ready(function () {

    $('.datepicker').datepicker();

    $("a[href='#']").click(function (e) {
        e.preventDefault();
    });

    // bootstrap select

    $('.selectpicker').selectpicker();

    var navOffset = $(".main_nav").offset().top;
    $(".main_nav").wrap('<div class="placeholder"></div>');
    $("div.placeholder").height($(".main_nav").innerHeight());


    $(window).scroll(function () {

        var scrollPos = $(window).scrollTop();

        if (scrollPos >= navOffset) {

            $(".main_nav").addClass("fixed_menu");
            //$(".sidebar").addClass("sidebarFixed");

        } else {
            $(".main_nav").removeClass("fixed_menu");
            //$(".sidebar").removeClass("sidebarFixed");
        }
    });


    // fancy box

    $('.fancybox').fancybox();

    // center slider..... gallery slider

    $('.responsive2').slick({

        centerMode: true,
        centerPadding: '60px',
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        responsive: [
            {
                breakpoint: 1599,
                settings: {
                    slidesToShow: 4,
                }
    },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
    }, {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
    },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
    }
  ]
    });

    // first main slider on home page

    $('.responsive,.inspirational_slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
    },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
    },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
    }
  ]
    });


    $('.event_slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
    },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
    }
  ]
    });
    // packages slider

    $('.responsive3').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
    },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
    },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
    }
  ]
    });



    // wellness slider

    $('.single_item').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        infinite: true,
        speed: 300
    });

    $('.testimonials_slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        infinite: true,
        speed: 300
    });


    // weddings slider

    $('.responsive4').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        responsive: [

            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
    }
  ]
    });



    // common gallery

    var temp = "<div class='brick' style='width:{width}px;'><a href='#' class='like_img'><i class='fa fa-heart-o'></i><span>123</span></a><img src='images/gallery/{index}.jpg' width='100%'></div>";
    var w = 1,
        h = 1,
        html = '',
        limitItem = 5;
    for (var i = 0; i < limitItem; ++i) {
        w = 1 + 3 * Math.random() << 0;
        html += temp.replace(/\{width\}/g, w * 150).replace("{index}", i + 1);
    }
    $("#freewall_new,#freewall").html(html);

    var wall = new Freewall("#freewall");
    wall.reset({
        selector: '.brick',
        animate: true,
        //cellW: 150,
        cellH: 'auto',
        onResize: function () {
            wall.fitWidth();
        }
    });

    // resize and call function for another gallery on Main hotel page photos TAB

    var wall1 = new Freewall("#freewall_new");
    wall1.reset({
        selector: '.brick',
        animate: true,
        //cellW: 150,
        cellH: 'auto',
        onResize: function () {
            wall1.fitWidth();
        }
    });
    //$(".brick img").wrap('<a href="images/{index}.jpg" class="fancybox" data-fancybox-group="gallery"></a>');
    var images = wall.container.find('.brick');
    images.find('img').load(function () {
        wall.fitWidth();

    });
    var images1 = wall1.container.find('.brick');
    images1.find('img').load(function () {
        wall1.fitWidth();

    });

    // like btn

    $(".like_img,.img_likes").click(function () {
        $(this).children("i").toggleClass("fa fa-heart-o fa fa-heart");
    });

    // on load Tab

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('.slick-slider').slick('setPosition');

        // on load of the tab
        wall.fitWidth();
        wall1.fitWidth();
    });

    // wow js

    new WOW().init();

    // toggle main calender

    $(".main_calender h3").click(function () {
        $(this).parent().children(".filter_inner").slideToggle();
        $(this).toggleClass("toggle_up");

    });

    $(".account_tab_links .packages_tabs").click(function () {
        $(this).children("ul").toggleClass("toggle_up");
    });

}); // document ready ends here

$(document).load(function () {
    $(window).trigger("#freewall_new,#freewall");
});
