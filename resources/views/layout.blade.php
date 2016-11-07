<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Myapp</title>
        {{HTML::style('assets/bootstrap/css/bootstrap.min.css')}}
        {{HTML::style('assets/font-awesome-4.3.0/css/font-awesome.min.css')}}
        {{HTML::style('assets/ionicons-2.0.1/css/ionicons.min.css')}}
        {{HTML::style('assets/AdminLTE-2.0.5/dist/css/AdminLTE.min.css')}}
        {{HTML::style('assets/AdminLTE-2.0.5/dist/css/skins/_all-skins.min.css')}}

    </head>
    <body>
      @yield('content')
    </body>

    {{HTML::script('assets/js/jQuery-2.1.4.min.js')}}
    {{HTML::script('assets/js/bootstrap.min.js')}}
    {{HTML::script('assets/js/jQuery-2.1.4.min.js')}}
{{HTML::script('assets/AdminLTE-2.0.5/dist/js/app.min.js')}}
</html>
