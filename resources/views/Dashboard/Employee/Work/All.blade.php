@extends('layouts.Dashboard')
@section('content')

    <div class="main-content">

        <div class="page-content">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="page-title mb-0 font-size-18">کار های من</h4>

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
                        <th>وضعیت</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Parts as $part)

                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$part->Work->Name}}</td>
                            <td style="color: red">{{$part->Status == 'Working' ? 'در حال انجام':'پایان یافته'}}</td>
                            <td>
                                <a href="{{route('Dashboard.Work.Report' , $part->Work->id)}}"><button class="btn btn-info"> گزارش <i class="fa fa-pencil-alt"></i></button></a>
                                <a onclick="AreYouSure({{$part->id}})"><button class="btn btn-success">  اتمام<i class="fa fa-check"></i></button></a>
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

        function AreYouSure(id){
            var baseurl = '{{route('Dashboard.Work.Done' , 'id')}}'
            Swal.fire({
                title: 'ایا از این کار مطمعن هستید؟',
                text: "این عملیات را نمیتوان برگرداند",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'بله ، کار تمام شده است',
                cancelButtonText: 'خیر ، برگرد'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'تبریک!',
                        'کار شما با موقیت انجام شد',
                        'success'
                    )
                    window.location.href = baseurl.replace('id' , id)
                }
            })
        }

    </script>
@endsection
