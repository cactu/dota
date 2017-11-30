<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="icon" href="{{asset('home/icon/76.png')}}" type="image/x-icon"/>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}"/>
    <!-- Fonts from Font Awsome -->
    <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <!-- CSS Animate -->
    <link rel="stylesheet" href="{{asset('admin/css/animate.css')}}">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
    <!--[if lt IE 9]>
    <script src="{{asset('admin/js/html5shiv.js')}}"></script>
    <script src="{{asset('admin/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>
<section id="container">

    @include('admin.layouts.bar')

    @include('admin.layouts.nav')

    <!--主体部分-->
    <section class="main-content-wrapper">
        <section id="main-content">
            <!--ToDo start-->
            <div class="row">

                <!-- 消息提示框 -->
                @if(Session::has('msg'))
                <div class="container col-md-12">
                    <div class="alert alert-{{ Session::get('msg')['type'] }} alert-dismissible" role="alert" >
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <i class="fa fa-info-circle"></i> {{ Session::get('msg')['txt'] }}
                    </div>
                </div>
                @endif

                @yield('main')
            </div>
        </section>
    </section>
</section>

<!--Global JS-->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/application.js')}}"></script>

</body>
</html>
