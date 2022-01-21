@extends('layouts.home')

@section('title','FAQ - ' .  $setting->title)
@section('description'){{$setting->description}} @endsection

@section('keywords', $setting->keywords )

@section('headerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script>
        $(function () {
            $("#accordion").accordion();
        });
    </script>
@endsection

@section('content')
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="all-page-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title title-1 text-center">
                            <div class="much">
                                <img src="{{ asset('assets')}}/uploads/mustache.png" alt=""/>
                            </div>
                            <div class="title--heading">
                                <h1>SSS</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="{{route('homepage')}}">Home</a></li>
                                <li class="active">FAQ</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->
        <div class="section wb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div id="accordion">
                            @foreach($datalist as $rs)
                                <h3><strong>{{$rs->question}}</strong></h3>
                                <div>
                                    <p>  {!! $rs->answer !!}</p>
                                </div>
                                <hr>
                            @endforeach
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

            </div><!-- end container -->
        </div><!-- end section -->
    </div>
@endsection
