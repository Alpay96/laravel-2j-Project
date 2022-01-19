@extends('layouts.home')

@section('title','About Us - ' .  $setting->title)
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
                                <h1>About</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="{{route('homepage')}}">Home</a></li>
                                <li class="active">About</li>
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
                            <h4>About Us</h4>
                            {!! $setting->aboutus !!}}
                    </div><!-- end col -->
                </div><!-- end row -->
                <hr class="hr1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" href="#tab_a" data-toggle="tab">Our Mission</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_b" data-toggle="tab">Why Us?</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_c" data-toggle="tab">About Us</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab_a">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi scelerisque tortor mi, eget mattis velit sagittis id. Duis ornare mauris eu eros interdum, vitae finibus arcu ultricies. Donec vitae felis eleifend, dignissim erat a, pretium diam. Donec eu massa odio. Suspendisse et ornare lacus, pharetra imperdiet ligula.</p>
                                    <p>Vestibulum ac quam id lorem semper condimentum. Nulla vel ligula turpis. Nullam luctus, mi nec rhoncus gravida, tortor est semper purus, a feugiat sapien odio non urna. Fusce pellentesque neque ut nisi rhoncus imperdiet. Sed eu purus vel turpis consectetur convallis. Donec a dolor tellus. Phasellus dignissim erat nec ipsum condimentum sollicitudin. </p>
                                </div>
                                <div class="tab-pane fade" id="tab_b">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                    <ul>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>User Experince</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Full Devices</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Awesome Design</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Visual Impact</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>100% Sincronized</li>
                                        <li><i class="fa fa-circle-o" aria-hidden="true"></i>Custom Support</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab_c">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                </div>
                            </div><!-- tab content -->
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
    </div>
@endsection
