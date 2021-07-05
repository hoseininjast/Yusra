@extends('layouts.Dashboard')
@section('head')

    <!-- datepicker css -->
    <link href="{{asset('assets/libs/datepicker-jalali/bootstrap-datepicker.min.css')}}" rel="stylesheet">

    <!-- Summernote css -->

@endsection
@section('content')
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">ویرایش کار</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">کار ها</li>
                                <li class="breadcrumb-item active">ویرایش کار</li>
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
                            <h4 class="card-title mb-4">ویرایش کار جدید</h4>
                            <form class="outer-repeater" action="{{route('Dashboard.Work.Update' ,  $Work->id)}}" method="post" autocomplete="new-password">
                                @csrf
                                @method('PUT')
                                <div  class="outer">
                                    <div  class="outer">
                                        <div class="form-group row mb-4">
                                            <label for="taskname" class="col-form-label col-lg-2">نام کار</label>
                                            <div class="col-lg-10">
                                                <input id="taskname" name="WorkName" type="text" class="form-control" placeholder="نام کار را وارد کنید ..." value="{{$Work->Name}}">
                                            </div>
                                        </div>


                                        <div class="form-group row mb-4">
                                            <label class="col-form-label col-lg-2">تاریخ کار</label>
                                            <div class="col-lg-10">
                                                <div class="input-daterange input-group">
                                                    <input type="text" class="form-control" autocomplete="new-password" placeholder="تاریخ شروع" name="Start" value="{{$Work->StartDate}}">
                                                    <input type="text" class="form-control" placeholder="تاریخ پایان" name="End" value="{{$Work->EndDate}}">
                                                </div>
                                            </div>
                                        </div>

                                  {{--      <div class="inner-repeater mb-4">
                                            <div data-repeater-list="inner-group" class="inner form-group mb-0 row">
                                                <label class="col-form-label col-lg-2">افزودن عضو تیم</label>
                                                <div data-repeater-item class="inner col-lg-10 ml-md-auto">
                                                    <div class="mb-3 row align-items-center">
                                                        <div class="col-md-6">
                                                            <select class="form-control" name="Role">
                                                                <option selected disabled>نقش را انتخاب کنید</option>
                                                                @foreach( \App\Models\Roles::all() as $roles)
                                                                    <option value="{{$roles->id}}">{{$roles->Name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mt-4 mt-md-0">

                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="mt-2 mt-md-0">
                                                                <input data-repeater-delete type="button" class="btn btn-primary btn-block inner" value="حذف">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-end">
                                                <div class="col-lg-10">
                                                    <input data-repeater-create type="button" class="btn btn-success inner" value="افزودن شماره">
                                                </div>
                                            </div>
                                        </div>--}}

                                        @foreach(\App\Models\Roles::all() as $roles)
                                            @php
                                            $part = \App\Models\Parts::where([['WorkID' , $Work->id],['RoleID' , $roles->id]])->first();
                                            @endphp
                                        <div class="form-group row mb-4">
                                            <label for="taskbudget" class="col-form-label col-lg-2">{{$roles->Name}}</label>
                                            <div class="col-lg-10">
                                                <select class="form-control" name="Role-{{$roles->id}}">
                                                    <option selected disabled>کاربر را انتخاب کنید</option>
                                                    @foreach(\App\Models\User::where('Role' , $roles->id)->orderBy('Grade','ASC' )->get() as $user)
                                                        <option value="{{$user->id}}" @if ($part != null && $part->UserID == $user->id) selected disabled @endif>{{$user->Firstname .' ' . $user->Lastname .' --->>> ' . $user->Grade}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @endforeach



                                        <div class="form-group row mb-4">
                                            <label for="taskbudget" class="col-form-label col-lg-2">مدت زمان کار</label>
                                            <div class="col-lg-10">
                                                <input id="taskbudget" name="WorkDays" type="text" placeholder="مدت زمان کار را وارد کنید ..." class="form-control" value="{{$Work->WorkDays}}">
                                            </div>
                                        </div>

                                      {{--  <div class="form-group row mb-4">
                                            <label for="taskbudget" class="col-form-label col-lg-2">بودجه</label>
                                            <div class="col-lg-10">
                                                <input id="taskbudget" name="taskbudget" type="text" placeholder="بودجه کار را وارد کنید ..." class="form-control">
                                            </div>
                                        </div>--}}
                                    </div>
                                </div>
                            <div class="row justify-content-end">
                                <div class="col-lg-10">
                                    <button type="submit" class="btn btn-primary">بروزرسانی کار</button>
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

@section('js')
    <!-- bootstrap datepicker -->
    <script src="{{asset('assets/libs/datepicker-jalali/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/libs/datepicker-jalali/bootstrap-datepicker.fa.min.js')}}"></script>

    <!-- Summernote js -->
    <script src="{{asset('assets/libs/summernote/summernote-bs4.min.js')}}"></script>
    <script src="{{asset('assets/libs/summernote/lang/summernote-fa-IR.min.js')}}"></script>

    <!-- form repeater js -->
    <script src="{{asset('assets/libs/jquery.repeater/jquery.repeater.min.js')}}"></script>


    <script>

        $(document).ready(function () {
            'use strict';



            window.outerRepeater = $('.outer-repeater').repeater({
                defaultValues: { 'text-input': 'outer-default' },
                show: function () {
                    console.log('outer show');
                    $(this).slideDown();
                },
                hide: function (deleteElement) {
                    console.log('outer delete');
                    $(this).slideUp(deleteElement);
                },
                repeaters: [{
                    selector: '.inner-repeater',
                    defaultValues: { 'inner-text-input': 'inner-default' },
                    show: function () {
                        console.log('inner show');
                        $(this).slideDown();
                    },
                    hide: function (deleteElement) {
                        console.log('inner delete');
                        $(this).slideUp(deleteElement);
                    }
                }]
            });

            $('.input-daterange input').datepicker({
                dateFormat: "yy/mm/dd",
                showOtherMonths: true,
                selectOtherMonths: false
            });
        });
    </script>
    @endsection
