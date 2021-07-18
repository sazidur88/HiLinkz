@extends('layouts.dashboard_layout')


@section('content')
<div class="container-fluid px-lg-4">
    <div class="row">
        <div class="col-md-12 mt-lg-4 mt-4">
            <!-- Page Heading -->
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <div class="col-md-12 mt-lg-4 mt-4">
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h2 mb-0 text-center text-gray-800 text-info font-weight-bold">Message</h1>
                        </div>
                    </div>
                    <!-- title -->
                </div>
            </div>
        </div>
        {{----------------------------------Table Starts-------------------------------------------}}

        <!-- column -->
        <div class="col-md-12 mt-4">
            <div class="card py-3">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="card">
                            <div class="card-body">
                            <div class="email-middle-box ">
                                <div class="read-content">
                                    <div class="media pt-5">
                                        <img class="mr-3 rounded-circle" src="{{asset('assets/img/null/avatar.jpg')}}" style="height: 55px; width: 55px">
                                        <div class="media-body">
                                            <h5 class="m-b-3">{{$message->name}}</h5>
                                            <p class="m-b-2">{{(new DateTime($message->created_at))->format("d M Y")}}</p>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="media mb-4 mt-1">
                                        <div class="media-body"><span class="float-right">{{(new DateTime($message->created_at))->format("h:i A")}}</span>
                                            <h5 class="m-0 text-primary"><span class="font-weight-bold text-info">Subject : </span>{{$message->subject}}</h5>
                                        </div>
                                    </div>
                                    <h4 class="m-b-15">Message : </h4>
                                    <p class="text-dark">{{$message->message}}</p>

                                    <br>
                                    <br>
                                    <br>

                                    <h6 class="text-warning font-weight-bold">Phone : <span CLASS="text-dark">{{ $message->phone == null ? 'Not Available' : $message->phone }}</span></h6>
                                    <h6 class="text-warning font-weight-bold">Email : <span CLASS="text-dark">{{$message->email}}</span></h6>
                                </div>
                                <div class="text-right">
                                    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to={{$message->email}}" class="btn btn-primary w-md m-b-30" target="_blank"><i class="fa fa-paper-plane m-r-5"></i> Reply</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


@endsection

@section('extra_js')
@endsection