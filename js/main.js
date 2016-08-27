/*
 $(document), $(window)
 EL DOCUMENT LE DICE AL NAVEGADOR QUE TODAS ETIQUETAS HTML HAN SIDO LEIDAS

 EL WINDOWN  LE DICE AL NAVEGADOR QUE TODAS LAS ETIQUTAS HAN SIDO LEIDAS Y CARGADAS
 */
var _getHeight = '';
var _altoFinal = '';
var _flagTag = '';
var _lvl1year = '';
var tipo = '';

$(document).ready(function () {

    $('.bxslider').bxSlider({
        auto: true,
        pause: 6000,
        preloadImages: 'visible',
        responsive: true,
        touchEnabled: true,
        oneToOneTouch: true,
        swipeThreshold: 50,
        preventDefaultSwipeX: true
    });

    $('.sliderTmDsktp, .sliderTmMbl').bxSlider({
        preloadImages: 'visible',
        responsive: true,
        touchEnabled: true,
        oneToOneTouch: true,
        swipeThreshold: 50,
        preventDefaultSwipeX: true
    });

    $('.sliderMbrMbl').bxSlider({
        preloadImages: 'visible',
        responsive: true,
        touchEnabled: true,
        oneToOneTouch: true,
        swipeThreshold: 50,
        preventDefaultSwipeX: true
    });

    /*$('.sliderRqstData').bxSlider({
     preloadImages: 'visible',
     responsive: true,
     touchEnabled: true,
     oneToOneTouch: true,
     swipeThreshold: 50,
     preventDefaultSwipeX: true
     });*/

    var slider_next = "";
    var slider_back = "";

    if (_len == 'es') {
        slider_next = 'Siguiente paso';
        slider_back = 'Volver';

    }
    else {
        slider_next = "Next step";
        slider_back = "Go back";
    }

    $('.sliderRqst').bxSlider({
        pager: false,
        infiniteLoop: false,
        hideControlOnEnd: true,
        nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
        nextText: slider_next,
        prevText: slider_back
    });

    if (_cat == '') {
        _cat = 2;
        tipo = 'number';
    }
    else {
        tipo = 'string';
    }
    if ($('#lastPost').length) {
        loadArt('', '', _cat, 'cat_2', tipo);
    }

});
$(window).load(function () {

    var _botonYear = $('.botonYear');

    if (_botonYear.length) {
        _botonYear.click(function () {

            if ($(_lvl1year).attr('id') != "") {
                $(_lvl1year).next().slideToggle('normal');
            }

            if ($(this).attr('id') == $(_lvl1year).parent().attr('id')) {
                _lvl1year = "";
            } else {
                $(this).next().slideToggle('normal');
                _lvl1year = $(this).attr('id');
            }

            return false;
        });
    }

    $('.btnVerMas').click(function () {

        if (_flagTag == false) {

            _getHeight = $('#listTags').height();
            _altoFinal = _getHeight;
            _flagTag = true;

        }
        else {

            _flagTag = false;
            _altoFinal = 180;

        }

        $('#contTags').animate({
            height: _altoFinal
        }, 1000, function () {
            // Animation complete.
        });


    });

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

    $("#manuel-detalles, #manuel-detalles-mobile, #carlos-j-detalles, #carlos-j-detalles-mobile,#oscar-detalles, #oscar-detalles-mobile, #carlos-e-detalles, #carlos-e-detalles-mobile, #lorenzo-detalles, #lorenzo-detalles-mobile").click(function () {

        var anchor = $(this).data('anchor');

        //$('#body-black').fadeIn();
        //$("#member-cards").load('includes/member-cards.php?len=' + _len + '&member=' + anchor);

        showLight('includes/member-cards.php?len=' + _len + '&member=' + anchor)

    });

    $("#body-black, .body-black").click(function () {
        $("#member-cards, #body-black").fadeOut();
    });
    //TEAM CARDS
    $("#everardo-detalles, #everardo-detalles-mobile, #roberto-l-detalles, #roberto-l-detalles-mobile, #ricardo-d-detalles, #ricardo-d-detalles-mobile, #carlos-a-detalles, #carlos-a-detalles-mobile, #luis-m-detalles, #luis-m-detalles-mobile, #oscar-l-detalles, #oscar-l-detalles-mobile, #rafael-b-detalles, #rafael-b-detalles-mobile, #alonso-m-detalles, #alonso-m-detalles-mobile, #manuel-a-detalles, #manuel-a-detalles-mobile, #ana-m-detalles, #ana-m-detalles-mobile, #nora-e-detalles, #nora-e-detalles-mobile").click(function () {

        var anchor = $(this).data('anchor');
        //$('#body-black').fadeIn();
        //$("#teamCards").load('includes/team-cards.php?len=' + _len + '&card=' + anchor);
        showLight('includes/team-cards.php?len=' + _len + '&card=' + anchor);

    });

});//END DOM

function showLight(_url, _container) {

    if ($('div#overlay').hasClass('overlay') == true) {

        var alto = $(document).height();

        $('div#overlay').removeClass('overlay').addClass('overlay_full');

        $('div#Lightbox').removeClass('sugerencias').addClass('sugerencias2');

        $('div#overlay').css("height", alto + "px");

        // var widthBox = $('#infoBox').outerWidth(true);
        //
        // var marginLeftB = -(Math.floor(widthBox / 2)) + 'px';
        //
        // $('#Lightbox').css({
        //     width: widthBox,
        //     marginLeft: marginLeftB
        // });

        $.ajax({
            url: _url,
            cache: false
        }).done(function (resp) {
            $('#infoBox').html(resp);
            $('#infoBox').fadeIn('fast');
        });

    } else {

        $('#Lightbox, #overlay').fadeOut('500', function () {
            $('#infoBox,#overlay,#Lightbox').removeAttr('style');
            $('div#overlay').addClass('overlay').removeClass('overlay_full');
            $('div#Lightbox').removeClass('sugerencias2').addClass('sugerencias');
            $('#infoBox').html('');
        });

    }
}

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
    var _urlFile = '', _textmsg;

    //PRIMER VERIFICAMOS QUE FORMULARIO ES PARA PODER SABER A QUE ARCHIVO ENVIAR LA INFORMACIÓN
    switch (idObj) {
        case 'pageForm':
            _urlFile = 'secciones/send.php';
            break;
        case 'formMelbourne':
            _urlFile = 'secciones/send-melbourne.php';
            break;
        case 'formLisbon':
            _urlFile = 'secciones/send-lisbon.php';
            break;
        case 'formOperations':
            _urlFile = 'secciones/send-5-steps.php';
            break;
    }

    $.ajax({
        method: "POST",
        url: _urlFile,
        data: _stringVar
    }).success(function (msg) {
        // alert("Data Saved: " + msg);
        if (msg == 'success') {

            if (_len == 'es') {
                _textmsg = 'Tus datos se enviaron correctamente,\n serás redirigido a la página.';

            }
            else {
                _textmsg = "Your information was correctly sent,\n you'll be redirected to the next page.";
            }

            switch (idObj) {
                case 'pageForm':

                    if (_len == 'es') {
                        _respPageForm = '¡Su mensaje ha sido enviado!';
                    }
                    else {
                        _respPageForm = "Your information was correctly sent,\n you'll be redirected to the next page.";
                    }


                    $('.msg').text(_respPageForm);
                    break;
                case 'formMelbourne':

                    if (_len == 'es') {
                        _titleSwal = '¡Gracias!';
                        _fileUrl = 'ficha-tecnica-melbourne';
                    }
                    else {
                        _titleSwal = "¡Thank You!";
                        _fileUrl = 'prospectus-melbourne';
                    }

                    swal({
                            title: _titleSwal,
                            text: _textmsg,
                            type: "success",
                            showCancelButton: false,
                            confirmButtonColor: "#c3b584",
                            confirmButtonText: "Ok",
                            closeOnConfirm: false
                        },
                        function () {
                            // console.log('se ejecuta mandando a la nueva pagina');
                            window.location = _len + '/' + _fileUrl;
                        });
                    break;

                case 'formLisbon':

                    if (_len == 'es') {
                        _titleSwal = '¡Gracias!';
                        _fileUrl = 'ficha-tecnica-lisboa';
                    }
                    else {
                        _titleSwal = "Your information was correctly sent,\n you'll be redirected to the next page.";
                        _fileUrl = 'prospectus-lisbon';
                    }

                    swal({
                            title: _titleSwal,
                            text: _textmsg,
                            type: "success",
                            showCancelButton: false,
                            confirmButtonColor: "#c3b584",
                            confirmButtonText: "Ok",
                            closeOnConfirm: false
                        },
                        function () {
                            // console.log('se ejecuta mandando a la nueva pagina');
                            window.location = _len + '/' + _fileUrl;
                        });
                    break;

                case 'formOperations':

                    if (_len == 'es') {
                        _titleSwal = '¡Gracias!';
                    }
                    else {
                        _titleSwal = "¡Thank You!";
                    }

                    swal({
                        title: _titleSwal,
                        text: _textmsg,
                        type: "success",
                        showCancelButton: false,
                        confirmButtonColor: "#c3b584",
                        confirmButtonText: "Ok",
                        closeOnConfirm: false
                    });
                    break;
            }

        }


    });
}

function valFormularios(_myForm) {

    var _action = true;
    var _nameField = '';
    var _valor = '';
    var _textAlert = '';
    var _titleAlert = '';
    var _dataField = '';

    $('#' + _myForm).find('.required').each(function () {

        if ($(this).hasClass('required')) {

            var _child = $(this);
            _valor = _child.val();


            if (_child.is("input[type=text]") && valida(_valor) == false && _valor == null || _valor.length == 0) {
                _nameField = $(this).attr('name');
                _dataField = $(this).data('namefield');
                _action = false;

                if (_len == 'es') {
                    _textAlert = 'El campo ' + _dataField + ' es requerido.';
                    _titleAlert = '¡Atención!';
                } else {
                    _textAlert = 'The field ' + _dataField + ' is required.';
                    _titleAlert = '¡Warning!';
                }
                swal(_titleAlert, _textAlert, 'warning');
                return false;
            }

            if (_child.is("input[type=email]") && valida(_valor) == false && _valor == null || _valor.length == 0) {

                if (validarEmail($(this).val()) == 'fail') {
                    _nameField = $(this).attr('name');
                    _dataField = $(this).data('namefield');
                    _action = false;
                    if (_len == 'es') {
                        _textAlert = 'El campo ' + _dataField + ' es requerido.';
                        _titleAlert = '¡Atención!';
                    } else {
                        _textAlert = 'The field ' + _dataField + ' is required.';
                        _titleAlert = '¡Warning!';
                    }
                    swal(_titleAlert, _textAlert, 'warning');
                    return false;
                }

            }

            if (_child.is("input[type=tel]") && valida(_valor) == false && _valor == null || _valor.length == 0) {

                _nameField = $(this).attr('name');
                _dataField = $(this).data('namefield');
                _action = false;

                if (_len == 'es') {
                    _textAlert = 'El campo ' + _dataField + ' es requerido.';
                    _titleAlert = '¡Atención!';
                } else {
                    _textAlert = 'The field ' + _dataField + ' is required.';
                    _titleAlert = '¡Warning!';
                }

                swal(_titleAlert, _textAlert, 'warning');
                return false;


            }

            if ($(this).attr('type') == 'radio') {

                var _nameRadio = $(this).attr('name');

                if ($('input[name=' + _nameRadio + ']:checked').length == 0) {
                    _nameField = $(this).attr('name');
                    _dataField = $(this).data('namefield');
                    _action = false;

                    if (_len == 'es') {
                        _textAlert = 'El campo ' + _dataField + ' es requerido.';
                        _titleAlert = '¡Atención!';
                    } else {
                        _textAlert = 'The field ' + _dataField + ' is required.';
                        _titleAlert = '¡Warning!';
                    }

                    swal(_titleAlert, _textAlert, 'warning');
                    return false;

                }

            }

            if ($(this).attr('type') == 'checkbox') {

                var _nameRadio = $(this).attr('name');

                if ($('input[name=' + _nameRadio + ']:checked').length == 0) {
                    _nameField = $(this).attr('name');
                    _dataField = $(this).data('namefield');
                    _action = false;

                    if (_len == 'es') {
                        _textAlert = 'El campo ' + _dataField + ' es requerido.';
                        _titleAlert = '¡Atención!';
                    } else {
                        _textAlert = 'The field ' + _dataField + ' is required.';
                        _titleAlert = '¡Warning!';
                    }

                    swal(_titleAlert, _textAlert, 'warning');
                    return false;

                }

            }

            if (_child.is("textarea") && valida(_valor) == false && _valor == null || _valor.length == 0) {
                _nameField = $(this).attr('name');
                _dataField = $(this).data('namefield');
                _action = false;

                if (_len == 'es') {
                    _textAlert = 'El campo ' + _dataField + ' es requerido.';
                    _titleAlert = '¡Atención!';
                } else {
                    _textAlert = 'The field ' + _dataField + ' is required.';
                    _titleAlert = '¡Warning!';
                }

                swal(_titleAlert, _textAlert, 'warning');
                return false;
            }

        }
    });

    if (_action == true) {
        validateForm(_myForm);
    }

}

function valida(F) {

    if (/^\s+|\s+$/.test(F)) {
        //alert("Introduzca un cadena de texto.")
        return false
    } else {
        //alert("OK")
        //cambiar la linea siguiente por return true para que ejecute la accion del formulario
        return true;
    }
}

function validarEmail(email) {
    var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!expr.test(email))
    // alert("Error: La dirección de correo " + email + " es incorrecta.");
        return 'fail';
}

function fix() {
    var el = this;
    var par = el.parentNode;
    var next = el.nextSibling;
    par.removeChild(el);
    setTimeout(function () {
        par.insertBefore(el, next);
    }, 0)
}

var lastChild = 0;
var _totalChild = '';

// WTT
function loadArt(_lastId, _flagClick, _kat, _container, _kind) {

    if (_lastId == '') {
        var _listHomeArtLi = $('#listHomeArt li');
        if (_listHomeArtLi.length > 1) {
            _totalChild = _listHomeArtLi.length;
            lastChild = $('#' + _container + ' li:nth-child(' + (_totalChild - 1) + ')').data('idreg');
        }
    }
    else {
        lastChild = _lastId;
    }

    if (_flagClick != '') {
        _flagClick = 'click';
    }
    //console.log('lastId=' + lastChild + '&_flagClick=' + _flagClick + '&len=' + _len + '&cat=' + _kat + '&kind=' + _kind);

    $.ajax({
        method: "POST",
        url: 'controller.php',
        //     VARIABLE=VALOR          &VARIABLE2=VALOR
        data: 'lastId=' + lastChild + '&_flagClick=' + _flagClick + '&len=' + _len + '&cat=' + _kat + '&kind=' + _kind
    }).success(function (msg) {
        if (_kind == 'string') {
            $('#lastPost').prepend(msg);
        } else {
            $('#' + _container).prepend(msg);
        }

    });

}