<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-right">




                <div class="dropdown d-none d-lg-inline-block ml-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge badge-danger badge-pill">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0"> اعلان ها </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="small"> مشاهده همه</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <a href="#" class="text-reset notification-item">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="bx bx-cart"></i>
                                                    </span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1 primary-font">سفارش شما ثبت شد</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 دقیقه پیش</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="text-reset notification-item">
                                <div class="media">
                                    <img src="assets/images/users/avatar-3.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1 primary-font">تونی استارک</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 ساعت پیش</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="text-reset notification-item">
                                <div class="media">
                                    <div class="avatar-xs mr-3">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                        <i class="bx bx-badge-check"></i>
                                                    </span>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1 primary-font">محصول شما ارسال شد</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 دقیقه پیش</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="text-reset notification-item">
                                <div class="media">
                                    <img src="assets/images/users/avatar-4.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="media-body">
                                        <h6 class="mt-0 mb-1 primary-font">استیو راجرز</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 ساعت پیش</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-2 border-top">
                            <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                <i class="mdi mdi-arrow-right-circle mr-1"></i> مشاهده بیشتر ...
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-xl-inline-block ml-1">{{\Illuminate\Support\Facades\Auth::user()->Firstname .' ' . Auth::user()->Lastname}}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item d-block" href="#"><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> تنظیمات</a>
                        <div class="dropdown-divider"></div>
                          <form method="POST" action="{{ route('logout') }}">
                            @csrf

                              <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                                            this.closest('form').submit();"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> خروج</a>

                          </form>
                    </div>
                </div>



            </div>
            <div>
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.php" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="20">
                                    </span>
                        <span class="logo-lg">
                                        <img src="assets/images/logo-dark.png" alt="" height="17">
                                    </span>
                    </a>

                    <a href="index.php" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="20">
                                    </span>
                        <span class="logo-lg">
                                        <img src="assets/images/logo-light.png" alt="" height="19">
                                    </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-inline-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="جستجو ...">
                        <span class="bx bx-search-alt"></span>
                    </div>
                </form>

                <div class="dropdown dropdown-mega d-none d-lg-inline-block ml-2">
                    <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        مگا منو
                        <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-megamenu">
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0">اجزای رابط کاربری</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);">لایت باکس</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">انتخاب‌گر بازه</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">هشدار Sweet</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">امتیاز</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">فرم ها</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">جدول ها</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">نمودار ها</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0">برنامه ها</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);">تجارت الکترونیک</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">تقویم</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">ایمیل</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">پروژه ها</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">وظایف</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">تماس</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <h5 class="font-size-14 mt-0">صفحات بیشتر</h5>
                                        <ul class="list-unstyled megamenu-list">
                                            <li>
                                                <a href="javascript:void(0);">نوار کناری روشن</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">نوار کناری فشرده</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">طرح منوی افقی</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">تعمیرات</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">به زودی</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">خط زمانی</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">سوالات متداول</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="font-size-14 mt-0">اجزاء</h5>
                                        <div class="px-lg-2">
                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/github.png" alt="Github">
                                                        <span>گیت هاب</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                        <span>بیت باکت</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                        <span>دریبل</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row no-gutters">
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                        <span>دراپ باکس</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                        <span>میل چیمپ</span>
                                                    </a>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-icon-item" href="#">
                                                        <img src="assets/images/brands/slack.png" alt="slack">
                                                        <span>اسلک</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div>
                                            <div class="card text-white mb-0 overflow-hidden text-white-50" style="background-image: url('assets/images/megamenu-img.png');background-size: cover;">
                                                <div class="card-img-overlay"></div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <h4 class="text-white mb-3">فروش</h4>

                                                            <h5 class="text-white-50">تا <span class="font-size-24 text-white">50 %</span> تخفیف</h5>
                                                            <p>لورم ایپسوم متن ساختگی با تولید سادگی</p>
                                                            <div class="mb-4">
                                                                <a href="#" class="btn btn-success btn-sm">مشاهده بیشتر</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</header>
