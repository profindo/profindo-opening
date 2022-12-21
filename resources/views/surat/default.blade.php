@extends('home')

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