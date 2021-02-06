@extends('layouts.Dashboard')
@section('content')
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">ایجاد کاربر</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">ایجاد کاربر</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">ایجاد کاربر جدید</h4>
                            <form method="post" action="{{route('Dashboard.Users.Create')}}">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-2">نام کاربر</label>
                                    <div class="col-lg-10">
                                        <input  name="FirstName" type="text" class="form-control"
                                               placeholder="نام کاربر را وارد کنید ...">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-2">نام خانوادگی کاربر</label>
                                    <div class="col-lg-10">
                                        <input  name="LastName" type="text" class="form-control"
                                               placeholder="نام خانوادگی کاربر را وارد کنید ...">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-2">شماره تلفن کاربر</label>
                                    <div class="col-lg-10">
                                        <input  name="PhoneNumber" type="text" class="form-control"
                                               placeholder="شماره تلفن کاربر را وارد کنید ...">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-2">ایمیل کاربر</label>
                                    <div class="col-lg-10">
                                        <input  name="email" type="text" class="form-control"
                                               placeholder="ایمیل کاربر را وارد کنید ...">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-2">کلمه عبور کاربر</label>
                                    <div class="col-lg-10">
                                        <input  name="password" type="text" class="form-control"
                                               placeholder="کلمه عبور کاربر را وارد کنید ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">نقش کاربر</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="Role">
                                            <option selected disabled>نقش کاربر را انتخاب کنید</option>
                                           @foreach(\App\Models\Roles::all() as $roles)
                                            <option value="{{$roles->id}}">{{$roles->Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label">مهارت کاربر</label>
                                    <div class="col-md-10">
                                        <select class="form-control" name="Grade">
                                            <option selected disabled>مهارت کاربر را انتخاب کنید</option>
                                           @foreach(['A' , 'B' , 'C' , 'D'] as $Grade)
                                            <option value="{{$Grade}}">{{$Grade}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            <div class="row justify-content-end">
                                <div class="col-lg-10">
                                    <button type="submit" class="btn btn-primary">ایجاد کاربر</button>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>
        <!-- End Page-content -->

    </div>
@endsection
