jQuery(document).ready(function($){

    $("#player").musicPlayer({ elements: ['artwork', 'information', 'controls', 'progress', 'time', 'volume'], onPlay: function() { $('body').css('background', 'black'); } });

    $(window).on('resize', function () {

        var mobileMenuIcon = $('.mobile_menu_icon');
        if ($(window).width() > 768) {

            if(mobileMenuIcon.hasClass('open')) {
                mobileMenuIcon.removeClass('open');
                $('#navbarNav').removeClass('open');
                $('#navToggler').addClass('collapse');
            }
        }

    });


    /*****************************/

    /* Mobile menu */

    $('.mobile_menu_icon').on('touchstart click', function (e) {
        e.preventDefault();

        if($(this).hasClass('open')) {
            window.setTimeout(function () {
                $('#navbarNav').toggleClass('open');
            }, 800);
            $('#navToggler').addClass('collapse');
        } else {
            $('#navbarNav').toggleClass('open');
            $('#navToggler').removeClass('collapse');
        }

        $(this).toggleClass('open');

    });

    $('.navigation a').on('click', function(e) {
        e.preventDefault(); // prevent hard jump, the default behavior

        if ($(window).width() < 768 && !$(this).hasClass('mobile_logo_click')) {
            var headerHeight = ($('#global_header').height() - $('#navToggler').height()) + 50;
        } else {
            var headerHeight = $('#global_header').height() + 20;
        }

        var target = $(this).attr("href"); // Set the target as variable

        // perform animated scrolling by getting top-position of target-element and set it as scroll target
        $('html, body').animate({scrollTop: $(target).offset().top - headerHeight}, 600);
    });

    $(window).scroll(function() {
        var headerHeight = $('#global_header').height() + 40;
        var scrollDistance = $(window).scrollTop() - headerHeight;

        // Assign active class to nav links while scolling
        $('.page-section').each(function(i) {
            if ($(this).position().top <= scrollDistance) {
                $('.navigation a.active').removeClass('active');
                if(i === 3) {
                    i++
                }
                if(i === 2) {
                    i++
                }
                $('.navigation a').eq(i).addClass('active');
            } else if ($(this).position().top === 0) {
                $('.navigation a.active').removeClass('active');
            }
        });

        if ($(window).scrollTop() > 300) {
            $('.header').addClass('scroll');
        } else {
            $('.header').removeClass('scroll');
        }

    }).scroll();

    if($(window).width() < 768) {
        $('.navigation a.nav-link').on('click', function(){
            $('#navToggler').addClass('collapse');
            $('#navbarNav').toggleClass('open');
            $('.mobile_menu_icon').toggleClass('open');
        });
    }
});

