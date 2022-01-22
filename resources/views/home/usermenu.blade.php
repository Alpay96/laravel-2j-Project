@auth
    <div class="side-menu">
        <h3 class="side-menu-title"></h3>
        <ul class="list-group">
            <li><a href="{{route('myprofile')}}">Profilim</a></li>
            <li><a href="{{route('myreservations')}}">Rezervasyonlarım</a></li>
            <li><a href="{{route('myreviews')}}">Yorumlarım</a></li>
            <li><a href="{{route('mymessages')}}">Mesajlarım</a></li>
            <li><a href="{{route('logout')}}">Çıkış Yap</a></li>

            @php
                $userRoles = Auth::user()->roles->pluck('name');
            @endphp

            @if($userRoles->contains('admin'))
                <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
            @endif
        </ul>
    </div>
@endauth
