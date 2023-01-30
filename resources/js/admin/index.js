
// if($("#my_post").length){
//     FooNav.init({
//         items: '#my_post',
//         classes: 'fon-full-height fon-border fon-rounded fon-shadow',
//     })
// }

$(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox({
        alwaysShowClose: true
    });
});

// $(document).on("click", "#delete_select", function () {
//     $('#modal-confirm').show();
// })

// Sharect.config({
//     facebook: true,
//     twitter: true,
//     twitterUsername: 'cao van son',
//     backgroundColor: '#667EEA',
//     iconColor: '#FFF',
// }).init()

$(document).on("click", ".toggle_check", function () {
    var source = this
    var checkboxes = document.getElementsByName('foo');
    for (var i = 0, n = checkboxes.length; i < n; i++) {
        checkboxes[i].checked = source.checked;
    }
})

$('.select2').select2({
    theme: 'bootstrap4'
})

$('#compose-textarea').summernote({
    height: 400,
    tabsize: 2,
    codemirror: {
        mode: 'htmlmixed',
        htmlMode: true,
        lineNumbers: true,
        theme: 'dracula',
        keyMap: "sublime",
        // lineWrapping: true,
    },
    focus: true,
    callbacks: {
        onPaste: function (e) {
            console.log('Called event paste', e);
        }
    },
    toolbar: [
        ['groume', ['list of button']],
        ['style', ['style']],
        ['style', ['bold', 'italic', 'underline']],
        ['fontsize', ['fontsize']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['height', ['height']],
        ['operation', ['undo', 'redo']],
        ['font', ['strikethrough', 'superscript', 'subscript', 'clear']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['object', ['link', 'table', 'picture', 'video']],
        ['table', ['row']],
        ['misc', ['help', 'fullscreen', 'codeview']]
    ]
});

try {
    if (!window.location.toString().split('/').includes("admin")) {
        $('textarea[id^=codeMirrorHtml]').each(function () {
            CodeMirror.fromTextArea(this, {
                mode: "htmlmixed",
                theme: "dracula",
                indentUnit: 4,
                indentWithTabs: true,
                lineNumbers: true,
                matchBrackets: true,
                keyMap: "sublime",
                autoCloseBrackets: true,
                showCursorWhenSelecting: true,
                viewportMargin: Infinity,
            });
        });
    }
} catch (e) {
    console.log(e)
}

try {
    if (!window.location.toString().split('/').includes("admin")) {
        $('textarea[id^=codeMirrorC]').each(function () {
            CodeMirror.fromTextArea(this, {
                mode: "clike",
                theme: "monokai",
                indentUnit: 4,
                indentWithTabs: true,
                lineNumbers: true,
                matchBrackets: true,
                keyMap: "sublime",
                autoCloseBrackets: true,
                showCursorWhenSelecting: true,
                viewportMargin: Infinity,
            });
        });
    }
} catch (e) {
    console.log(e)
}

// tocbot.init({
//     tocSelector: '.toc',
//     orderedList: true,
//     linkClass: 'toc-link',
//     headingSelector: 'h2, h3',
//     collapseDepth: 3,
//     contentSelector: '#my_post',
//     headingsOffset: 40,
//     scrollSmooth: true,
//     scrollSmoothDuration: 420,
//     scrollSmoothOffset: -40,
//     hasInnerContainers: true
// });