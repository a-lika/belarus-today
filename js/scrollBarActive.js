$(document).ready(function () {
    var offset = $('.active_rest_nav').offset();
    var containerHt = $('.active_rest_razdel_container').height();

    var topPadding = 0;
    $(window).scroll(function () {
        if (($(window).scrollTop() > offset.top) && ($(window).scrollTop() < (containerHt))) {
            $('.active_rest_nav').addClass("fixed");
        }
        else {
            $('.active_rest_nav').removeClass("fixed");
        }
    });
});

var menu_selector = ".active_rest_nav";

function onScroll() {
    var scroll_top = $(document).scrollTop();
    $(menu_selector + " a").each(function () {
        var hash = $(this).attr("href");
        var target = $(hash);
        if (target.position().top <= scroll_top && target.position().top + target.outerHeight() > scroll_top) {
            $(menu_selector + " a.active").removeClass("active");
            $(this).addClass("active");
        } else {
            $(this).removeClass("active");
        }
    });
};

$(document).ready(function () {
    $(document).on("scroll", onScroll);
    $("a[href^=#]").click(function (e) {
        e.preventDefault();

        $(document).off("scroll");
        $(menu_selector + " a.active").removeClass("active");
        $(this).addClass("active");
        var hash = $(this).attr("href");
        var target = $(hash);

        $("html, body").animate({
            scrollTop: target.offset().top
        }, 500, function () {
            window.location.hash = hash;
            $(document).on("scroll", onScroll);
        });
    });
});