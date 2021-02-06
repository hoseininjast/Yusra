@extends('layouts.Dashboard')
@section('content')
    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">ایجاد نقش</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">ایجاد نقش</li>
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
                            <h4 class="card-title mb-4">ایجاد نقش جدید</h4>
                            <form method="post" action="{{route('Dashboard.Role.Create')}}">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-2">نام نقش</label>
                                    <div class="col-lg-10">
                                        <input  name="Name" type="text" class="form-control"
                                               placeholder="نام نقش را وارد کنید ...">
                                    </div>
                                </div>

                            <div class="row justify-content-end">
                                <div class="col-lg-10">
                                    <button type="submit" class="btn btn-primary">ایجاد نقش</button>
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
