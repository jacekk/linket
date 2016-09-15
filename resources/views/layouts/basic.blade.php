<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @hasSection('title')
                @yield('title') | Linket
            @else
                Linket
            @endif
        </title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
        @include('partials.header')
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
            @include('partials.footer')
        </div>

        <script src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>
