<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bitter Mobile Template</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="description" content="Bitter Mobile Template">
    <meta name="keywords" content="bootstrap, mobile template, Bootstrap 5, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/icon/favicon.png') }}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/icon/192x192.png') }}">
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
            <img src="{{ asset('assets/img/logo.png') }}" alt="Bitter" class="image">
        </div>
        <div class="right">
            <label for="searchInput" class="mb-0 icon toggleSearchbox">
                <i class="icon ion-ios-search"></i>
            </label>
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


            <!-- Card Overlay Carousel -->
            <div class="carousel-single splide mt-2 mb-4">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="blog-post.html" class="card card-overlay text-white">
                                <img src="{{ asset('assets/img/sample/photo8.jpg') }}" class="card-img img-fluid"
                                    alt="image">
                                <div class="card-img-overlay">
                                    <div class="header row">
                                        <div class="col-8">TRAVEL</div>
                                        <div class="col-4 text-end">
                                            <i class="icon ion-ios-heart"></i> 523
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h1>Top 10 Travel Bloggers You Should Already Be Following</h1>
                                        <footer>
                                            <div class="author">
                                                <img src="{{ asset('assets/img/sample/avatar3.jpg') }}" alt="avatar">
                                                Marti Valencia
                                            </div>
                                            <div class="date">
                                                5 hours ago
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="blog-post.html" class="card card-overlay text-white">
                                <img src="{{ asset('assets/img/sample/photo5.jpg') }}" class="card-img img-fluid"
                                    alt="image">
                                <div class="card-img-overlay">
                                    <div class="header row">
                                        <div class="col-8">EVENTS</div>
                                        <div class="col-4 text-end">
                                            <i class="icon ion-ios-heart"></i> 12K
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h1>The World's Largest Pillow Fight is Also a Festival</h1>
                                        <footer>
                                            <div class="author">
                                                <img src="{{ asset('assets/img/sample/avatar.jpg') }}" alt="avatar">
                                                Sofie Fulloway
                                            </div>
                                            <div class="date">
                                                2 hours ago
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="blog-post.html" class="card card-overlay text-white">
                                <img src="{{ asset('assets/img/sample/photo11.jpg') }}" class="card-img img-fluid"
                                    alt="image">
                                <div class="card-img-overlay">
                                    <div class="header row">
                                        <div class="col-8">SPORTS</div>
                                        <div class="col-4 text-end">
                                            <i class="icon ion-ios-heart"></i> 12K
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h1>Juxon Julio praises Peri’s resilience after testing week</h1>
                                        <footer>
                                            <div class="author">
                                                <img src="{{ asset('assets/img/sample/avatar5.jpg') }}" alt="avatar">
                                                Jackie Pearson
                                            </div>
                                            <div class="date">
                                                2 hours ago
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="blog-post.html" class="card card-overlay text-white">
                                <img src="{{ asset('assets/img/sample/photo10.jpg') }}" class="card-img img-fluid"
                                    alt="image">
                                <div class="card-img-overlay">
                                    <div class="header row">
                                        <div class="col-8">WORLD</div>
                                        <div class="col-4 text-end">
                                            <i class="icon ion-ios-heart"></i> 12K
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h1>Best of Skyscrapers in the World</h1>
                                        <footer>
                                            <div class="author">
                                                <img src="{{ asset('assets/img/sample/avatar6.jpg') }}" alt="avatar">
                                                Vincent Hunt
                                            </div>
                                            <div class="date">
                                                2 hours ago
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- * slide -->
                    </ul>
                </div>
            </div>
            <!-- * Card Overlay Carousel -->

            <!-- Post Carousel -->
            <div class="sectionTitle mb-2 mt-4">
                <div class="text-muted">NEWS</div>
                <div class="title">
                    <h1>Today</h1>
                    <a href="blog-category.html">View All</a>
                </div>
            </div>

            <div class="carousel-multiple postCarousel splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="blog-post.html">
                                <img src="{{ asset('assets/img/sample/photo13.jpg') }}" alt="image"
                                    class="image">
                                <h2 class="title">Can you spot the difference in this scene</h2>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="blog-post.html">
                                <img src="{{ asset('assets/img/sample/photo2.jpg') }}" alt="image"
                                    class="image">
                                <h2 class="title">20 Presents That Actually Won't Get Re-Gifted</h2>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="blog-post.html">
                                <img src="{{ asset('assets/img/sample/photo3.jpg') }}" alt="image"
                                    class="image">
                                <h2 class="title">Is Orange Juice the Enemy of the Disease?</h2>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="blog-post.html">
                                <img src="{{ asset('assets/img/sample/photo4') }}.jpg" alt="image"
                                    class="image">
                                <h2 class="title">Best Selling Furniture of This Year</h2>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="blog-post.html">
                                <img src="{{ asset('assets/img/sample/photo12.jpg') }}" alt="image"
                                    class="image">
                                <h2 class="title">What is the best gift to buy for your husband?</h2>
                            </a>
                        </li>
                        <!-- * slide -->
                    </ul>
                </div>
            </div>
            <!-- * Post Carousel -->

            <div class="divider mt-4 mb-2"></div>

            <!-- Button Carousel -->
            <div class="carousel-small splide buttonCarousel">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="{{ asset('assets/img/sample/product1.jpg') }}" alt="image">
                                </div>
                                <strong>Headphones</strong>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="{{ asset('assets/img/sample/product2.jpg') }}" alt="image">
                                </div>
                                <strong>Furniture</strong>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="{{ asset('assets/img/sample/product3.jpg') }}" alt="image">
                                </div>
                                <strong>Watch</strong>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="{{ asset('assets/img/sample/product4.jpg') }}" alt="image">
                                </div>
                                <strong>Camera</strong>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="{{ asset('assets/img/sample/product5.jpg') }}" alt="image">
                                </div>
                                <strong>Computer</strong>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="{{ asset('assets/img/sample/product6.jpg') }}" alt="image">
                                </div>
                                <strong>Fruits</strong>
                            </a>
                        </li>
                        <!-- * slide -->
                        <!-- slide -->
                        <li class="splide__slide">
                            <a href="#">
                                <div class="imgWrapper">
                                    <img src="{{ asset('assets/img/sample/product7.jpg') }}" alt="image">
                                </div>
                                <strong>Pencil</strong>
                            </a>
                        </li>
                        <!-- * slide -->
                    </ul>
                </div>
            </div>
            <!-- * Button Carousel -->


            <div class="divider mt-2 mb-4"></div>

            <div class="sectionTitle mb-2">
                <div class="text-muted">Overview</div>
                <div class="title">
                    <h1>Products</h1>
                    <a href="blog-category.html">View All</a>
                </div>
                <div class="lead">
                    Bitter is using modern design style. Simple and elegant design lines.
                </div>
            </div>

            <!-- item list -->
            <div class="itemList">
                <div class="item">
                    <div class="image">
                        <img src="{{ asset('assets/img/sample/photo14.jpg') }}" alt="image">
                    </div>
                    <div class="text">
                        <h4 class="title">Pinky Glasses</h4>
                        <div class="text-muted">Simple and elegant design line and has stunning looks</div>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{ asset('assets/img/sample/photo13.jpg') }}" alt="image">
                    </div>
                    <div class="text">
                        <h4 class="title">Yellowish Headphone</h4>
                        <div class="text-muted">Perfect spacing and perfect color sheme.</div>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{ asset('assets/img/sample/photo4.jpg') }}" alt="image">
                    </div>
                    <div class="text">
                        <h4 class="title">Hybrid</h4>
                        <div class="text-muted">Just what you need for perfect hybrid app design.</div>
                    </div>
                </div>
            </div>
            <!-- * item list -->

            <div class="divider mt-4 mb-4"></div>

            <div class="sectionTitle mb-2">
                <div class="text-muted">Lastest</div>
                <div class="title">
                    <h1>Blogs</h1>
                    <a href="blog-category.html">View All</a>
                </div>
            </div>

            <!-- post list -->
            <div class="row">
                <!-- item -->
                <div class="col-6">
                    <a href="blog-post.html" class="postItem">
                        <div class="imageWrapper">
                            <img src="{{ asset('assets/img/sample/photo11.jpg') }}" alt="image"
                                class="image">
                            <div class="badge badge-warning">SPORT</div>
                        </div>
                        <h2 class="title">Juxon praises Peri’s resilience after testing week</h2>
                        <footer>
                            <img src="{{ asset('assets/img/sample/avatar.jpg') }}" alt="avatar"
                                class="avatar">
                            25 Sep 2019
                        </footer>
                    </a>
                </div>
                <!-- * item -->
                <!-- item -->
                <div class="col-6">
                    <a href="blog-post.html" class="postItem">
                        <div class="imageWrapper">
                            <img src="{{ asset('assets/img/sample/photo8.jpg') }}" alt="image"
                                class="image">
                            <div class="badge badge-success">TRAVEL</div>
                        </div>
                        <h2 class="title">Top 10 Travel Bloggers You Should Follow</h2>
                        <footer>
                            <img src="{{ asset('assets/img/sample/avatar2.jpg') }}" alt="avatar"
                                class="avatar">
                            21 Sep 2019
                        </footer>
                    </a>
                </div>
                <!-- * item -->
                <!-- item -->
                <div class="col-6">
                    <a href="blog-post.html" class="postItem">
                        <div class="imageWrapper">
                            <img src="{{ asset('assets/img/sample/photo3.jpg') }}" alt="image"
                                class="image">
                            <div class="badge badge-danger">FOODS</div>
                        </div>
                        <h2 class="title">Is Orange Juice the Enemy of the Disease?</h2>
                        <footer>
                            <img src="{{ asset('assets/img/sample/avatar.jpg') }}" alt="avatar"
                                class="avatar">
                            15 Sep 2019
                        </footer>
                    </a>
                </div>
                <!-- * item -->
                <!-- item -->
                <div class="col-6">
                    <a href="blog-post.html" class="postItem">
                        <div class="imageWrapper">
                            <img src="{{ asset('assets/img/sample/photo4.jpg') }}" alt="image"
                                class="image">
                            <div class="badge badge-info">HEALTH</div>
                        </div>
                        <h2 class="title">Check the Best Selling Furniture of This Year</h2>
                        <footer>
                            <img src="{{ asset('assets/img/sample/avatar.jpg') }}" alt="avatar"
                                class="avatar">
                            12 Sep 2019
                        </footer>
                    </a>
                </div>
                <!-- * item -->
            </div>
            <!-- * post list -->

            <div class="divider mt-2 mb-4"></div>

            <!-- Iconed Box -->
            <div class="row">
                <!-- item -->
                <div class="col-6">
                    <div class="iconedBox">
                        <div class="iconWrap bg-primary">
                            <i class="icon ion-ios-apps"></i>
                        </div>
                        <h4 class="title">Components</h4>
                        Use the lastest easy to use components.
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="col-6">
                    <div class="iconedBox">
                        <div class="iconWrap bg-danger">
                            <i class="icon ion-ios-cut"></i>
                        </div>
                        <h4 class="title">UX Based</h4>
                        We designed Bitter UX based, simple and clean.
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="col-6">
                    <div class="iconedBox">
                        <div class="iconWrap bg-success">
                            <i class="icon ion-ios-folder-open"></i>
                        </div>
                        <h4 class="title">Well Documented</h4>
                        With Bitter you can easily build and edit the theme.
                    </div>
                </div>
                <!-- item -->
                <!-- item -->
                <div class="col-6">
                    <div class="iconedBox">
                        <div class="iconWrap bg-info">
                            <i class="icon ion-ios-thumbs-up"></i>
                        </div>
                        <h4 class="title">Ready to build</h4>
                        Does not require long installation.
                    </div>
                </div>
                <!-- item -->
            </div>
            <!-- * Iconed Boxes -->

            <div class="divider mt-2 mb-4"></div>

            <div class="sectionTitle mb-1">
                <div class="text-muted">Most Popular</div>
                <div class="title">
                    <h1>Profiles</h1>
                    <a href="blog-category.html">View All</a>
                </div>
            </div>

            <!-- listview -->
            <div class="listView detailed">
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="{{ asset('assets/img/sample/avatar.jpg') }}" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Carmen Beltrán</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                New York City
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="{{ asset('assets/img/sample/avatar2.jpg') }}" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Furmaan Bharyar</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                London
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="{{ asset('assets/img/sample/avatar3.jpg') }}" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Kari Granleese</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                Paris
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="{{ asset('assets/img/sample/avatar4.jpg') }}" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Jurriaan van der Broek</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                Kiew
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="{{ asset('assets/img/sample/avatar5.jpg') }}" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Homayoun Shakibaii</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                Monterrey
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="{{ asset('assets/img/sample/avatar6.jpg') }}" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Stephanus Huggins</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                Oslo
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="{{ asset('assets/img/sample/avatar7.jpg') }}" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Adhraaa Al Azimi</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                Florence
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="listItem">
                    <div class="image">
                        <img src="{{ asset('assets/img/sample/avatar8.jpg') }}" alt="avatar">
                    </div>
                    <div class="text">
                        <div>
                            <strong>Malin Quist</strong>
                            <div class="text-muted">
                                <i class="icon ion-ios-pin me-1"></i>
                                Tokyo
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- * listview -->

        </div>

        <!-- app Footer -->
        <footer class="appFooter">
            <div class="heading">Copyright © Bitter. All Rights Reserved.</div>
            <p>
                Modern, simple and elegant design for mobile devices. Based on Bootstrap.
            </p>
            <!-- facebook -->
            <a href="#" class="btn btn-facebook btn-icon me-1">
                <i class="icon ion-logo-facebook"></i>
            </a>
            <!-- twitter -->
            <a href="#" class="btn btn-twitter btn-icon me-1">
                <i class="icon ion-logo-twitter"></i>
            </a>
            <!-- instagram -->
            <a href="#" class="btn btn-instagram btn-icon me-1">
                <i class="icon ion-logo-instagram"></i>
            </a>
            <!-- linkedin -->
            <a href="#" class="btn btn-linkedin btn-icon me-1">
                <i class="icon ion-logo-linkedin"></i>
            </a>
            <!-- whatsapp -->
            <a href="#" class="btn btn-whatsapp btn-icon me-1">
                <i class="icon ion-logo-whatsapp"></i>
            </a>
        </footer>
        <!-- * app Footer -->


    </div>
    <!-- * appCapsule -->




    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <div class="item active">
            <a href="index.html">
                <p>
                    <i class="icon ion-ios-water"></i>
                    <span>Home</span>
                </p>
            </a>
        </div>
        <div class="item">
            <a href="pages.html">
                <p>
                    <i class="icon ion-ios-apps"></i>
                    <span>Pages</span>
                </p>
            </a>
        </div>
        <div class="item">
            <a href="components.html">
                <p>
                    <i class="icon ion-ios-analytics"></i>
                    <span>Components</span>
                </p>
            </a>
        </div>
        <div class="item">
            <a href="search.html">
                <p>
                    <i class="icon ion-ios-search"></i>
                    <span>Search</span>
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
                <div class="profilebox">
                    <img src="{{ asset('assets/img/sample/avatar.jpg') }}" alt="avatar" class="avatar">
                    <h2 class="title">Jane Antunes</h2>
                    <h5 class="lead">
                        <i class="icon ion-ios-pin me-1"></i>
                        Chicago
                    </h5>
                    <div class="sidebutton">
                        <a href="#">
                            <i class="icon ion-ios-settings"></i>
                        </a>
                    </div>
                </div>
                <div class="sidebarGroup">
                    <ul class="sidebarMenu">
                        <li>
                            <a href="social-home.html">
                                <i class="icon ion-ios-people"></i>
                                Social
                            </a>
                        </li>
                        <li>
                            <a href="social-chat.html">
                                <i class="icon ion-ios-chatboxes"></i>
                                Chat
                            </a>
                        </li>
                        <li>
                            <a href="pages.html">
                                <i class="icon ion-ios-apps"></i>
                                Pages
                            </a>
                        </li>
                        <li>
                            <a href="components.html">
                                <i class="icon ion-ios-analytics"></i>
                                Components
                            </a>
                        </li>
                        <li>
                            <a href="blog-home.html">
                                <i class="icon ion-ios-book"></i>
                                Magazine - Blog
                            </a>
                        </li>
                        <li>
                            <a href="page-login.html">
                                <i class="icon ion-ios-lock"></i>
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sidebarGroup">
                    <ul class="sidebarMenu">
                        <li class="title">Online</li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('assets/img/sample/avatar2.jpg') }}" alt="avatar"
                                    class="avatar">
                                Guiying K.
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('assets/img/sample/avatar3.jpg') }}" alt="avatar"
                                    class="avatar">
                                Kita Chihoko
                                <span class="badge badge-primary">2</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('assets/img/sample/avatar4.jpg') }}" alt="avatar"
                                    class="avatar">
                                Leonetta Lloyd
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('assets/img/sample/avatar5.jpg') }}" alt="avatar"
                                    class="avatar">
                                Lizzie Rose
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{ asset('assets/img/sample/avatar6.jpg') }}" alt="avatar"
                                    class="avatar">
                                Kari Granleese
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
    <script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <!-- Splide -->
    <script src="{{ asset('assets/js/plugins/splide/splide.min.js') }}"></script>
    <!-- Main Js File -->
    <script src="{{ asset('assets/js/app.js') }}"></script>


</body>

</html>
