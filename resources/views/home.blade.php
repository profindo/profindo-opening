<!doctype html>
<html lang="en">

<head>
    @include('layout.include')
</head>

<body>
    <!-- Page loading -->
    @include('layout.loading')
    <!-- * Page loading -->

    <!-- App Header -->
    @include('layout.header')
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">
        <div class="appContent">
            {{--  --}}
            @include('opening.preparations')
        </div>
    </div>
    <!-- * appCapsule -->

    <!-- App Bottom Menu -->
    @include('layout.footer')
    <!-- * App Bottom Menu -->

    <!-- Sidebar Menu -->
    @include('layout.sidebar')
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
