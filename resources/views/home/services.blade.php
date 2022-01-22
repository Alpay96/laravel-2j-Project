@extends('layouts.home')

@section('title','Modellerimiz ve Hizmetlerimiz - ' .  $setting->title)
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
                                <h1>Modellerimiz ve Hizmetlerimiz</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{route('homepage')}}">Home</a></li>
                                <li class="active">Modeller</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->

        <div id="services" class="section lb">
            <div class="container">
                <h1 align="center"><strong><font face="Fantasy">MODELLERİMİZ</font> </strong></h1> <br>
                <hr class="grd1">
                <div class="owl-services owl-carousel owl-theme">
                    @foreach($styles as $rs)
                        <div class="service-widget">
                            <div class="post-media wow fadeIn">
                                <a href="{{Storage::url($rs->image)}}" data-rel="prettyPhoto[gal]"
                                   class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                                <img src="{{Storage::url($rs->image)}}" style="height: 350px;" alt=""
                                     class="img-responsive img-rounded">
                            </div>
                            <div class="dit-box">
                                <h3>{{$rs->title}}</h3>
                                <br>
                                <a href="{{route('style',['id' => $rs->id, 'slug' => $rs->slug])}}"
                                   class="btn btn-light btn-radius btn-brd grd1 effect-1 butn">Style Detail</a>
                            </div>
                        </div><!-- end service -->
                    @endforeach
                </div>

                <hr class="grd1"><br><br>

                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <h3>OUR SERVICES</h3>
                        <hr class="grd1">
                        <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim,
                            non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                    </div>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{ asset('assets')}}/uploads/barber_service_01.jpg" alt=""
                                     class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>beard, mustache care</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam
                                at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{ asset('assets')}}/uploads/barber_service_02.jpg" alt=""
                                     class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>detailed feather cleaning</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa
                                sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center lastchild clearfix">
                            <div class="uptop">
                                <img src="{{ asset('assets')}}/uploads/barber_service_03.jpg" alt=""
                                     class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>facial and skin care</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa
                                sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{ asset('assets')}}/uploads/barber_service_04.jpg" alt=""
                                     class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>studio shots</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam
                                at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center clearfix">
                            <div class="uptop">
                                <img src="{{ asset('assets')}}/uploads/barber_service_05.jpg" alt=""
                                     class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>forming the beard</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa
                                sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->

                        <div class="service-wrap text-center lastchild clearfix">
                            <div class="uptop">
                                <img src="{{ asset('assets')}}/uploads/barber_service_06.jpg" alt=""
                                     class="img-responsive img-rounded alignleft">
                            </div>
                            <h4>hair wash</h4>
                            <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa
                                sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                        </div><!-- end issue -->
                    </div><!-- end col -->
                </div>
            </div><!-- end container -->
        </div><!-- end section -->
    </div>
@endsection
