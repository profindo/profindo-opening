<div class="appHeader d-flex">
    <div class="left">
        <a href="#appSidebar" class="icon" data-bs-toggle="offcanvas">
            <i class="fa-solid fa-bars"></i>
        </a>
    </div>
    <div class="pageTitle w-100">
        @hasSection('header')
            @yield('header')
        @else
        <img src="{{ asset('img/logo.png') }}" alt="Bitter" class="image">
        @endif
    </div>
    <div class="right">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa-solid fa-right-from-bracket"></i>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
</div>