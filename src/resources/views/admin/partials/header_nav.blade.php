<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">{{ Config::get('app.name') }}</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">{{ Config::get('app.name') }}</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="{{ route('home') }}" class="" target="_blank">
                        <i class="fab fa-chrome"></i>
                        @lang('app.view_website')
                    </a>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ url('admin/dist/img/user2-160x160.jpg')}} " class="user-image" alt="{{ Auth::user()->name }}">
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>

                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ url('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="{{ Auth::user()->name }}">
                            <p>
                                {{ Auth::user()->email }}
                            </p>
                            <a class="text-gray" href="{{ route('admin_user.change_password', Auth::user()->id ) }}">
                                <i class="fa fa-circle-o"></i> Đổi mật khẩu</a>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">{{ trans('admin.profile') }}</a>
                            </div>
                            <div class="pull-right">
                                <form action="{{ route('admin.logout') }}" method="post">
                                    {{ csrf_field() }}
                                    <a class="dropdown-item btn btn-sm btn-primary" onclick="$(this).parent().submit()" href="javascript:;">Đăng xuất</a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
        
            </ul>
        </div>
    </nav>
</header>