/**
 * Created by Sigma on 12/04/2017.
 */
$(document).ready(function(){

    $('.cd-3d-nav-trigger').on('click', function(){
        toggle3dBlock(!$('.cd-header').hasClass('nav-is-visible'));
    });

    //select a new item from the 3d navigation
    $('.cd-3d-nav').on('click', 'a', function(){
        var selected = $(this);
        selected.parent('li').addClass('cd-selected').siblings('li').removeClass('cd-selected');
        updateSelectedNav('close');
    });

    $(window).on('resize', function(){
        window.requestAnimationFrame(updateSelectedNav);
    });

    function toggle3dBlock(addOrRemove) {
        if(typeof(addOrRemove)==='undefined') addOrRemove = true;
        $('.cd-header').toggleClass('nav-is-visible', addOrRemove);
        $('.cd-3d-nav-container').toggleClass('nav-is-visible', addOrRemove);
        $('main').toggleClass('nav-is-visible', addOrRemove).one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
            //fix marker position when opening the menu (after a window resize)
            addOrRemove && updateSelectedNav();
        });
    }

    //this function update the .cd-marker position
    function updateSelectedNav(type) {
        var selectedItem = $('.cd-selected'),
            selectedItemPosition = selectedItem.index() + 1,
            leftPosition = selectedItem.offset().left,
            backgroundColor = selectedItem.data('color'),
            marker = $('.cd-marker');

        marker.removeClassPrefix('color').addClass('color-'+ selectedItemPosition).css({
            'left': leftPosition,
        });
        if( type == 'close') {
            marker.one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                toggle3dBlock(false);
            });
        }
    }

    $.fn.removeClassPrefix = function(prefix) {
        this.each(function(i, el) {
            var classes = el.className.split(" ").filter(function(c) {
                return c.lastIndexOf(prefix, 0) !== 0;
            });
            el.className = $.trim(classes.join(" "));
        });
        return this;
    };

    //segundo menu
    var secondaryNav = $('.cd-secondary-nav'),
        secondaryNavTopPosition = secondaryNav.offset().top,
        taglineOffesetTop = $('#cd-intro-tagline').offset().top + $('#cd-intro-tagline').height() + parseInt($('#cd-intro-tagline').css('paddingTop').replace('px', '')),
        contentSections = $('.cd-section');

    $(window).on('scroll', function(){
        //on desktop - assign a position fixed to logo and action button and move them outside the viewport
        ( $(window).scrollTop() > taglineOffesetTop ) ? $('#cd-logo, .cd-btn').addClass('is-hidden') : $('#cd-logo, .cd-btn').removeClass('is-hidden');

        //on desktop - fix secondary navigation on scrolling
        if($(window).scrollTop() > secondaryNavTopPosition ) {
            //fix secondary navigation
            secondaryNav.addClass('is-fixed');
            //push the .cd-main-content giving it a top-margin
            $('.cd-main-content').addClass('has-top-margin');
            //on Firefox CSS transition/animation fails when parent element changes position attribute
            //so we to change secondary navigation childrens attributes after having changed its position value
            setTimeout(function() {
                secondaryNav.addClass('animate-children');
                $('#cd-logo').addClass('slide-in');
                $('.cd-btn').addClass('slide-in');
            }, 200);
        } else {
            secondaryNav.removeClass('is-fixed');
            $('.cd-main-content').removeClass('has-top-margin');
            setTimeout(function() {
                secondaryNav.removeClass('animate-children');
                $('#cd-logo').removeClass('slide-in');
                $('.cd-btn').removeClass('slide-in');
            }, 200);
        }

        //on desktop - update the active link in the secondary fixed navigation
        updateSecondaryNavigation();
    });

    function updateSecondaryNavigation() {
        contentSections.each(function(){
            var actual = $(this),
                actualHeight = actual.height() + parseInt(actual.css('paddingTop').replace('px', '')) + parseInt(actual.css('paddingBottom').replace('px', '')),
                actualAnchor = secondaryNav.find('a[href="#'+actual.attr('id')+'"]');
            if ( ( actual.offset().top - secondaryNav.height() <= $(window).scrollTop() ) && ( actual.offset().top +  actualHeight - secondaryNav.height() > $(window).scrollTop() ) ) {
                actualAnchor.addClass('active');
            }else {
                actualAnchor.removeClass('active');
            }
        });
    }

    //on mobile - open/close secondary navigation clicking/tapping the .cd-secondary-nav-trigger
    $('.cd-secondary-nav-trigger').on('click', function(event){
        event.preventDefault();
        $(this).toggleClass('menu-is-open');
        secondaryNav.find('ul').toggleClass('is-visible');
    });

    //smooth scrolling when clicking on the secondary navigation items
    secondaryNav.find('ul a').on('click', function(event){
        event.preventDefault();
        var target= $(this.hash);
        $('body,html').animate({
                'scrollTop': target.offset().top - secondaryNav.height() + 1
            }, 400
        );
        //on mobile - close secondary navigation
        $('.cd-secondary-nav-trigger').removeClass('menu-is-open');
        secondaryNav.find('ul').removeClass('is-visible');
    });

    //on mobile - open/close primary navigation clicking/tapping the menu icon
    $('.cd-primary-nav').on('click', function(event){
        if($(event.target).is('.cd-primary-nav')) $(this).children('ul').toggleClass('is-visible');
    });

    //check
    $(function () {
        $('.button-checkbox').each(function () {

            // Settings
            var $widget = $(this),
                $button = $widget.find('button'),
                $checkbox = $widget.find('input:checkbox'),
                color = $button.data('color'),
                settings = {
                    on: {
                        icon: 'glyphicon glyphicon-check'
                    },
                    off: {
                        icon: 'fa fa-square-o'
                    }
                };

            // Event Handlers
            $button.on('click', function () {
                $checkbox.prop('checked', !$checkbox.is(':checked'));
                $checkbox.triggerHandler('change');
                updateDisplay();
            });
            $checkbox.on('change', function () {
                updateDisplay();
            });

            // Actions
            function updateDisplay() {
                var isChecked = $checkbox.is(':checked');

                // Set the button's state
                $button.data('state', (isChecked) ? "on" : "off");

                // Set the button's icon
                $button.find('.state-icon')
                    .removeClass()
                    .addClass('state-icon ' + settings[$button.data('state')].icon);

                // Update the button's color
                if (isChecked) {
                    $button
                        .removeClass('btn-default')
                        .addClass('btn-' + color + ' active');
                }
                else {
                    $button
                        .removeClass('btn-' + color + ' active')
                        .addClass('btn-default');
                }
            }

            // Initialization
            function init() {

                updateDisplay();

                // Inject the icon if applicable
                if ($button.find('.state-icon').length == 0) {
                    $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
                }
            }
            init();
        });
    });

    //check destinations
    $("#btn").click(function(){
        alert(cb1);
    });

    //parallax
    /* detect touch */
    if("ontouchstart" in window){
        document.documentElement.className = document.documentElement.className + " touch";
    }
    if(!$("html").hasClass("touch")){
        /* background fix */
        $(".parallax").css("background-attachment", "fixed");
    }

    /* fix vertical when not overflow
     call fullscreenFix() if .fullscreen content changes */
    function fullscreenFix(){
        var h = $('body').height();
        // set .fullscreen height
        $(".content-b").each(function(i){
            if($(this).innerHeight() > h){ $(this).closest(".fullscreen").addClass("overflow");
            }
        });
    }
    $(window).resize(fullscreenFix);
    fullscreenFix();

    /* resize background images */
    function backgroundResize(){
        var windowH = $(window).height();
        $(".background").each(function(i){
            var path = $(this);
            // variables
            var contW = path.width();
            var contH = path.height();
            var imgW = path.attr("data-img-width");
            var imgH = path.attr("data-img-height");
            var ratio = imgW / imgH;
            // overflowing difference
            var diff = parseFloat(path.attr("data-diff"));
            diff = diff ? diff : 0;
            // remaining height to have fullscreen image only on parallax
            var remainingH = 0;
            if(path.hasClass("parallax") && !$("html").hasClass("touch")){
                var maxH = contH > windowH ? contH : windowH;
                remainingH = windowH - contH;
            }
            // set img values depending on cont
            imgH = contH + remainingH + diff;
            imgW = imgH * ratio;
            // fix when too large
            if(contW > imgW){
                imgW = contW;
                imgH = imgW / ratio;
            }
            //
            path.data("resized-imgW", imgW);
            path.data("resized-imgH", imgH);
            path.css("background-size", imgW + "px " + imgH + "px");
        });
    }
    $(window).resize(backgroundResize);
    $(window).focus(backgroundResize);
    backgroundResize();

    /* set parallax background-position */
    function parallaxPosition(e){
        var heightWindow = $(window).height();
        var topWindow = $(window).scrollTop();
        var bottomWindow = topWindow + heightWindow;
        var currentWindow = (topWindow + bottomWindow) / 2;
        $(".parallax").each(function(i){
            var path = $(this);
            var height = path.height();
            var top = path.offset().top;
            var bottom = top + height;
            // only when in range
            if(bottomWindow > top && topWindow < bottom){
                var imgW = path.data("resized-imgW");
                var imgH = path.data("resized-imgH");
                // min when image touch top of window
                var min = 0;
                // max when image touch bottom of window
                var max = - imgH + heightWindow;
                // overflow changes parallax
                var overflowH = height < heightWindow ? imgH - height : imgH - heightWindow; // fix height on overflow
                top = top - overflowH;
                bottom = bottom + overflowH;
                // value with linear interpolation
                var value = min + (max - min) * (currentWindow - top) / (bottom - top);
                // set background-position
                var orizontalPosition = path.attr("data-oriz-pos");
                orizontalPosition = orizontalPosition ? orizontalPosition : "50%";
                $(this).css("background-position", orizontalPosition + " " + value + "px");
            }
        });
    }
    if(!$("html").hasClass("touch")){
        $(window).resize(parallaxPosition);
        //$(window).focus(parallaxPosition);
        $(window).scroll(parallaxPosition);
        parallaxPosition();
    }

    ///carousel
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false,
                loop: false,
                margin: 20
            }
        }
    });


    //contact
    $('#step1-link').click(function(e) {
        $("#step1-section").delay(300).fadeIn(400);
        $("#step2-section").fadeOut(400);
        $('#step2-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#step2-link').click(function(e) {
        $("#step2-section").delay(100).fadeIn(400);
        $("#step1-section").fadeOut(400);
        $('#step1-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });


});
