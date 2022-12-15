<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="description" content="Profindo Sekuritas Indonesia">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Profindo Sekuritas Indonesia</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/logo.png') }}">

    <!-- Main Js File -->
    <script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    
    <!--jquery UI-->
    <link rel="stylesheet" href="{{ asset('jquery UI/jquery-ui.min.css') }}">
    <script src="{{ asset('jquery UI/jquery-ui.min.js') }}"></script>

    <!-- Bootstrap-->
    <script src="/assets/js/lib/bootstrap.bundle.min.js"></script>

    @yield('style')

</head>

<body>
    @include('modal.logout')
    @yield('modals')
    <!-- Page loading -->
    <div id="loading">
        <div class="spinner-grow"></div>
    </div>
    <!-- * Page loading -->

    <!-- App Header -->
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
    <!-- App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
        <section class="content" id=main tabindex="-1">
            @yield('content')
        </section>
    </div>
    <!-- * appCapsule -->

    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
    @hasSection('footer')
        @yield('footer')
    @else
        <div class="item active">
            <a href="/">
                <p>
                    <i class="icon ion-ios-water"></i>
                    <span class="pt-3">Home</span>
                </p>
            </a>
        </div>
        <div class="item">
            <a href="surat/surat-pernyataan-kuasa">
                <p>
                    <i class="icon ion-ios-apps"></i>
                    <span class="mt-3">Pernyataan Kuasa</span>
                </p>
            </a>
        </div>
        <div class="item">
            <a href="surat/perjanjian-pembukaan-rekening">
                <p>
                    <span>Pembukaan Rekening</span>
                </p>
            </a>
        </div>
        <div class="item">
            <a href="surat/pernyataan-nasabah-rdn-bca">
                <p>
                    <span>Nasabar RDN BCA</span>
                </p>
            </a>
        </div>
        <div class="item">
            <a href="surat/ketentuan-tabungan">
                <p>
                    <span>Ketentuan-ketentuan TAPRES</span>
                </p>
            </a>
        </div>
        <div class="item">
            <a href="#appSidebar" class="icon" data-bs-toggle="offcanvas">
                <p>
                    <i class="icon ion-ios-menu"></i>
                    <span>Menu</span>
                </p>
            </a>
        </div>
    @endif
    </div>
    <!-- * App Bottom Menu -->

    <!-- Sidebar Menu -->
    @include('sidebar')
    <!-- * Sidebar Menu -->
</body>

@yield('scripts')

</html>
