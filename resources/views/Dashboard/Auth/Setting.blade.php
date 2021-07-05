@extends('layouts.Dashboard')
@section('content')
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">پروفایل</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript:%20void(0);">تنظیمات</a></li>
                                <li class="breadcrumb-item active">پروفایل</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!-- start row -->
            <div class="row">
                <div class="col-md-12 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-widgets py-3">

                                <div class="text-center">
                                    <div class="">
                                        <img src="{{Auth::user()->profile_photo_path}}" alt="" class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                        <div class="online-circle"><i class="fas fa-circle text-success"></i></div>
                                    </div>

                                    <div class="mt-3 ">
                                        <a href="#" class="text-dark font-weight-medium font-size-16 line-height-h">{{Auth::user()->FullName()}}</a>
                                        <p class="text-body mt-1 mb-2">طراح رابط کاربری</p>

                                    </div>

                                    <div class="row mt-4 border border-left-0 border-right-0 p-3">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <h6 class="text-muted primary-font">
                                                کار انجام شده
                                            </h6>
                                            <h5 class="my-n1 primary-font">{{\App\Models\Parts::where([ ['UserID' , Auth::id()] , ['Status' , 'Finished']  ])->count()}}</h5>
                                        </div>

                                        <div class="col-md-6">
                                            <h6 class="text-muted primary-font">
                                                کار باز
                                            </h6>
                                            <h5 class="my-n1 primary-font">{{\App\Models\Parts::where([ ['UserID' , Auth::id()] , ['Status' , 'Working']  ])->count()}}</h5>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">اطلاعات شخصی</h5>

                            <p class="card-title-desc">
                                ß
                            </p>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">آدرس ایمیل</p>
                                <h6 class="primary-font">{{Auth::user()->email}}</h6>
                            </div>

                            <div class="mt-3">
                                <p class="font-size-12 text-muted mb-1">شماره تلفن</p>
                                <h6 class="primary-font"><span class="ltr-text">{{Auth::user()->PhoneNumber}}</span></h6>
                            </div>



                        </div>
                    </div>



                </div>

                <div class="col-md-12 col-xl-9">

                    <div class="card">
                        <div class="card-body">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">امنیت</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " data-toggle="tab" href="#image" role="tab">
                                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                        <span class="d-none d-sm-block">تصویر</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content p-3 text-muted">

                                <div class="tab-pane active" id="settings" role="tabpanel">

                                    <form method="post" action="{{route('Dashboard.User.SettingUpdate')}}">
                                    @csrf


                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group ">
                                                <label for="userpassword">رمز عبور فعلی</label>
                                                <input type="password" class="form-control" name="password" id="userpassword" placeholder="رمز عبور فعلی را وارد کنید">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="userpassword">رمز عبور جدید</label>
                                                <input type="password" class="form-control" name="New_password" id="userpassword" placeholder="رمز عبور جدید را وارد کنید">
                                            </div>
                                        </div> <div class="col-6">
                                            <div class="form-group">
                                                <label for="userpassword">تکرار رمز عبور جدید</label>
                                                <input type="password" class="form-control" name="New_password_confirmation" id="userpassword" placeholder="تکرار رمز عبور جدید را وارد کنید">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">ذخیره</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="tab-pane " id="image" role="tabpanel">

                                    <form method="post" action="{{route('Dashboard.User.ImageUpdate')}}" enctype="multipart/form-data">
                                    @csrf


                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group ">
                                                <label for="userpassword">تصویر جدید</label>
                                                <input type="file" class="form-control" name="Image" id="userpassword" >
                                            </div>
                                        </div>
                                    </div>


                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">ذخیره</button>
                                    </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">پروژه ها</h4>

                            <div class="table-responsive">
                                <table class="table table-centered mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">پروژه ها</th>
                                        <th scope="col">تاریخ</th>
                                        <th scope="col">نام صورتحساب</th>
                                        <th scope="col">مقدار</th>
                                        <th scope="col" colspan="2">وضعیت پرداخت</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>رابط کاربری پنل مدیریت کووکس</td>
                                        <td>
                                            1399/01/21
                                        </td>
                                        <td>تونی استارک</td>
                                        <td>125 تومان</td>
                                        <td><span class="badge badge-soft-success font-size-12">پرداخت شده</span></td>
                                        <td><a href="#" class="btn btn-primary btn-sm">مشاهده</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            لوگوی پنل مدیریت کووکس
                                        </td>
                                        <td>1399/01/16</td>

                                        <td>روبرتو کارلوس</td>
                                        <td>118 تومان</td>
                                        <td><span class="badge badge-soft-danger font-size-12">شارژ شده</span></td>
                                        <td><a href="#" class="btn btn-primary btn-sm">مشاهده</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            بازطراحی - صفحه لندینگ
                                        </td>
                                        <td>1399/01/17</td>

                                        <td>استیو راجرز</td>
                                        <td>115 تومان</td>
                                        <td><span class="badge badge-soft-success font-size-12">پرداخت شده</span></td>
                                        <td><a href="#" class="btn btn-primary btn-sm">مشاهده</a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            قالب وبلاگ
                                        </td>
                                        <td>1399/01/18</td>

                                        <td>اولیور کوئین</td>
                                        <td>121 تومان</td>
                                        <td><span class="badge badge-soft-warning font-size-12">بازپرداخت</span></td>
                                        <td><a href="#" class="btn btn-primary btn-sm">مشاهده</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-3">
                                <ul class="pagination pagination-rounded justify-content-center mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#">قبلی</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- end row -->

        </div>
        <!-- End Page-content -->

    </div>
@endsection
