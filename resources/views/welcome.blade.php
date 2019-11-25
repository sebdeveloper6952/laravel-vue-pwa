<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#317EFB"/>

        <title>Laravel + Vue PWA</title>

        <!-- Manifest -->
        <link href="/manifest.json" rel="manifest">

        <link rel="apple-touch-icon" href="img/logo-192x192.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 600;
                font-size: 2em;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }
        </style>
    </head>
    <body>
        <noscript>
            <p>Javascript is required.</p>
        </noscript>
        <div id="app" class="flex-center position-ref full-height">
            <example-component />
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
        <script>
            // Check that service workers are supported
            if ('serviceWorker' in navigator) {
                // Use the window load event to keep the page load performant
                window.addEventListener('load', () => {
                    navigator.serviceWorker.register('/service-worker.js');
                });
            }
        </script>
    </body>
</html>
