/*
 $(document), $(window)
 EL DOCUMENT LE DICE AL NAVEGADOR QUE TODAS ETIQUETAS HTML HAN SIDO LEIDAS

 EL WINDOWN  LE DICE AL NAVEGADOR QUE TODAS LAS ETIQUTAS HAN SIDO LEIDAS Y CARGADAS
 */
$(window).load(function () {
    if ($(window).width() < 600) {       // if width is less than 600px
        MobileFunctions();                 // execute mobile function
    }
    else {                              // if width is more than 600px
        DesktopFunctions();               // execute desktop function
    }

    $(".navbar-menu-icon").click(function () {
        $(".offcanvas-menu").animate({
            right: 0
        }, 250, function () {
            // Animation complete.
        });
    });
    $("section").click(function () {
        $(".offcanvas-menu").animate({
            right: -300
        }, 250, function () {
            // Animation complete.
        });
    });

    $("#manuel-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#member-cards").load('includes/member-cards.php #member-card-manuel-g');
        }
        else {
            $("#member-cards-mobile").load('includes/member-cards.php #member-card-manuel-g');
        }
    });

    $("#carlos-j-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#member-cards").load('includes/member-cards.php #member-card-manuel-g');
        }
        else {
            $("#member-cards-mobile").load('includes/member-cards.php #member-card-manuel-g');
        }
    });

    $("#carlos-j-detalles").click(function () {
        $("#member-cards").load('includes/member-cards.php #member-card-carlos-j');
        $('#body-black').fadeIn();
    });

    $("#oscar-detalles").click(function () {
        $("#member-cards").load('includes/member-cards.php #member-card-oscar-j');
        $('#body-black').fadeIn();
    });

    $("#carlos-e-detalles").click(function () {
        $("#member-cards").load('includes/member-cards.php #member-card-carlos-e');
        $('#body-black').fadeIn();
    });

    $("#lorenzo-detalles").click(function () {
        $("#member-cards").load('includes/member-cards.php #member-card-lorenzo-f');
        $('#body-black').fadeIn();
    });

    $("#body-black, .body-black").click(function () {
        $(".member-card").fadeOut();
        $("#body-black").fadeOut();
    });

});//END DOM

var MobileFunctions = function () {
    $("#index-section-5-carousel-loads").load("includes/team-carousel-mobile.html #index-section-5-carousel-loads-mobile");
    //alert("Mobile");
};
var DesktopFunctions = function () {
    alert("Desktop");
};

if ($(window).width() > 766) {
    $('.parallax-window').parallax({imageSrc: 'img/desktop-backgrounds/section-1-back-desktop.jpg'});
}
else {
    $('.parallax-window').parallax({imageSrc: 'img/mobile-backgrounds/section-1-back-mobile.jpg'});
}

if ($(window).width() > 766) {
    $('.parallax-window-3').parallax({imageSrc: 'img/desktop-backgrounds/section-3-back.jpg'});
}
else {
    $('.parallax-window-3').parallax({imageSrc: 'img/mobile-backgrounds/section-3-back-mobile.jpg'});
}


function validateForm(idObj) {

    var _form = $('#' + idObj);
    var _stringVar = _form.serialize();

    //console.log('cadena de variables='+_stringVar);

    $.ajax({
        method: "POST",
        url: "send.php",
        data: _stringVar
    }).success(function (msg) {
        // alert("Data Saved: " + msg);
        if (msg == 'success')
            $('.msg').text('GRACIAS POR ENVIAR TUS DATOS');

    });
}