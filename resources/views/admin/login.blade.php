<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="icon" href="{{asset('home/icon/76.png')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}"/>
    <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('admin/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/main.css')}}">
</head>

<body>
<section id="container">
    <section id="main-content">
        <div class="row" style="margin:10px auto;">

            <!-- 消息提示框 -->
            @if(Session::has('msg'))
                <div class="col-md-4 col-md-offset-4">
                    <div class="alert alert-{{ Session::get('msg')['type'] }} alert-dismissible" role="alert" >
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <i class="fa fa-info-circle"></i> {{ Session::get('msg')['txt'] }}
                    </div>
                </div>
            @endif

            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default" style="background:#293949;">
                    <div class="panel-heading text-center"  style="background:#293949;border:none;">
                        <h3 class="panel-title pull-center" style="color:white;">欢迎光临!</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" action="login-do">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="请输入用户名">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="password" name="password" class="form-control" value="{{old('password')}}" placeholder="请输入密码">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-default">点击登录</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
</section>

<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/application.js')}}"></script>
</body>
</html>
