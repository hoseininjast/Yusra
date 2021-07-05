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
                    <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge badge-danger badge-pill">{{Auth::user()->Notification()->count()}}</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                         aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0"> اعلان ها </h6>
                                </div>
                                {{-- <div class="col-auto">
                                     <a href="#!" class="small"> مشاهده همه</a>
                                 </div>--}}
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            @foreach(Auth::user()->Notification as $notification)
                                <a href="{{route('Dashboard.Work.View' , $notification->WorkID)}}" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            @if ($notification->Status == 'New')

                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                            <i class="bx bx-badge-check"></i>
                                            </span>

                                            @else
                                                <span class="avatar-title bg-gray-700 rounded-circle font-size-16"  style="background: #3d3d3d">
                                                            <i class="bx bx-badge-check "></i>
                                                    </span>
                                            @endif

                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1 primary-font">{{\App\Models\Works::find($notification->WorkID)->Name}}</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">{{$notification->Description}}</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> {{\Hekmatinasser\Verta\Verta::instance($notification->created_at)->formatDifference()}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach


                        </div>
                        {{--<div class="p-2 border-top">
                            <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                <i class="mdi mdi-arrow-right-circle mr-1"></i> مشاهده بیشتر ...
                            </a>
                        </div>--}}
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-xl-inline-block ml-1">{{\Illuminate\Support\Facades\Auth::user()->Firstname .' ' . Auth::user()->Lastname}}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item d-block" href="#"><i
                                    class="bx bx-wrench font-size-16 align-middle mr-1"></i> تنظیمات</a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                            this.closest('form').submit();"><i
                                        class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> خروج</a>

                        </form>
                    </div>
                </div>


            </div>
            <div>
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{route('Dashboard.index')}}" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="{{asset('logo.png')}}" alt="" height="60">
                                    </span>
                        <span class="logo-lg">
                                        <img src="{{asset('logo.png')}}" alt="" height="60">
                                    </span>
                    </a>

                    <a href="{{route('Dashboard.index')}}" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="{{asset('logo.png')}}" alt="" height="60">
                                    </span>
                        <span class="logo-lg">
                                        <img src="{{asset('logo.png')}}" alt="" height="60">
                                    </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect"
                        id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->


            </div>

        </div>
    </div>
</header>
