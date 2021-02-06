@extends('layouts.Dashboard')
@section('content')

    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">همه ی کار ها</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript:%20void(0);">کار ها</a></li>
                                <li class="breadcrumb-item active">مدیریت</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="table-responsive">
                <table class="table table-dark mb-0">

                    <thead>
                    <tr>
                        <th>#</th>
                        <th>نام</th>
                        <th>وضغیت</th>
                        <th>وظایف</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Works as $work)

                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$work->Name}}</td>
                            <td>{{\App\Models\Works::Parts($work)}}</td>
                            <td style="color: red">{{$work->Status == 'Working' ? 'در حال انجام':'پایان یافته'}}</td>
                            <td>
                                <a href="{{route('Dashboard.Work.Edit' , $work->id)}}"><button class="btn btn-warning">ویرایش<i class="fa fa-pencil-alt"></i></button></a>
                                <a href="{{route('Dashboard.Work.Delete' , $work->id)}}"><button class="btn btn-danger">حذف<i class="fa fa-trash"></i></button></a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>

            <!-- end row -->


        </div>
        <!-- End Page-content -->


    </div>
@endsection
