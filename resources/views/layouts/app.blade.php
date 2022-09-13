<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-faces.css')}}">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/common/dark&light_mode_switch.css')}}">


    @yield('links')

    <title>Mr.Vira</title>

</head>
<body>


        <div class="form-check">
            <input type="checkbox" id="switch_mode">
        </div>
            @yield('content')




<script src="/js/main/switch-mode.js"></script>
</body>
</html>
