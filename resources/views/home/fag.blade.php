@extends('layouts.home')

@section('title','FAQ - ' .  $setting->title)
@section('description'){{$setting->description}} @endsection

@section('keywords', $setting->keywords )

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

                            SSS

                    </div><!-- end col -->
                </div><!-- end row -->

            </div><!-- end container -->
        </div><!-- end section -->
    </div>
@endsection
