console.log("Animations loaded");

$.fn.isInViewport = function () {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(window).on('resize scroll load', function () {
    $(".slideup").map(function () {
        if ($(this).isInViewport())
        {
            $(this).css("transform", "translateY(0)");
        }
    }).get();
    $(".fadein").map(function () {
        if ($(this).isInViewport())
        {
            $(this).css("opacity", "1");
        }
    }).get();
    $(".fadein-slideup").map(function () {
        if ($(this).isInViewport())
        {
            $(this).css("opacity", "1");
            $(this).css("transform", "translateY(0)");
        }
    }).get();
});