<div class="page-container">
    @include('layouts.navigation')
    <div class="page-content">
        @include('layouts.header_nav')
        @yield('breadcumb')
        @yield('content')
    </div>
</div>