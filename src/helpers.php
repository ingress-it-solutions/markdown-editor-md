<?php

if (!function_exists('editor_css')) {
    /**
     * The CSS used by Editor.md
     *
     * @return string
     */
    function editor_css()
    {

        return '<!-- editor.md css -->
    <link rel="stylesheet" href="/vendor/editor.md/css/editormd.preview.min.css" />
    <link rel="stylesheet" href="/vendor/editor.md/css/editormd.min.css" />
    <style type="text/css">
    .editormd-fullscreen {
        z-index: 2147483647;
    }
    </style>';
    }
}

if (!function_exists('editor_js')) {
    /**
     * The JS used by Editor.md
     *
     * @param string $lang The language to use.
     *
     * @return string
     */
    function editor_js($lang = 'en')
    {

        return '<!-- editor.md js -->
    <script type="text/javascript">
        window.jQuery || document.write(unescape("%3Cscript%20type%3D%22text/javascript%22%20src%3D%22//cdn.bootcss.com/jquery/2.2.4/jquery.min.js%22%3E%3C/script%3E"));
    </script>
    <script src="/vendor/editor.md/lib/marked.min.js"></script>
    <script src="/vendor/editor.md/lib/prettify.min.js"></script>
    <script src="/vendor/editor.md/lib/raphael.min.js"></script>
    <script src="/vendor/editor.md/lib/underscore.min.js"></script>
    <script src="/vendor/editor.md/lib/sequence-diagram.min.js"></script>
    <script src="/vendor/editor.md/lib/flowchart.min.js"></script>
    <script src="/vendor/editor.md/lib/jquery.flowchart.min.js"></script>
    <script src="/vendor/editor.md/js/editormd.min.js"></script>
    <script src="/vendor/editor.md/languages/' . $lang . '.js"></script>';
    }
}

if (!function_exists('editor_config')) {
    /**
     * The configuration for Editor.md
     *
     * @param array $config The configuration options.
     *
     * @return string
     */
    function editor_config($config = [])
    {

        return '<!-- editor.md config -->
    <script type="text/javascript">
    var _'. Arr::get($config, 'id', 'myeditor') .';
    $(function() {
        //emoji
        editormd.emoji = {
            path : "'. Arr::get($config, 'emojiPath', config('editor.emojiPath')) .'",
            ex : ".png"
        };
        _'. Arr::get($config, 'id', 'myeditor') .' = editormd({
                id : "'. Arr::get($config, 'id', 'myeditor') .'",
                width : "'. Arr::get($config, 'width', config('editor.width')) .'",
                height : "'. Arr::get($config, 'height', config('editor.height')) .'",
                saveHTMLToTextarea : '. Arr::get($config, 'saveHTMLToTextarea', config('editor.saveHTMLToTextarea')) .',
                emoji : '. Arr::get($config, 'emoji', config('editor.emoji')) .',
                taskList : '. Arr::get($config, 'taskList', config('editor.taskList')) .',
                tex : '. Arr::get($config, 'tex', config('editor.tex')) .',
                toc : '. Arr::get($config, 'toc', config('editor.toc')) .',
                tocm : '. Arr::get($config, 'tocm', config('editor.tocm')) .',
                codeFold : '. Arr::get($config, 'codeFold', config('editor.codeFold')) .',
                flowChart: '. Arr::get($config, 'flowChart', config('editor.flowChart')) .',
                sequenceDiagram: '. Arr::get($config, 'sequenceDiagram', config('editor.sequenceDiagram')) .',
                path : "'. Arr::get($config, 'path', config('editor.path')) .'",
                imageUpload : '. Arr::get($config, 'imageUpload', config('editor.imageUpload')) .',
                imageFormats : '. Arr::get($config, 'imageFormats', json_encode(config('editor.imageFormats'))) .',
                imageUploadURL : "'. Arr::get($config, 'imageUploadURL', config('editor.imageUploadURL')) .'?_token=' . csrf_token() . '&from=xetaravel-editor-md"
        });
    });
    </script>';
    }
}
