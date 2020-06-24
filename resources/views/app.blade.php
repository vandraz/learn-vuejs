<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Vue JS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        
    </head>
    <body>
        <main id="vandraz">
            <navigation></navigation>

            <div class="py-4">
                <router-view></router-view>
            </div>
        </main>

        <script src="/js/app.js"></script>
    </body>
</html>
