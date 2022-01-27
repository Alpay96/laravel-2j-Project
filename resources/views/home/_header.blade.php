@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp

@section('footerjs')
    @livewireScripts
@endsection

<!-- LOADER -->
<div id="preloader">
    <div class="cube-wrapper">
        <div class="cube-folding">
            <span class="leaf1"></span>
            <span class="leaf2"></span>
            <span class="leaf3"></span>
            <span class="leaf4"></span>
        </div>
        <div class="mus">
            <img src="{{ asset('assets')}}/images/lode-img.png" alt=""/>
        </div>
        <span class="loading" data-name="Loading">StyleBarber Loading</span>
    </div>
</div><!-- end loader -->
<!-- END LOADER -->

@guest
    <div class="top-add alert alert-light alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Hala üye değil misiniz? Hemen üye olun ve online rezervasyonun tadını çıkartın.</strong>
    </div>
@endguest
<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="header-search" style="margin-left: 60px;">
            <form action="{{route('getstyle')}}" method="post" style="position: center">
                @csrf
                @livewire('search')
                <button type="submit" class="search button"><i class="fa fa-search"></i></button>
            </form>
            @livewireScripts
        </div>


        <div class="container">


            <a class="navbar-brand" href="{{route('homepage')}}">
                <img src="{{ asset('assets')}}/images/logo.png" alt=""/>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('homepage')}}">Anasayfa</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('aboutus')}}"> Hakkımızda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('barbers')}}">Berberlerimiz</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('services')}}">Modeller</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('booking')}}">Rezervasyon</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">SSS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('references')}}">Referanslarımız</a>
                </ul>
            </div>

            @auth
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" data-toggle="dropdown" aria-expanded="false">
                                    {{Auth::user()->name }}
                                    <i class="">{{Auth::user()->roles->pluck('name')}}</i> <i
                                        class="fa fa-level-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li><a href="{{route('myprofile')}}"> Profile</a></li>
                                    <li><a href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            @endauth

            @guest
                <a href="/login" class="text-uppercase">Login</a> &emsp;/&emsp;
                <a href="/register" class="text-uppercase">SingUp</a>
            @endguest
        </div>
    </nav>
</header>
<!-- End header -->
