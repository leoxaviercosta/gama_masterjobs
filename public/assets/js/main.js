$("#upgradecarreira").click(function () {
    $('html, body').animate({
        scrollTop: $("footer form").offset().top
    }, 1000);
});

$("#carreiras").click(function () {
    $('html, body').animate({
        scrollTop: $("footer form").offset().top
    }, 1000);
});

$("#depoimentos").click(function () {
    $('html, body').animate({
        scrollTop: $(".student-testimonials").offset().top
    }, 1000);
});

$("#contato").click(function () {
    $('html, body').animate({
        scrollTop: $("footer form").offset().top
    }, 1000);
});

$("#subscribe-open").click(function () {
    $('html, body').animate({
        scrollTop: $("footer form").offset().top
    }, 1000);
});

$("#want-work-startup").click(function () {
    $('html, body').animate({
        scrollTop: $("footer form").offset().top
    }, 1000);
});

$("#apply-subscribe").click(function () {
    $('html, body').animate({
        scrollTop: $("footer form").offset().top
    }, 1000);
});

$(".btn-want-upgrade").click(function () {
    $('html, body').animate({
        scrollTop: $("footer form").offset().top
    }, 1000);
});

/*$("#subscribe").submit(function (e) {
 e.preventDefault();
 var urlApi = "http://urldaapi";
 var data = { 'email': $("#subscribe #email").val() };
 $.post(urlApi, data, function (data) {
 //$(".result").html(data);
 });
 });*/

$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();

    if (scroll > 200) {
        $("header .menu").css('background-color', 'rgba(0, 0, 0, 0.8');
    } else {
        $("header .menu").css('background-color', 'rgba(0, 0, 0, 0.3');
    }
    // Do something
});

$('#time-remaining').countdown('2017/07/22', function (event) {
    $(this).html(event.strftime('%D DIAS %H:%M:%S'));
});

$(window).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

// Find all YouTube videos
var $allVideos = $("iframe[src^='//www.youtube.com']"),

    // The element that is fluid width
    $fluidEl = $(".mj-blog-sub-content");

// Figure out and save aspect ratio for each video
$allVideos.each(function () {

    $(this)
        .data('aspectRatio', this.height / this.width)

        // and remove the hard coded width/height
        .removeAttr('height')
        .removeAttr('width');

});

// When the window is resized
$(window).resize(function () {

    var newWidth = $fluidEl.width();

    // Resize all videos according to their own aspect ratio
    $allVideos.each(function () {

        var $el = $(this);
        $el
            .width(newWidth)
            .height(newWidth * $el.data('aspectRatio'));

    });

    // Kick off one resize to fix all videos on page load
}).resize();