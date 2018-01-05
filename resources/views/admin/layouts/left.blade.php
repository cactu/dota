
<!-- 左侧导航条 -->
<aside class="main-sidebar">
    <!-- 侧边栏 -->
    <section class="sidebar">
        <!-- 侧边栏用户面板 -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('admin/AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>狗日强凡吴</p>
                <a href="javascript:;"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- 搜索表单 -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="请输入关键字">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                    </span>
            </div>
        </form>
        <!-- 侧边栏菜单 -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">后台管理系统</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>第一菜单</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.html"><i class="fa fa-circle-o"></i> 第一子菜单</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> 第二子菜单</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span>第二菜单</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> 第一子菜单</a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> 第二子菜单
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> 第一子子菜单</a></li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-circle-o"></i> 第二子子菜单
                                    <span class="pull-right-container">
                                      <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> 第一子子子菜单</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> 第二子子子菜单</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> 第三子菜单</a></li>
                </ul>
            </li>
        </ul>
    </section>

</aside>