@extends('layouts.home')

@section('title', 'User Profile')

@section('content')

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
                                <h1>User Profile</h1>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="{{route('homepage')}}">Home</a></li>
                                <li class="active">User Profile</li>
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
                                <div class="">
                                    <div id="main" class="col-md-10">
                                        <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Style</th>
                                                <th>Subject</th>
                                                <th>Review</th>
                                                <th>Rate</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @include('home.message')
                                            @foreach($datalist as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>
                                                        <a href="{{route('style',['id'=>$rs->style->id, 'slug'=>$rs->style->slug])}}"
                                                           target="_blank">{{$rs->style->title}}</a>
                                                    </td>
                                                    <td>{{$rs->subject}}</td>
                                                    <td>{{$rs->review}}</td>
                                                    <td>{{$rs->rate}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td>{{$rs->created_at}}</td>

                                                    <td><a href="{{route('admin_review_delete', ['id'=> $rs->id])}}"
                                                           onclick="return confirm('Delete ! Are you sure?')">
                                                            <img src="{{asset('assets/admin/images')}}/delete.png"
                                                                 height="40">
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end messagebox -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
    </div>
@endsection
