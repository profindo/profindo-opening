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
            {!! $content !!}
        </div>
    </div>
    <!-- * appCapsule -->

    <!-- App Bottom Menu -->
    @include('layout.footer')
    <!-- * App Bottom Menu -->

    <!-- Sidebar Menu -->
    @include('layout.sidebar')
    <!-- * Sidebar Menu -->

    <!-- Components -->
    {{--@foreach ($content->components as $component)
        {!! $component !!}
    @endforeach --}}
</body>

</html>
