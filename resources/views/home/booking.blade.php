@extends('layouts.home')

@section('title','Booking - ' .  $setting->title)
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
                                <img src="{{asset('assets')}}/uploads/mustache.png" alt=""/>
                            </div>

                            <div class="title--heading">
                                <h1>Appointment</h1>
                            </div>
                            <div class="clearfix"></div>

                            <ol class="breadcrumb">
                                <li><a href="{{route('homepage')}}">Home</a></li>
                                <li class="active">Appointment</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                </div>
            </div>
        </div><!-- end all-page-bar -->

        <div id="appointment" class="section wb">
            <div class="container">
                <div class="section-title row text-center">
                    <div class="col-md-8 offset-md-2">
                        <small>LET'S MAKE AN APPOINTMENT FOR YOUR LIFE</small>
                        <h3>Book now</h3>
                    </div>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact_form">
                            <div id="message"></div>
                            @include('home.message')
                            <form class="row" action="{{route('sendbooking')}}" method="post">
                                @csrf
                                <fieldset class="row row-fluid">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="name" id="name" class="form-control"
                                               placeholder="Name & Surname">
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" id="email" class="form-control"
                                               placeholder="Your Email">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" id="phone" class="form-control"
                                               placeholder="Your Phone">
                                    </div>

                                    <div class="col-md-12">
                                        <strong value="selecttime">Lütfen Bir Tarih Seçin: </strong>
                                        <input type="datetime-local" name="date" id="date">
                                    </div>

                                    <br><br><br>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control" name="note" id="note" rows="3"
                                                  placeholder="Note"></textarea>
                                    </div>
                                    <div class="form-btn text-center">
                                        <button type="submit" value="SEND" id="submit"
                                                class="btn btn-light btn-radius btn-brd grd1 btn-block subt">
                                            Rezervasyon Yap
                                        </button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
    </div>
@endsection
