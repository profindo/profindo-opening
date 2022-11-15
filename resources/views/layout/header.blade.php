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
</div>