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


    $("#manuel-detalles, #manuel-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#member-cards").load('includes/member-cards.php #member-card-manuel-g');
        }
        else {
            $("#member-cards-mobile").load('includes/member-cards.php #member-card-manuel-g');
        }
    });

    $("#carlos-j-detalles, #carlos-j-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#member-cards").load('includes/member-cards.php #member-card-carlos-j');
        }
        else {
            $("#member-cards-mobile").load('includes/member-cards.php #member-card-carlos-j');
        }
    });

    $("#oscar-detalles, #oscar-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#member-cards").load('includes/member-cards.php #member-card-oscar-j');
        }
        else {
            $("#member-cards-mobile").load('includes/member-cards.php #member-card-oscar-j');
        }
    });

    $("#carlos-e-detalles, #carlos-e-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#member-cards").load('includes/member-cards.php #member-card-carlos-e');
        }
        else {
            $("#member-cards-mobile").load('includes/member-cards.php #member-card-carlos-e');
        }
    });

    $("#lorenzo-detalles, #lorenzo-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#member-cards").load('includes/member-cards.php #member-card-lorenzo-f');
        }
        else {
            $("#member-cards-mobile").load('includes/member-cards.php #member-card-lorenzo-f');
        }
    });

    // $("#carlos-e-detalles").click(function () {
    //     $("#member-cards").load('includes/member-cards.php #member-card-carlos-e');
    //     $('#body-black').fadeIn();
    // });

    $("#body-black, .body-black").click(function () {
        $(".member-card").fadeOut();
        $("#body-black").fadeOut();
    });




    //TEAM CARDS
    $("#everardo-detalles").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-everardo');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #member-card-everardo');
        }
    });

    $("#roberto-l-detalles").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-roberto');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #member-card-everardo');
        }
    });

    $("#ricardo-d-detalles").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-ricardo');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #member-card-ricardo');
        }
    });

    $("#carlos-a-detalles").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-carlos');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #member-card-carlos');
        }
    });

    $("#luis-m-detalles").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-luis');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #member-card-luis');
        }
    });

    $("#oscar-l-detalles").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-oscar');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #member-card-oscar');
        }
    });

    $("#rafael-b-detalles").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-rafael');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #member-card-rafael');
        }
    });

    $("#alonso-m-detalles").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-alonso');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #member-card-alonso');
        }
    });

    $("#manuel-a-detalles").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-manuel');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #member-card-manuel');
        }
    });

    $("#ana-m-detalles").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-ana');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #member-card-ana');
        }
    });

    $("#nora-e-detalles").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-nora');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #member-card-nora');
        }
    });
});//END DOM




var MobileFunctions = function () {
    $("#index-section-5-carousel-loads").load("includes/team-carousel-mobile.html #index-section-5-carousel-loads-mobile");
    //alert("Mobile");
};
var DesktopFunctions = function () {
    //     alert("Desktop");
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