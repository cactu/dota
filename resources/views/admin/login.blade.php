<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台登录</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="icon" href="{{asset('home/icon/76.png')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}"/>
    <link href="{{asset('admin/css/login.css')}}" rel='stylesheet' type='text/css'/>
</head>

<body>


<div class="login-form">
    <div class="clear"> </div>
    <div class="avatar">
        <img src="{{asset('admin/image/login-avatar.png')}}" />
    </div>
    <form method="post" action="login-do">
        {{csrf_field()}}
        <input type="text" name="name" class="text" value="{{old('name')}}" placeholder="请输入用户名">
        <div class="key">
            <input type="password" name="password" value="{{old('password')}}" placeholder="请输入密码">
        </div>

        <div class="sign-in"><input type="submit" value="点击登录" />
        </div>
    </form>

</div>
<div class="copy-rights">
    <p>Copyright &copy; 学意 <a href="http://www.miitbeian.gov.cn/" target="_blank">皖ICP备17009528号-1</a></p>
</div>

<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
</body>
</html>
