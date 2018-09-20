<div class="page-sidebar">
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="{{ url('/') }}">ATLANT</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="{{ asset('assets/img/images/users/avatar.jpg') }}" alt="John Doe"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="{{ asset('assets/img/images/users/avatar.jpg') }}" alt="John Doe"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name">{{ auth()->user()->name }}</div>
                    {{--<div class="profile-data-title">Web Developer/Designer</div>--}}
                </div>
                <div class="profile-controls">
                    <a href="{{ url('administrator/profile') }}" class="profile-control-right"><span class="fa fa-info"></span></a>
                    {{--<a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>--}}
                </div>
            </div>
        </li>
        <li class="xn-title">Navigation</li>
        <li class="active">
            <a href="{{ url('/') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
        </li>
        <li>
            <a href="{{ url('administrator/bets') }}"><span class="fa fa-map-marker"></span> <span class="xn-text">Bets</span></a>
        </li>

    </ul>
</div>