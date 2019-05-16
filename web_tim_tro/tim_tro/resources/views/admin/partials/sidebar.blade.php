<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <!--left-fixed -navigation-->
    <aside class="sidebar-left">
        <nav class="navbar navbar-inverse">

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="sidebar-menu">
                    <li class="header">Trang quản trị viên</li>
                    <li class="treeview">
                        <a href="{{url('/admin')}}">
                            <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
                        </a>
                    </li>
                    <li class="treeview">
                            <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Tài khoản</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/user/manager')}}"><i class="fa fa-angle-right"></i>Quản lý tài khoản</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Phòng</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/room/repository')}}"><i class="fa fa-angle-right"></i> Danh sách các phòng</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Admin</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/users')}}"><i class="fa fa-angle-right"></i> Quản lý tài khoản admin</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>nhận thông báo</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/newletter')}}"><i class="fa fa-angle-right"></i>Newletter</a></li>
                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Liên hệ</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/admin/contact')}}"><i class="fa fa-angle-right"></i>Liên Hệ</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>
</div>
