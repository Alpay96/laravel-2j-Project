@extends('layouts.home')

@section('title',$data->title)
@section('description'){{$data->description}} @endsection

@section('keywords', $data->keywords )

@section('content')
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="all-page-bar">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="title title-1 text-center">
                            <div class="much">
                                <img src="{{Storage::url($data->image)}}" alt=""/>
                            </div>
                            <div class="title--heading">
                                <h1>Style Detail</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="{{route('homepage')}}">Home</a></li>
                                <li class="active">{{$data->title}}</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->

        <div class="section wb">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <div class="owl-services owl-carousel owl-theme">
                            @foreach($datalist as $rs)
                                <div class="service-widget">
                                    <div class="post-media wow fadeIn">
                                        <a href="{{Storage::url($rs->image)}}" data-rel="prettyPhoto[gal]"
                                           class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                        <img src="{{Storage::url($rs->image)}}" style="height: 350px;" alt=""
                                             class="img-responsive img-rounded">
                                    </div>
                                    <div class="dit-box">
                                        <h3>{{$data->title}}</h3>
                                        <h2>{!! $data->detail !!}</h2>
                                    </div>
                                </div><!-- end service -->
                            @endforeach
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="hr1">

                <div class="row">
                    <div class="col-md-6">
                        <div id="contact" class="section wb">
                            <div class="container">
                                @foreach($reviews as $rs)
                                    <div class="section-title row text-center">
                                        <div><a href="#"> <i class="fa fa-user"></i> {{$rs->user->name}} </a></div>
                                        <div><a href="#"> <i class="fa fa-clock-o"></i> {{$rs->created_at}} </a></div>
                                        <div class="review-rating pull-right">
                                            <i class="fa fa-star @if ($rs->rate<1) -o empty @endif"></i>
                                            <i class="fa fa-star @if ($rs->rate<2) -o empty @endif"></i>
                                            <i class="fa fa-star @if ($rs->rate<3) -o empty @endif"></i>
                                            <i class="fa fa-star @if ($rs->rate<4) -o empty @endif"></i>
                                            <i class="fa fa-star @if ($rs->rate<5) -o empty @endif"></i>
                                        </div>
                                    </div>
                                    <div class="review-body">
                                        <strong>{{$rs->subject}}</strong>
                                        <p>{{$rs->review}}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <div class="contact_form">
                                @livewire('review',['id' =>$data->id])
                            </div>
                        </div><!-- end col -->
                    </div>
                </div><!-- end container -->
            </div><!-- end section -->
        </div>
@endsection
