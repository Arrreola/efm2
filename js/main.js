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
    //     $("#team-cards").load('includes/member-cards.php #team-card-carlos-e');
    //     $('#body-black').fadeIn();
    // });

    $("#body-black, .body-black").click(function () {
        $(".member-card").fadeOut();
        $("#body-black").fadeOut();
    });


    //TEAM CARDS
    $("#everardo-detalles, #everardo-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-everardo');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #team-card-everardo');
        }
    });

    $("#roberto-l-detalles, #roberto-l-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-roberto');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #team-card-roberto');
        }
    });

    $("#ricardo-d-detalles, #ricardo-d-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-ricardo');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #team-card-ricardo');
        }
    });

    $("#carlos-a-detalles, #carlos-a-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-carlos');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #team-card-carlos');
        }
    });

    $("#luis-m-detalles, #luis-m-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-luis');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #team-card-luis');
        }
    });

    $("#oscar-l-detalles, #oscar-l-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-oscar');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #team-card-oscar');
        }
    });

    $("#rafael-b-detalles, #rafael-b-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-rafael');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #team-card-rafael');
        }
    });

    $("#alonso-m-detalles, #alonso-m-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-alonso');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #team-card-alonso');
        }
    });

    $("#manuel-a-detalles, #manuel-a-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-manuel');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #team-card-manuel');
        }
    });

    $("#ana-m-detalles, #ana-m-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-ana');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #team-card-ana');
        }
    });

    $("#nora-e-detalles, #nora-e-detalles-mobile").click(function () {
        $('#body-black').fadeIn();
        if ($(window).width() > 766) {
            $("#team-cards").load('includes/team-cards.php #team-card-nora');
        }
        else {
            $("#team-cards-mobile").load('includes/team-cards.php #team-card-nora');
        }
    });
});//END DOM

//MAPS



function initMap() {

    var myLatLng = {lat: 25.644775, lng: -100.32451600000002};
    var mapDiv = document.getElementById('map');

    var map = new google.maps.Map(mapDiv, {
        center: {lat: 25.644775, lng: -100.32451600000002},
        zoom: 17,
        draggable: false,
        scrollwheel: false
    });
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'EFM Capital'
    });
}


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
    var _urlFile = '';

    //PRIMER VERIFICAMOS QUE FORMULARIO ES PARA PODER SABER A QUE ARCHIVO ENVIAR LA INFORMACIÓN
    switch (idObj) {
        case 'pageForm':
            _urlFile  = 'send.php';
            break;
        case 'formMelbourne':
            _urlFile  = 'send-melbourne.php';
            break;
        case 'formLisbon':
            _urlFile  = 'send-lisbon.php';
            break;
    }

    //console.log('cadena de variables='+_stringVar);

    $.ajax({
        method: "POST",
        url: _urlFile,
        data: _stringVar
    }).success(function (msg) {
        // alert("Data Saved: " + msg);
        if (msg == 'success'){

            switch (idObj) {
                case 'pageForm':
                    $('.msg').text('GRACIAS POR ENVIAR TUS DATOS');
                    break;
                case 'formMelbourne':
                    swal({
                            title: "Gracias!",
                            text: "Tus datos se enviaron correctamnete, seras redirigido a la pagina",
                            type: "success",
                            showCancelButton: false,
                            confirmButtonColor: "#c3b584",
                            confirmButtonText: "Ok",
                            closeOnConfirm: false
                        },
                        function(){
                           // console.log('se ejecuta mandando a la nueva pagina');
                            window.location = 'ficha-tecnica-melbourne.php';
                        });
                    break;
                case 'formLisbon':
                    swal({
                            title: "Gracias!",
                            text: "Tus datos se enviaron correctamnete, seras redirigido a la pagina",
                            type: "success",
                            showCancelButton: false,
                            confirmButtonColor: "#c3b584",
                            confirmButtonText: "Ok",
                            closeOnConfirm: false
                        },
                        function(){
                            // console.log('se ejecuta mandando a la nueva pagina');
                            window.location = 'ficha-tecnica-lisbon.php';
                        });
                    break;
            }

        }



    });
}


function fix()
{
    var el = this;
    var par = el.parentNode;
    var next = el.nextSibling;
    par.removeChild(el);
    setTimeout(function() {par.insertBefore(el, next);}, 0)
}
// MELBOURNE FORM

