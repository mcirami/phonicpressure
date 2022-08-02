jQuery(document).ready(function($){

    $("#player").musicPlayer({ elements: ['artwork', 'information', 'controls', 'progress', 'time', 'volume'],
        onPlay: function() {
            $('body').css('background', 'black');
            $('.bg_image').addClass('play');
        },
        onStop: function() {
            $('.bg_image').removeClass('play');
        },
        onPause: function() {
            $('.bg_image').removeClass('play');
        },
    });

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

        var target = $(this).attr("href");
        if (target.includes("#")) {
            e.preventDefault(); // prevent hard jump, the default behavior
            let headerHeight = 0;

            if ($(window).width() < 768 &&
                !$(this).hasClass('mobile_logo_click')) {
                headerHeight = ($('#global_header').height() -
                    $('#navToggler').height()) + 50;
            } else {
                headerHeight = $('#global_header').height() + 20;
            }

            // Set the target as variable

            // perform animated scrolling by getting top-position of target-element and set it as scroll target
            $('html, body').
                animate({scrollTop: $(target).offset().top - headerHeight},
                    600);
        }
    });

    $(window).scroll(function() {
        var headerHeight = $('#global_header').height() + 40;
        var scrollDistance = $(window).scrollTop() - headerHeight;

        // Assign active class to nav links while scolling
        $('.page-section').each(function(i) {

            if ($(this).position().top <= scrollDistance) {
                $('.navigation a.active').removeClass('active');
                if (i === 3) {
                    i += 3;
                } else {
                    i += 2;
                }


                $('.navigation a' ).eq(i).addClass('active');
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

    const url = window.location.href + "mailer.php";

    const spinner = document.querySelector('#spinner');

    document.querySelector('#contact-us').addEventListener("submit", function() {
        spinner.classList.add('active');
    });

    $('#contact-us').validate({

        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            },
            message: {
                required: true,
            },
        },
        errorElement: "span" ,
        messages: {
            name: "Please enter your name",
            email: "Please enter valid email address",
            phone: "Please enter a valid phone",
            message: "Please enter your message"
        },
        invalidHandler: function(event, validator) {
            spinner.classList.remove('active');
        },
        submitHandler: function(form) {
            var dataparam = $('#contact-us').serialize();

            $.ajax({
                type: 'POST',
                async: true,
                url: url,
                data: dataparam,
                datatype: 'json',
                cache: true,
                global: false,
                beforeSend: function() {
                    $('#loader').show();
                },
                success: function(data) {
                    if(data === 'success'){
                        $('.form_wrap').html("<div class='success_message'><h2>Your Message Has Been Sent!</h2><p>We will get in touch with you shortly.</p></div>");
                        console.log(data);
                    } else {
                        $('.no-config').show();
                        console.log(data);
                    }

                },
                complete: function() {
                    spinner.classList.remove('active');
                }
            });
        }
    });

    function formatNumber(n) {
        // format number 1000000 to 1,234,567
        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }

});

