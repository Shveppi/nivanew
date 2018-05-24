<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Главная страница</title>

        {{Html::script(asset('//elres.kaleidoscope48.ru/assets/sb-admin/vendor/jquery/jquery.min.js'))}}
        {{Html::script(asset('bootstrap/js/bootstrap.js'))}}
        {{Html::style('bootstrap/css/bootstrap.css')}}
        {{Html::script(asset('js/script.js'))}}
        {{--Html::style(asset('css/style.css'))--}}
        {{Html::style(asset('css/style_input.css'))}}

    </head>
    <body>
        <div class="container">
            <h2>@yield('title', 'Главная')</h2>
        
            @yield('content')

            
        </div>
    </body>
</html>
