@extends('layouts.Dashboard')
@section('head')
    <script src="{{asset('assets/libs/tinymce/js/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#mytextarea',
            language: 'fa',
            branding: false
        });
    </script>
@endsection
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
                                <li class="breadcrumb-item active">گزارش</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <h3>گزارش های قبلی</h3>
            <div class="row">
                @foreach($Reports as  $report)
                <div class="col-lg-12">
                    <div class="card">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{\Hekmatinasser\Verta\Verta::instance($report->created_at)->format('d M Y')}}</h5>
                                    <p class="card-text">{!! $report->Description !!}</p>
                                    <p class="card-text"><small class="text-muted">{{\Hekmatinasser\Verta\Verta::instance($report->created_at)->formatDifference()}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- end page title -->
            <h3>گزارش جدید</h3>


            <form method="post" action="{{route('Dashboard.Work.SaveReport')}}">
                @csrf
            <textarea id="mytextarea" name="Description"></textarea>
                <input type="hidden" name="WorkID" value="{{$WorkID}}">
                <div class="row justify-content-end mt-5 pull-right">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </div>
                </div>
            </form>


        </div>
        <!-- End Page-content -->


    </div>
@endsection
