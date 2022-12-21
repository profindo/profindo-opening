@extends('home')

@section('header')
<!-- App Header -->
<div class="appHeader bg-danger">
    <div class="left">
        <a href="#" class="icon goBack">
            <i class="icon ion-ios-arrow-back"></i>
        </a>
    </div>
    {{-- <div class="pageTitle">
        Splash Iconed
    </div> --}}
    <div class="right">
    </div>
</div>
<!-- * App Header -->
@endsection

@section('content')
@include('surat.'.$surat)
@endsection

@section('footer')
<footer>
    <div class="appBottomMenu bg-danger">
        <div class="item">
            <a href="/">
                <p class="text-white">
                    <span class="iconify mb-2" data-icon="ion:arrow-back"></span>
                    <span>Kembali</span>
                </p>
            </a>
        </div>
    </div>
</footer>
@endsection