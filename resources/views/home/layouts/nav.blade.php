<!-- 导航条 -->
<div class="header row">
    <nav class="navbar navbar-default col-md-8 col-md-offset-2">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand active" href="#">DOTA</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">最新报道</a></li>
                    <li><a href="#">一周要闻</a></li>
                    <li><a href="#">往期经典</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">联系我们<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">邮箱</a></li>
                            <li><a href="#">手机</a></li>
                            <li><a href="#">腾讯</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">微博</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">微信</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="请输入关键词">
                        </div>
                        <button type="submit" class="btn btn-default"><span class="fa fa-search"></span>搜索</button>
                    </form>
                    @if(Session::has('home'))
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="user-img" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <img  src="{{asset('home/image/icon.jpeg')}}" title="{{Session::get('home')->name}}" style="height:40px;border-radius:20px;">
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">个人中心</a></li>
                                <li><a href="#">系统通知</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{url('login-out')}}">退出登录</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="javascript:;" data-toggle="modal" data-target="#myModal">登录</a></li>
                        <li><a href="{{url('register')}}">注册</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="max-width:400px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">登录</h4>
                </div>
                <div class="modal-body row">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-3 col-xs-offset-1" style="padding-right:0;border-right:none;">
                                <select class="form-control btn-default login-select">
                                    <option value="1">手机注册</option>
                                    <option value="2">邮箱注册</option>
                                    {{--<option value="3">微信注册</option>--}}
                                </select>
                            </div>
                            <div class="col-xs-7 login-name" style="padding-left:0;">
                                <div class="input-group">
                                    <div class="input-group-addon">+86</div>
                                    <input type="text" class="form-control" placeholder="请输入手机号码">
                                </div>
                            </div>
                        </div>

                        <div class="form-group login-pass">
                            <div class="col-xs-3 col-xs-offset-1" style="padding-right:0;border-right:none;">
                                <button class="btn btn-default form-control" id="get-code" style="">获取验证码</button>
                            </div>
                            <div class="col-xs-7" style="padding-left:0;">
                                <input type="text" class="form-control" placeholder="请输入验证码">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
