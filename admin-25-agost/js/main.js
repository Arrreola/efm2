/**
 * Created by v09 on 02/08/16.
 */
$(window).load(function () {

    if (_flagClass == 1) {
        $(".menu-img-post-button").addClass("red-button");
    }
    if ($('textarea').length) {
        tinymce.init({
            selector: 'textarea',
            toolbar: 'insertfile undo redo | styleselect fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor | code',
            height: 600,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'save table contextmenu directionality emoticons template paste textcolor code'
            ],
            fontsize_formats: '15px 18px 24px 36px',
            font_formats: 'Libre Baskerville=libre baskerville ;',
            content_css: '../css/style.css',
            theme_advanced_resizing: "true",
            paste_auto_cleanup_on_paste: true,
            theme_advanced_buttons3_add: "pastetext,pasteword,selectall",
            paste_preprocess: function (pl, o) {
                // Content string containing the HTML from the clipboard
                //console.log(o.content);

                //console.log(erraseTags);
                //o.content = "-: CLEANED :-\n" +erraseTags;
                o.content = strip_tags(o.content, '');
            },
            paste_postprocess: function (pl, o) {
                // Content DOM node containing the DOM structure of the clipboard
                //alert(o.node.innerHTML);
                //o.node.innerHTML = o.node.innerHTML + "\n-: CLEANED :-";
            },

            fontsize_formats: "15px 18px 24px 36px",
            font_formats: 'Libre Baskerville=libre baskerville ;',

            style_formats: [

                {title: 'Header Azul 20px', inline: 'span', styles: {color: '#000000', 'font-size': '24px'}},
                {
                    title: 'Regular Text',
                    inline: 'span',
                    styles: {'color': '#000000', 'font-weigth': 'normal', 'font-size': '15px'}
                }

            ]
        });
    }
    /* $('#btnLogin').click(function () {
     loginForm();
     })*/
})

//limpia el texto que se pega, ya sea que venga de word o de un pdf.

function strip_tags(input, allowed) {

    allowed = (((allowed || '') + '')
        .toLowerCase()
        .match(/<[a-z][a-z0-9]*>/g) || [])
        .join(''); // making sure the allowed arg is a string containing only tags in lowercase (<a><b><c>)
    var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi,
        commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
    return input.replace(commentsAndPhpTags, '')
        .replace(tags, function ($0, $1) {
            return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : '';
        });

}

/*
 function loginForm() {

 var _stringVar = $('#loginForm').serialize();

 $.ajax({
 method: "POST",
 url: 'api/controller.php',
 data: _stringVar
 }).success(function (msg) {
 if (msg != '') {
 window.location = 'menu.php';
 }

 });
 }
 */
$(window).load(function () {
    $(".menu-mobile-trigger").click(function () {
        $(this).toggleClass("menu-mobile-trigger-active")
        $(".menu-sidebar").toggleClass("menu-sidebar-active")
    });
});

// $(document).ready(function () {
//     if ($('textarea').length) {
//         tinymce.init({
//             selector: 'textarea',
//             theme: 'modern',
//             height: 150,
//             fontsize_formats: '15px 18px 24px 36px',
//             plugins: [
//                 'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
//                 'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
//                 'save table contextmenu directionality emoticons template paste textcolor code'
//             ],
//             toolbar: 'insertfile undo redo | styleselect fontsizeselect fontselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor | code'
//         });
//     }
// })