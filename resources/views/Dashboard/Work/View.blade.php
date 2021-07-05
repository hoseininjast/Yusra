@extends('layouts.Dashboard')
@section('content')

    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">مشاهده ی کار ها</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript:%20void(0);">کار ها</a></li>
                                <li class="breadcrumb-item active">مشاهده</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="table-responsive">
                <h3>وضعیت کلی</h3>

                <table class="table table-dark mb-0">

                    <thead>
                    <tr>
                        <th>کد یکتا</th>
                        <th>نام</th>
                        <th>وضعیت</th>
                        <th>شروع کار</th>
                        <th>پایان کار</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{$Work->id}}</th>
                            <td>{{$Work->Name}}</td>
                            <td>{{$Work->Status == 'Working' ? 'در حال انجام':'پایان یافته'}}</td>
                            <td style="color: green">{{$Work->StartDate}}</td>
                            <td style="color: red">{{$Work->EndDate}}</td>

                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="table-responsive mt-5">
                <h3>بخش ها</h3>

                <table class="table table-dark mb-0">

                    <thead>
                    <tr>
                        <th>نام بخش</th>
                        <th>نام کارمند</th>
                        <th>وضعیت</th>
                        <th>شروع کار</th>
                        <th>پایان کار</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Work->Part as $Part)
                        <tr>
                            <th scope="row">{{\App\Models\Roles::find($Part->RoleID)->Name}}</th>
                            <td>{{$Part->User->Firstname . ' ' . $Part->User->Lastname}}</td>
                            <td>{{$Part->Status == 'Working' ? 'در حال انجام':'پایان یافته'}}</td>
                            <td style="color: green">{{$Part->StartDate}}</td>
                            <td style="color: red">{{$Part->FinishDate ?? 'تمام نشده'}}</td>

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
