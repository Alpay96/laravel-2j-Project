@extends('layouts.home')

@section('title', 'User Profile')

@section('content')

    <div class="section">
        <ol class="breadcrumb">
            <li><a href="{{route('homepage')}}">Home</a></li>&nbsp;/&nbsp;
            <li class="active"> User Profile</li>
        </ol>
        <div class="container">
            <div class="row">
                <div id="side-menu" class="col-md-2">
                    @include('home.usermenu')
                </div>

                <div id="main" class="col-md-10">
                    @include('profile.show')
                </div>

            </div>
        </div>
    </div>
@endsection
