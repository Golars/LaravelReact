<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                @react_component('Alert', [ 'name' => 'Hello World' ], [ 'prerender' => true ])
            </div>
        </div>
        <script src="{{ asset('vendor/react-laravel/react.js') }}"></script>
        <script src="{{ asset('vendor/react-laravel/react-dom.js') }}"></script>
        <script src="{{ asset('js/components.js') }}"></script>
        <script src="{{ asset('vendor/react-laravel/react_ujs.js') }}"></script>
    </body>
</html>
