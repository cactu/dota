<!-- 导航条 -->
<div class="demo" style="padding: 0em 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-default navbar-mobile bootsnav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeOutUp">
                            <li><a href="#">首页</a></li>
                            <li><a href="#">最新报道</a></li>
                            <li><a href="#">一周要闻</a></li>
                            <li><a href="#">往期经典</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">联系我们</a>
                                <ul class="dropdown-menu" style="width:100%;">
                                    <li><a href="#">邮件发送</a></li>
                                    <li><a href="#">手机发送</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            @if(Session::has('home'))
                                <li class="dropdown" style="">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" alt="{{asset('home/icon/76.png')}}"
                                       aria-haspopup="true" aria-expanded="false" style="padding:20px 30px;"><img  src="{{asset('home/icon/76.png')}}" title="{{Session::get('home')->name}}" style="height:40px;border-radius:20px;"></a>
                                    <ul class="dropdown-menu" style="width:100%;">
                                        <li><a href="#">个人中心</a></li>
                                        <li><a href="#">系统通知</a></li>
                                        <li><a href="#">退出登录</a></li>
                                        <li><a href="#">退出登录</a></li>
                                    </ul>
                                </li>
                            @else
                                <li><a href="#">登录</a></li>
                                <li><a href="#">注册</a></li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
