<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16 line-height-h">{{Auth::user()->FullName()}}</a>
                <p class="text-body mt-1 mb-0 font-size-13">طراح رابط کاربری</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">منو</li>



                <li>
                    <a href="{{route('Dashboard.index')}}" class=" waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>داشبورد</span>
                    </a>
                </li>



                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="fas fa-money-bill-alt"></i>
                        <span>وظایف و کار ها</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                                <li><a href="{{route('Dashboard.Work.All')}}">مدیریت</a></li>
                                <li><a href="{{route('Dashboard.Work.Add')}}">افزودن</a></li>
                    </ul>
                </li>


                <li>
                    <a href="#" class="has-arrow waves-effect">
                        <i class="mdi mdi-account-circle"></i>
                        <span>کارمندان</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('Dashboard.Users.All')}}">مدیریت</a></li>
                        <li><a href="{{route('Dashboard.Users.Add')}}">افزودن</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:%20void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-seal"></i>
                        <span>نقش ها</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('Dashboard.Role.All')}}">مدیریت</a></li>
                        <li><a href="{{route('Dashboard.Role.Add')}}">افزودن</a></li>
                    </ul>
                </li>

                <!--<li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="mdi mdi-"></i>
                        <span>تنظیمات سایت</span>
                    </a>
                </li>-->



                <li class="menu-title">اجزاء</li>

                <li>
                    <a href="#" class=" waves-effect">
                        <i class="mdi mdi-settings-box"></i>
                        <span>تنظیمات سایت</span>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                            this.closest('form').submit();" class=" waves-effect">
                            <i class="mdi mdi-logout"></i>
                            <span>خروج</span>
                        </a>
                    </form>

                </li>
                <div class="dropdown-divider"></div>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
