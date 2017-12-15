<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>用户注册</title>
    <link href="{{'home/css/login.css'}}" rel='stylesheet' type='text/css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="App Loction Form,Login Forms,Sign up Forms" />
    <link rel="icon" href="{{asset('home/image/icon.jpeg')}}" type="image/x-icon"/>
</head>
<body>
<div class="app-location">
    <h2>欢迎登录DOTA</h2>
    <form method="post" action="login-do">
        {{csrf_field()}}
        <input type="text" name="keywords" class="text" value="{{old('keywords')}}" placeholder="手机号/邮箱/账号名称">
        <input type="password" name="password" value="{{old('password')}}" placeholder="请输入密码">
        <div class="submit"><input type="submit" value="点击登录"></div>
        <div class="clear"></div>
        <div class="new">
            {{--<h3><a href="#">找回密码</a></h3>--}}
            <h4><a href="#">前往注册</a></h4>
            <div class="clear"></div>
        </div>
    </form>

    <!-- 错误提醒 -->
    @if(Session::has('message'))
        <div class="message" style="font-size:1.3em;color:orangered;">
            @foreach(Session::get('message') as $v)
                {{$v}}<br/>
            @endforeach
        </div>
    @endif
</div>

<div class="copy-right" style="margin-top:150px;">
    <p>Copyright &copy; 学意 <a href="http://www.miitbeian.gov.cn/" target="_blank">皖ICP备17009528号-1</a></p>
</div>

</body>
</html>