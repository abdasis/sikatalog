<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    <div class="navbar-custom bg-white shadow-xs">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-end mb-0">

                <li class="dropdown d-none d-lg-inline-block">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                        <i class="fe-maximize noti-icon"></i>
                    </a>
                </li>


                <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset('admin/images/flags/us.jpg')}}" alt="user-image" height="16">
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{asset('admin/images/flags/germany.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="{{asset('admin/images/flags/italy.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                        </a>


                    </div>
                </li>


                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{asset('/admin/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ms-1">
                        {{Auth::user()->name}} <i class="mdi mdi-chevron-down"></i>
                    </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>Settings</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="{{route('logout')}}" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                        <i class="fe-settings noti-icon"></i>
                    </a>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="{{asset('admin/images/logo.png')}}" alt="" height="40">
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                    <span class="logo-lg">
                    <img src="{{asset('admin/images/logo.png')}}" alt="" height="40">
                        <!-- <span class="logo-lg-text-light">U</span> -->
                </span>
                </a>

                <a href="{{route('dashboard')}}" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="{{asset('admin/images/logo-sm.png')}}" alt="" height="22">
                </span>
                    <span class="logo-lg">
                    <img src="{{asset('admin/images/logo-light.png')}}" alt="" height="20">
                </span>
                </a>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
