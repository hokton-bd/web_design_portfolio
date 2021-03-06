const opener = $('.drawer-opener');
const closer = $('.drawer-closer');
const d_content = $('.drawer-content');
const d_nav = $('.drawer-nav');

opener.on('click', function() {
    d_nav.addClass('d_check');
    d_content.addClass('fadeIn');

});

closer.on('click', function() {
    d_content.removeClass('fadeIn');
    d_nav.removeClass('d_check');
});

$('.drawer-link').on('click', function(){
    d_nav.removeClass('d_check');
});

// Basic Code keep it 
$(document).ready(function () {
    $(document).on("scroll", onScroll);

    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");

        $('#global-nav a').each(function () {
            $(this).removeClass('active');
        });

        if($(this).hasClass('global-link')) {
            $(this).addClass('active');
        }

        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

// Use Your Class or ID For Selection 

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#global-nav a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        const adjust = 30;
        if (refElement.position().top - adjust <= scrollPos && refElement.position().top -adjust + refElement.height() > scrollPos) {
            $('#global-nav ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}

$('.faq-item').on('click', function() {
    let q = $(this).find('.faq-q');
    let p = q.children('p');
    let i = p.children('i');
    i.toggleClass('faq-active');

    let a = $(this).find('.faq-a');
    let answer = a.children('p');
    a.slideToggle();

});

$(window).scroll(function() {
    const contact_position = $('#contact').offset().top;
    let window_position = $(this).scrollTop();
    if(contact_position - 200 <= window_position) {
        $('#header-cta-btn').fadeOut();
    } else {
        $('#header-cta-btn').fadeIn();
    }
})