<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DOTA前台</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="icon" href="{{asset('home/icon/76.png')}}" type="image/x-icon"/>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}"/>
    <!-- Fonts from Font Awsome -->
    {{--<link href="{{asset('home/css/font-awesome.min.css')}}" rel="stylesheet"/>--}}
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/master.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/master-boot.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/font-awesome.min.css')}}">

    <style type="text/css">
        .navbar-brand{
            padding: 29px 15px;
            height: auto;
        }
        nav.navbar.bootsnav{
            border: none;
            margin-bottom: 150px;
        }
        .navbar-nav{
            float: left;
        }
        nav.navbar.bootsnav ul.nav > li > a{
            color: #474747;
            text-transform: uppercase;
            padding: 30px;
        }
        nav.navbar.bootsnav ul.nav > li:hover{
            background: #f4f4f4;
        }
        .nav > li:after{
            content: "";
            width: 0;
            height: 5px;
            background: #34c9dd;
            position: absolute;
            bottom: 0;
            left: 0;
            transition: all 0.5s ease 0s;
        }
        .nav > li:hover:after{
            width: 100%;
        }
        nav.navbar.bootsnav ul.nav > li.dropdown > a.dropdown-toggle:after{
            content: "+";
            font-family: 'FontAwesome';
            font-size: 16px;
            font-weight: 500;
            position: absolute;
            top: 35%;
            right: 10%;
            transition: all 0.4s ease 0s;
        }
        nav.navbar.bootsnav ul.nav > li.dropdown.on > a.dropdown-toggle:after{
            content: "\f105";
            transform: rotate(90deg);
        }
        .dropdown-menu.multi-dropdown{
            position: absolute;
            left: -100% !important;
        }
        .dropdown-menu{
            min-width:90px;!important;
            text-align:center;!important;
        }
        nav.navbar.bootsnav li.dropdown ul.dropdown-menu{
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border: none;
        }
        @media only screen and (max-width:990px){
            nav.navbar.bootsnav ul.nav > li.dropdown > a.dropdown-toggle:after,
            nav.navbar.bootsnav ul.nav > li.dropdown.on > a.dropdown-toggle:after{ content: " "; }
            .dropdown-menu.multi-dropdown{ left: 0 !important; }
            nav.navbar.bootsnav ul.nav > li:hover{ background: transparent; }
            nav.navbar.bootsnav ul.nav > li > a{ margin: 0; }
        }
    </style>
</head>

<body>

    @include('home.layouts.nav')

    @yield('main')

<!--Global JS-->
<script src="{{asset('home/js/jquery.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/master-boot.js')}}"></script>
</body>
</html>
