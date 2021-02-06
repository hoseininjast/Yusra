@extends('layouts.Dashboard')
@section('content')

    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">همه ی کاربر ها</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript:%20void(0);">کاربر ها</a></li>
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
                        <th>نام خانوادگی</th>
                        <th>شماره تلفن </th>
                        <th>نقش</th>
                        <th>مهارت</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Users as $user)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$user->Firstname}}</td>
                            <td>{{$user->Lastname}}</td>
                            <td>{{$user->PhoneNumber}}</td>
                            <td>{{$user->Roles->Name}}</td>
                            <td>{{$user->Grade}}</td>
                            <td>
                                <a href="{{route('Dashboard.Users.Edit' , $user->id)}}"><button class="btn btn-warning">ویرایش<i class="fa fa-pencil-alt"></i></button></a>
                                <a onclick="DeleteUser({{$user->id}})"><button class="btn btn-danger">حذف<i class="fa fa-trash"></i></button></a>
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
@section('js')

    <script>
        function DeleteUser(id){
            var DeleteUrl = '{{route('Dashboard.Users.Delete' , 'UserIDGoesHere')}}';
            Swal.fire({
                title: 'از حذف این کاربر مطمعن هستید؟',
                text: "این عملیات بازگشت ناپذیر است",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'بله پاکش کن',
                cancelButtonText: 'خیر بازگشت',
            }).then((result) => {
                if (result.isConfirmed) {
                    var FinalDeleteUrl = DeleteUrl.replace('UserIDGoesHere',id);
                    window.location = FinalDeleteUrl;
                }
            })
        }

    </script>
@endsection
