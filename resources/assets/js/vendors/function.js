/**
 * Created by Sigma on 12/04/2017.
 */
$(document).ready(function(){
    // $(".dropdown").hover(
    //     function() {
    //         $('.dropdown-menu', this).fadeIn("fast").not('.in .dropdown-menu').stop(true,true).slideDown("400");
    //         $(this).toggleClass('open');
    //     },
    //     function() {
    //         $('.dropdown-menu', this).fadeOut("fast").not('.in .dropdown-menu').stop(true,true).slideUp("400").fadeOut("fast");
    //         $(this).toggleClass('open');
    //     }
    // );

    //responsive slider
    $(".rslides").responsiveSlides({
        speed: 1800,
        timeout: 10000
    });

    //nav
    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
        isClosed = false;

    trigger.click(function () {
        hamburger_cross();
    });

    function hamburger_cross() {

        if (isClosed == true) {
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
        }
    }

    $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
    });

    //carousel
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        loop:true,
        nav:false,
        margin:10,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            960:{
                items:1
            },
            1200:{
                items:1
            }
        }
    });
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY>0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });


});
