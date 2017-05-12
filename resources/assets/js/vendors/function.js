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
            }, 50);
        } else {
            secondaryNav.removeClass('is-fixed');
            $('.cd-main-content').removeClass('has-top-margin');
            setTimeout(function() {
                secondaryNav.removeClass('animate-children');
                $('#cd-logo').removeClass('slide-in');
                $('.cd-btn').removeClass('slide-in');
            }, 50);
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

});
