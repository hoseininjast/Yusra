<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>Yusra Crm </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- jquery.vectormap css -->
    <link href="{{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet"
          type="text/css">

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <!-- App Css -->
    <link href="{{asset('assets/css/app.css')}}" id="app-style" rel="stylesheet" type="text/css">
    <!-- Theme Color -->
    @laravelPWA
    @yield('head')

    <meta name="theme-color" content="#283D92">

</head>

<body data-layout="detached" data-topbar="colored">

<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layouts.header')
    <!-- ========== Left Sidebar Start ========== -->
    @include('layouts.sidebar')



    <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
    @yield('content')

    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


</div>

<!-- end container-fluid -->

<!-- Right Sidebar -->
<!-- /Right-bar -->

<!-- Right bar overlay-->

<!-- JAVASCRIPT -->
<script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

<!-- apexcharts -->
{{--<script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>--}}

<!-- jquery.vectormap map -->
<script src="{{asset('assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')}}"></script>

{{--<script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>--}}

<script src="{{asset('assets/js/app.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

{{--
@if(request('msg'))

<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-start',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: '{{request('msg')}}'
    })
</script>
@endif--}}
@include('sweetalert::alert')

@yield('js')

@if ($errors->any())
           @php
               $err = '';
           @endphp
            @foreach ($errors->all() as $error)
                @php
                    $err .= $error . '</br>'
                @endphp
            @endforeach
        <script>
            Swal.fire({
                title: '<strong> !!!مشکلی پیش آمد!!!</strong>',
                icon: 'info',
                html:'{!! $err !!}',
                showCloseButton: true,
                focusConfirm: false,
                confirmButtonText:
                    ' متوجه شدم!',
            })
        </script>
@endif

</body>


</html>
