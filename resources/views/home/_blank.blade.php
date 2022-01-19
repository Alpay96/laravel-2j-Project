@extends('layouts.home')

@section('title', $setting->title)
@section('description'){{$setting->description}} @endsection

@section('keywords', $setting->keywords )

@section('content')
    <div id="page-content-wrapper">
        <div class="all-page-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title title-1 text-center">
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="{{route('homepage')}}">Home</a></li>
                                <li class="active">Contact</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="container">
                        <div class="row">

                            içerik alanı

                        </div>
                    </div>
                </div>

            </div>
        </div><!-- end all-page-bar -->
    </div>
@endsection
