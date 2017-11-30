<header id="header">
    <!-- 左上角DOTA图标 -->
    <div class="brand">
        <span class="logo"><img src="{{asset('home/icon/4.png')}}" style="height:35px;" class="img-circle">DOTA</span>
    </div>

    <!-- 折叠左侧导航栏 -->
    <div class="toggle-navigation toggle-left">
        <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="收放导航栏">
            <i class="fa fa-bars"></i>
        </button>
    </div>

    <!-- 右上角用户图标 -->
    <div class="user-nav">
        <ul>
            <li>
                <div class="profile-photo">
                    <img src="{{asset('home/icon/1.png')}}" style="height:35px;" class="img-circle">
                </div>
            </li>
            <li class="dropdown settings">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    喻学意 <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu animated fadeInDown">
                    <li>
                        <a href="#"><i class="fa fa-user"></i> 用户选择一</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-calendar"></i> 用户选择二</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope"></i> 用户选择三</a>
                    </li>
                    <li>
                        <a href="login-out"><i class="fa fa-power-off"></i> 退出系统</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</header>