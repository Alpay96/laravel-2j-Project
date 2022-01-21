@extends('layouts.home')

@section('title', 'Reservations')

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
                                <h1>Reservations</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="{{route('homepage')}}">Home</a></li>
                                <li class="active">Reservations</li>
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
                        <div class="">
                            <h4>User Panel</h4>
                            <div class="row">
                                <div id="side-menu" class="col-md-2">
                                    @include('home.usermenu')
                                </div>
                                <div id="main" class="col-md-10">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>E-mail</th>
                                            <th>Phone</th>
                                            <th>Note</th>
                                            <th>Booking Date</th>
                                            <th>Status</th>
                                            <th>Admin Note</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($datalist as $rs)
                                            <tr>
                                                <td>{{$rs->id}}</td>
                                                <td>{{$rs->name}}</td>
                                                <td>{{$rs->email}}</td>
                                                <td>{{$rs->phone}}</td>
                                                <td>{{$rs->note}}</td>
                                                <td>{{$rs->date}}</td>
                                                <td>{{$rs->status}}</td>
                                                <td>{{$rs->admin_note}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end messagebox -->
                    </div><!-- end col -->
                </div><!-- end row -->

            </div><!-- end container -->
        </div><!-- end section -->
    </div>
@endsection
