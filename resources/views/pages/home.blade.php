<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profindo Sekuritas Indonesia</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="description" content="Profindo Sekuritas Indonesia">
    <meta name="keywords" content="bootstrap, mobile template, Bootstrap 5, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="{{ asset('img/logo-png.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logo-png.png') }}">
</head>

<body>

    <!-- Page loading -->
    <div id="loading">
        <div class="spinner-grow"></div>
    </div>
    <!-- * Page loading -->

    <!-- App Header -->
    <div class="appHeader">
        <div class="left">
            <a href="#appSidebar" class="icon" data-bs-toggle="offcanvas">
                <i class="icon ion-ios-menu"></i>
            </a>
        </div>
        <div class="pageTitle">
            <img src="{{ asset('img/logo-png.png') }}" alt="Bitter" class="image">
        </div>
    </div>
    <!-- searchBox -->
    <div id="searchBox">
        <form>
            <span class="inputIcon">
                <i class="icon ion-ios-search"></i>
            </span>
            <input type="text" class="form-control" id="searchInput" placeholder="Search...">
            <a href="javascript:;" class="toggleSearchbox closeButton">
                <i class="icon ion-ios-close-circle"></i>
            </a>
        </form>
    </div>
    <!-- * searchBox -->
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="appContent">
            {{--  --}}
        </div>

        <!-- app Footer -->
        <footer class="appFooter">
            <div class="heading">Copyright © Profindo Sekuritas Indonesia. All Rights Reserved.</div>
            <!-- facebook -->
            <a href="https://m.facebook.com/profindosekuritasindonesia/" class="btn btn-facebook btn-icon me-1">
                <i class="icon ion-logo-facebook"></i>
            </a>
            <!-- twitter -->
            <a href="https://mobile.twitter.com/proclickrg" class="btn btn-twitter btn-icon me-1">
                <i class="icon ion-logo-twitter"></i>
            </a>
            <!-- instagram -->
            <a href="https://instagram.com/profindosekuritas" class="btn btn-instagram btn-icon me-1">
                <i class="icon ion-logo-instagram"></i>
            </a>
        </footer>
        <!-- * app Footer -->


    </div>
    <!-- * appCapsule -->

    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <div class="item active">
            <a href="/">
                <p>
                    <i class="icon ion-ios-water"></i>
                    <span class="pt-3">Home</span>
                </p>
            </a>
        </div>
        <div class="item">
            <a href="/surat-pernyataan-kuasa">
                <p>
                    <i class="icon ion-ios-apps"></i>
                    <span class="mt-3">Pernyataan Kuasa</span>
                </p>
            </a>
        </div>
        <div class="item">
            <a href="/perjanjian-pembukaan-rekening">
                <p>
                    <span>Pembukaan Rekening</span>
                </p>
            </a>
        </div>
        <div class="item">
            <a href="/pernyataan-nasabah-rdn-bca">
                <p>
                    <span>Nasabar RDN BCA</span>
                </p>
            </a>
        </div>
        <div class="item">
            <a href="/ketentuan-tabungan">
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
    </div>
    <!-- * App Bottom Menu -->

    <!-- Sidebar Menu -->
    <div class="offcanvas offcanvas-start sidebarWrapper" tabindex="-1" id="appSidebar">
        <div class="offcanvas-body">
            <nav class="sidebar">
                <div class="sidebarGroup">
                    <ul class="sidebarMenu">
                        <li>
                            <a href="/surat-pernyataan-kuasa">
                                <i class="icon ion-ios-people"></i>
                                PERSETUJUAN PERJANJIAN ELEKTRONIK PEMBUKAAN REKENING
                            </a>
                        </li>
                        <li>
                            <a href="/pernyataan-nasabah-rdn-bca">
                                <i class="icon ion-ios-chatboxes"></i>
                                PERNYATAAN NASABAH RDN BCA
                            </a>
                        </li>
                        <li>
                            <a href="/perjanjian-pembukaan-rekening">
                                <i class="icon ion-ios-apps"></i>
                                PERJANJIAN PEMBUKAAN REKENING
                            </a>
                        </li>
                        <li>
                            <a href="/perjanjian-pembukaan-rekening">
                                <i class="icon ion-ios-analytics"></i>
                                KETENTUAN-KETENTUAN TAPRES
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
    <!-- * Sidebar Menu -->


    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Bootstrap-->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Main Js File -->
    <script src="assets/js/app.js"></script>


</body>

</html>
