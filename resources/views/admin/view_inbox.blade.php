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
                            <h1 class="h2 mb-0 text-center text-gray-800 text-info font-weight-bold">Inbox Messages</h1>
                            <h3 class="d-none d-sm-inline-block">
                                @if($seen_count > 0)
                                <span class="text-success font-weight-bold"> {{$seen_count }} New messages </span>
                                @else
                                <span class="text-danger font-weight-bold"> No New messages </span>
                                @endif
                            </h3>
                        </div>
                    </div>
                    <!-- title -->
                </div>
            </div>
        </div>
        {{----------------------------------Table Starts-------------------------------------------}}
        <form id="search_form" method="post" action="{{route('view_individual_message')}}" style="display: none">
            @csrf
            <input type="hidden" name="id" id="id" value="">
            <button type="submit" name="search_submit"></button>
        </form>
        <!-- column -->
        <div class="col-md-12 mt-4">
            <div class="card py-3">
                <div class="row">
                    <div class="col-lg-11 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="custom-media-object-2">
                                    @forelse($messages as $msg)
                                    <a href="" onclick="search_function(<?php echo $msg->id ?>);return false;">
                                        <div class="media border-bottom-1 p-t-15 mb-2">
                                            <img class="rounded-circle mr-3" src="{{asset('assets/img/null/avatar.jpg')}}" style="height: 55px; width: 55px">
                                            <div class="media-body">
                                                <div class="row">
                                                    <div class="col-lg-7 col-sm-12 mt-1">
                                                        <h5 class="{{$msg->seen == 0 ? 'font-weight-bold text-dark':''}}">{{$msg->name}}</h5>
                                                        <p class="{{$msg->seen == 0 ? 'font-weight-bold text-primary':''}}">
                                                            @if(strlen($msg->message) < 100) {{$msg->message}} @else {{substr($msg->message, 0, 100)}} ... @endif </p>
                                                    </div>
                                                    <div class="col-lg-5 col-sm-2 text-right">
                                                        <h5 class="text-muted"><i class="color-danger ti-minus m-r-5"></i><span class="BTC m-l-10">{{(new DateTime($msg->created_at))->format("d-m-Y")}}</span></h5>
                                                        <p class="f-s-13 text-muted"><span class="m-l-10">{{(new DateTime($msg->created_at))->format("h:i A")}}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <hr>
                                    @empty
                                    <div class="col-md-12">
                                        <h4 class="text-center text-danger">No message Found</h4>
                                    </div>
                                    @endforelse
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
<script>
    function search_function(keyword) {
        console.log(keyword);
        document.getElementById("id").value = keyword;
        document.getElementById('search_form').submit();
    }
</script>


@endsection