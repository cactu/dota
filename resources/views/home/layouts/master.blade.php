<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DOTA前台</title>
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="icon" href="{{asset('home/image/icon.jpeg')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/master.css')}}">
    @yield('css')
</head>

<body>

    @include('home.layouts.nav')

    <div class="body row">
        <!-- 左侧页面 -->
        <div class="col-md-2">
            @yield('left')
        </div>
        <!-- 中间主体 -->
        <div class="col-md-8">
            @yield('main')
        </div>
        <!-- 右侧页面 -->
        <div class="col-md-2">
            @yield('right')
        </div>
    </div>

    @include('home.layouts.footer')

<!--Global JS-->
<script src="{{asset('home/js/jquery.min.js')}}"></script>
    @yield('js')
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
</body>
</html>
