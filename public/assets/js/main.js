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

$("#apply-subscribe").click(function () {
    $('html, body').animate({
        scrollTop: $("footer form").offset().top
    }, 1000);
});

$(window).scroll(function (event) {
    if ($(window).scrollTop() > 200) {
        $("header .menu").css('background-color', 'rgba(0, 0, 0, 0.8');
    } else {
        $("header .menu").css('background-color', 'rgba(0, 0, 0, 0.3');
    }
});

$('#time-remaining').countdown('2017/07/22', function (event) {
    $(this).html(event.strftime('%D DIAS %H:%M:%S'));
});

$(window).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

var $allVideos = $("iframe[src^='//www.youtube.com']");
var $fluidEl = $(".mj-blog-sub-content");

$allVideos.each(function () {

    $(this)
        .data('aspectRatio', this.height / this.width)
        .removeAttr('height')
        .removeAttr('width');

});

$(window).resize(function () {

    var newWidth = $fluidEl.width();
    $allVideos.each(function () {
        var $el = $(this);
        $el.width(newWidth).height(newWidth * $el.data('aspectRatio'));
    });
}).resize();

var el = $('#box-dream');
if (el && el.position()) {
    var pos = el.position().top;
}

var posFooter = $("footer").position().top

$(window).scroll(function () {
    if ($(this).scrollTop() >= 250) {
        el.css('top', '90px');
    } else {
        el.css('top', '270px');
    }
});

$("#subscribe").submit(function (e) {
    e.preventDefault();
    var data = {
        _token: $("#subscribe input[name=_token]").val(),
        name: $("#subscribe input[name=name]").val(),
        email: $("#subscribe input[name=email]").val()
    };
    $.ajax({
        type: "POST",
        url: '/register',
        data: data,
        success: function (response) {
            $('#modalMessage').modal('show');
            $("#message-success").html("<center>" + response.message + "</center>");
            fbq('track', 'Lead', {
               value: 0.01,
               currency: 'BRL'
            });
        },
        dataType: 'json'
    });
});


$("#subscribe-full").submit(function (e) {
    e.preventDefault();
    var data = {
        _token: $("#subscribe-full input[name=_token]").val(),
        name: $("#subscribe-full input[name=name]").val(),
        email: $("#subscribe-full input[name=email]").val(),
        stack: $("#subscribe-full select[name=stack]").val(),
    };
    $.ajax({
        type: "POST",
        url: '/register',
        data: data,
        success: function (response) {
            $('#modalMessage').modal('show');
            $("#message-success").html("<center>" + response.message + "</center>");
            $('#myModal').modal('hide');
            fbq('track', 'Lead', {
               value: 0.01,
               currency: 'BRL'
            });
        },
        dataType: 'json'
    });
});

$("#form-contact").submit(function (e) {
    e.preventDefault();
    var data = {
        _token: $("#form-contact input[name=_token]").val(),
        name: $("#form-contact input[name=name]").val(),
        email: $("#form-contact input[name=email]").val(),
        subject: $("#form-contact input[name=subject]").val(),
        msg: $("#form-contact textarea[name=msg]").val()
    };
    $.ajax({
        type: "POST",
        url: '/contact',
        data: data,
        success: function (response) {
            $('#modalMessage').modal('show');
            $("#message-success").html("<center>" + response.message + "</center>");
            $('#myModal').modal('hide');
        },
        dataType: 'json'
    });
});

// request location ip address
function getLocationIP($ipdaddress) {
    $.get("https://ipinfo.io/" + $ipdaddress, function (response) {
        return response.city + ' - ' + response.region;
    }, "jsonp");
}

function setTitle(text) {
    document.title = text;
}