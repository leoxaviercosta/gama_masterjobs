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